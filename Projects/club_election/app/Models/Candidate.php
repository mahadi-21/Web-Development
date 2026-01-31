<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public static function totalForPosition($com_id, $pos_id)
    {
        return self::where('committee_id', $com_id)
            ->where('position_id', $pos_id)
            ->count();
    }

    
    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
