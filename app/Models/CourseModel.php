<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'course_name',
        'short_bio',
        'course_price',
        'discount_price',
        'course_des',
        'banner',
        'intro_video',
        'video_count',
        'course_week',
        'extra_one',
        'extra_two',
    ];
}
