<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    protected $fillable = [
        'title', 'description',
    ];

    public function users(){
        return $this->belongsTo(users::class);
    }

    public function categories(){
        return $this->belongsTo(categories::class);
    }
}
