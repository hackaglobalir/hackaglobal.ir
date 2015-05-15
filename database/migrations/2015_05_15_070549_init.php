<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Init extends Migration {

//
// NOTE - Make changes to the database.
// --------------------------------------------------

    public function up()
    {

//
// NOTE -- users
// --------------------------------------------------

        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 100);
            $table->string('last_name',100);
            $table->string('email',150)->unique();
            $table->string('password',40);
            $table->tinyInteger('role');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
        });

//
// NOTE -- events
// --------------------------------------------------

        Schema::create('events', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->text('description')->nullable();
            $table->dateTime('held_at');
            $table->string('held_at_string',50)->unique();
            $table->tinyInteger('capacity');
            $table->string('address',500);
            $table->string('map',100)->nullable();
            $table->unsignedInteger('city_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
        });


//
// NOTE -- cities
// --------------------------------------------------

        Schema::create('cities', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->string('domain_name', 200)->unique();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
        });

//
// NOTE -- languages
// --------------------------------------------------

        Schema::create('languages', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
        });

//
// NOTE -- user_event
// --------------------------------------------------

        Schema::create('user_event', function(Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('event_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
            $table->tinyInteger('approved');
            $table->primary(['user_id','event_id']);
        });

//
// NOTE -- skills
// --------------------------------------------------

        Schema::create('skills', function(Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('language_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
            $table->primary(['user_id','language_id']);
        });


//
// NOTE -- user_city_admin
// --------------------------------------------------

        Schema::create('user_city_admin', function(Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('city_id');
            $table->dateTIme('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
            $table->primary(['city_id','user_id']);
        });


//
// NOTE -- create_event
// --------------------------------------------------

        Schema::create('create_event', function(Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('event_id');
            $table->dateTIme('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
            $table->primary(['user_id','event_id']);
        });

//
// NOTE -- donation
// --------------------------------------------------

        Schema::create('contacts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('email',200);
            $table->string('phone_number',30);
            $table->text('message');
            $table->tinyInteger('message_type');
            $table->dateTIme('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
        });


//
// NOTE -- skills_foreign
// --------------------------------------------------

        Schema::table('skills', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('language_id')->references('id')->on('languages');
        });

//
// NOTE -- user_event_foreign
// --------------------------------------------------

        Schema::table('user_event', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('event_id')->references('id')->on('events');
        });


//
// NOTE -- create_event_foreign
// --------------------------------------------------

        Schema::table('create_event', function(Blueprint $table) {
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('user_id')->references('id')->on('users');
        });


//
// NOTE -- user_city_admin_foreign
// --------------------------------------------------

        Schema::table('user_city_admin', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('city_id')->references('id')->on('cities');
        });


//
// NOTE -- events_foreign
// --------------------------------------------------

        Schema::table('events', function(Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('cities');
        });

    }


//
// NOTE - Revert the changes to the database.
// --------------------------------------------------

    public function down()
    {
        Schema::drop('contacts');
        Schema::drop('create_event');
        Schema::drop('skills');
        Schema::drop('user_event');
        Schema::drop('languages');
        Schema::drop('events');
        Schema::drop('user_city_admin');
        Schema::drop('cities');
        Schema::drop('users');
    }
}
