<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'image_url',
    ];

    // a image  belong to a project
    public function project(){
        return $this->belongsTo(Project::class, 'project_id');
    }

    //Project::class, 'category_id'


}
