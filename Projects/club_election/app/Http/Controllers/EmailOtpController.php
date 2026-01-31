<?php

namespace App\Http\Controllers;

use App\Notifications\EmailOtpNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailOtpController extends Controller
{
    public function resend()
    {
        $user = Auth::user();


        $otp = random_int(100000, 999999);

        $user->update([
            'email_otp' => $otp,
            'email_otp_expires_at' => now()->addMinutes(5),
        ]);

        $user->notify(new EmailOtpNotification($otp));

        return back()->with('status', 'otp-sent');
    }


    public function verify(Request $request)
    {
        // Validate the OTP input
        $request->validate([
            'full_otp' => 'required|digits:6',
        ]);

        $user = Auth::user(); // Get currently logged-in user
        $otpInput = $request->input('full_otp');

        // Check if OTP exists
        if (!$user->email_otp) {
            return back()->withErrors(['otp' => 'No OTP found. Please request a new code.']);
        }

        // Check if OTP is expired
        if ($user->email_otp_expires_at->lt(Carbon::now())) {
            return back()->withErrors(['otp' => 'OTP has expired. Please request a new code.']);
        }

        // Check if OTP matches
        if ($otpInput !== $user->email_otp) {
            return back()->withErrors(['otp' => 'The entered OTP is incorrect.']);
        }

        // OTP is valid: mark email as verified
        $user->email_verified_at = Carbon::now();
        $user->email_otp = null; // Clear OTP
        $user->email_otp_expires_at = null; // Clear expiration
        $user->save();

        if ($user->role === 'member') {
            return redirect()->route('user.dashboard');
        }

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        // Redirect with success message
        return redirect()->route('dashboard')->with('status', 'Email verified successfully!');
    }


}
