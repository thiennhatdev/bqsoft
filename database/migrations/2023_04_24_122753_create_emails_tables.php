<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTables extends Migration
{
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('customer_email', 200)->nullable();
            $table->integer('position')->unsigned()->nullable();
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('email_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'email');
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_revisions');
        Schema::dropIfExists('email_slugs');
        Schema::dropIfExists('emails');
    }
}
