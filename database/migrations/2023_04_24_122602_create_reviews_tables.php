<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTables extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('customer_name', 200)->nullable();
            $table->string('customer_career_title', 200)->nullable();
            $table->integer('position')->unsigned()->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('review_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'review');
        });

        Schema::create('review_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'review');
        });
    }

    public function down()
    {
        Schema::dropIfExists('review_revisions');
        Schema::dropIfExists('review_slugs');
        Schema::dropIfExists('reviews');
    }
}
