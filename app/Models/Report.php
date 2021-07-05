<?php

namespace App\Models;
use Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'user_id',
        'posted_by',
        'report',
    ];

    // report has many image
    public function images(){
        return $this->hasMany(ReportImage::class, 'project_id');

    }


    public function getCreatedatAttribute($date){
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    public function getUpdatedAtAttribute($date){
    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }


}
