<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMembersTables extends Migration
{
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('name', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('career_title', 100)->nullable();
            $table->string('fb_link', 100)->nullable();
            $table->string('twitter_link', 100)->nullable();
            $table->string('instagram_link', 200)->nullable();
            $table->string('linked_link', 200)->nullable();
            $table->integer('position')->unsigned()->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('team_member_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'team_member');
        });

        Schema::create('team_member_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'team_member');
        });
    }

    public function down()
    {
        Schema::dropIfExists('team_member_revisions');
        Schema::dropIfExists('team_member_slugs');
        Schema::dropIfExists('team_members');
    }
}
