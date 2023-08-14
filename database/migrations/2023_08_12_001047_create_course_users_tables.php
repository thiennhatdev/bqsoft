<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseUsersTables extends Migration
{
    public function up()
    {
        Schema::create('course_users', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('phoneOrEmail', 200);
            $table->string('courseName', 200);

        });

        Schema::create('course_user_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'course_user');
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_user_revisions');
        Schema::dropIfExists('course_users');
    }
}
