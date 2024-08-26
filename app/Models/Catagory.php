<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $table = 'catagorys';
    protected $guarded = [];
    public function track()
    {
        return $this->belongsTo(Track::class, 'track_id');
    }
    protected $casts = [
        'catagory_type' => 'json',
    ];
}
