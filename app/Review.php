<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table ='review';
    
    protected $fillable = [
        'name_film', 
        'genre',
        'type', 
        'review',
        'rating',
        'picture'
    ];

    protected $primaryKey = 'id';

    const CREATED_AT = NULL;
    const UPDATED_AT = NULL;

    public function Users(){
        return $this->belongsTo(User::class);
    }
}
