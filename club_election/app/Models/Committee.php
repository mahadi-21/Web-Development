<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function positions()
    {
        return $this->belongsToMany(
            Position::class,
            'committee_positions',
            'committee_id',
            'position_id'
        );
    }
   


}
