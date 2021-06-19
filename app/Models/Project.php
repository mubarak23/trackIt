<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'location',
        'amount',
        'user_id',
        'posted_by',
        'tags',
    ];

    // A project belong to a user
    public function user(){
        return $this->belongsTo('App\Model\User');
    }

    // a project  belong to a category
    public function category(){
        return $this->belongsTo('App\Model\Category');
    }



}
