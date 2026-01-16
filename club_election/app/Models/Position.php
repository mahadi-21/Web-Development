<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Position extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];


    public function committees()
    {
        return $this->belongsToMany(
            Committee::class,
            'committee_positions',
            'position_id',
            'committee_id'
        );
    }
    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'position_id', 'id');
    }
    

}
