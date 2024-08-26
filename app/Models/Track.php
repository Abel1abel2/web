<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $table = 'tracks';
    protected $guarded = [];
    public function catagory()
    {
        return $this->hasMany(Catagory::class, 'track_id');
    }
    public function budget()
    {
        return $this->belongsTo(Budget::class, 'budget_id');
    }
}
