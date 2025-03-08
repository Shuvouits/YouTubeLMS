<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    protected $guarded = [];

    public function lecture(){
        return $this->hasMany(CourseLecture::class, 'section_id', 'id');
    }
}
