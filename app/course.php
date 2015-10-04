<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'course';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['users_id','term_course_id', 'number_course', 'name_course', 'credits', 'groups', 'number_instructors', 'number_student',
        'date_teach', 'time_teach', 'hour_practice', 'hour_describe', 'room_number'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
