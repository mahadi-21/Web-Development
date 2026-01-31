<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function committee()
    {
        return $this->belongsTo(Committee::class);
    }
}
