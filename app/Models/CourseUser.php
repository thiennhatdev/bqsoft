<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class CourseUser extends Model 
{
    use HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'courseName',
        'phoneOrEmail',

    ];
    
}
