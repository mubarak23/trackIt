<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Carbon;

class Project extends Model
{
    use HasFactory;
    use Notifiable;

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
        return $this->belongsTo(Category::class, 'category_id');
    }


    // a project has many image
    public function images(){
        return $this->hasMany(Image::class, 'project_id');
        //return $this->hasMany('App\Model\Image', 'project_id');
    }

    // a project has many image
    public function reports(){
        return $this->hasMany(Report::class, 'project_id');
    }



    public function getCreatedatAttribute($date){
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    public function getUpdatedAtAttribute($date)
    {
    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

}
