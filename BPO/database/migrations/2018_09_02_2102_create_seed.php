<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('accesslevel', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('level');
		    $table->enum('type', ['superadmin',  'admin',  'assistant',  'student'])->comment('Her defineres type adgang.');
		    
		    $table->primary('level');
		
		    $table->timestamps();
		
		});

		Schema::create('users', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->string('username', 15);
		    $table->integer('level')->unsigned();
		    $table->string('firstname', 45);
		    $table->string('lastname', 45);
		    $table->string('email', 45);
		    $table->string('password', 45);
		    $table->string('sex', 45);
		    
		    $table->primary('username');
		
		    $table->index('level','level_idx');
		
		    $table->foreign('level')
		        ->references('level')->on('accesslevel');
		
		    $table->timestamps();
		
		});

		Schema::create('groups', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('group_number');
		    // Error generate : year)
		    $table->integer('year');
		    $table->string('leader', 45);
		    $table->string('title', 127)->nullable();
		    $table->string('url', 127)->nullable();
		    $table->string('supervisor', 45)->nullable();
		    
		    $table->primary('group_number', 'year');
		
		    $table->timestamps();
		
		});

		Schema::create('student', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->string('username', 15)->unsigned();
		    $table->string('student_points', 45);
		    $table->string('program', 45);
		    
		    $table->primary('username');
		
		    $table->foreign('username')
		        ->references('username')->on('users');
		
		    $table->timestamps();
		
		});

		Schema::create('student_groups', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->string('student', 15)->unsigned();
		    $table->integer('student_groups_year');
		    $table->integer('student_groups_number');
		    // Error generate : year) ON DELETE NO ACTION ON UPDATE NO ACTION
		    $table->integer('year');
		    
		    $table->primary('student', 'student_groups_year');
		
		    $table->index(['student_groups_number', 'student_groups_year'],'group_number_idx');
		
		    $table->foreign('student_groups_number')
		        ->references('group_number')->on('groups');
		
		    $table->foreign('student_groups_year')
		        ->references('year')->on('groups');
		
		    $table->foreign('student')
		        ->references('username')->on('student');
		
		    $table->timestamps();
		
		});

		Schema::create('documents', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->increments('id');
		    $table->integer('documents_year');
		    $table->integer('documents_groups_number');
		    $table->string('file_name', 127);
		    $table->string('title', 45);
		    // Error generate : year) ON DELETE NO ACTION ON UPDATE NO ACTION
		    $table->integer('year');
		
		    $table->index(['documents_year', 'documents_groups_number'],'connect_groups_idx');
		
		    $table->foreign('documents_groups_number')
		        ->references('group_number')->on('groups');
		
		    $table->foreign('documents_year')
		        ->references('year')->on('groups');
		
		    $table->timestamps();
		
		});

		Schema::create('dates', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->dateTime('start');
		    $table->dateTime('status_report');
		    $table->dateTime('project_sketch');
		    $table->dateTime('preproject');
		    $table->dateTime('project_report');
		    $table->dateTime('end');
		
		    $table->timestamps();
		
		});

		Schema::create('sensors_supervisors', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->string('email', 45);
		    $table->string('firstname', 45);
		    $table->string('lastname', 45);
		    $table->string('status', 45);
		    
		    $table->primary('email');
		
		    $table->timestamps();
		
		});

		Schema::create('room', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->string('room', 45);
		    
		    $table->primary('room');
		
		    $table->timestamps();
		
		});

		Schema::create('presentation_plan', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('presentation_plan_group_number');
		    $table->integer('presentation_plan_year');
		    $table->dateTime('start');
		    $table->dateTime('end');
		    $table->string('presentation_plan_room', 45)->unsigned();
		    $table->integer('sensor');
		    // Error generate : year) ON DELETE NO ACTION ON UPDATE NO ACTION
		    $table->integer('year');
		    
		    $table->primary('presentation_plan_group_number', 'presentation_plan_year');
		
		    $table->index('presentation_plan_room','presentation_plan_idx');
		
		    $table->foreign('presentation_plan_group_number')
		        ->references('group_number')->on('groups');
		
		    $table->foreign('presentation_plan_year')
		        ->references('year')->on('groups');
		
		    $table->foreign('presentation_plan_room')
		        ->references('room')->on('room');
		
		    $table->timestamps();
		
		});

		Schema::create('log', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('id');
		    $table->time('time');
		    $table->string('user', 45);
		    $table->string('file', 45);
		    $table->integer('pos');
		    $table->string('command', 45);
		    
		    $table->primary('id');
		
		    $table->timestamps();
		
		});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('log');
		Schema::drop('presentation_plan');
		Schema::drop('room');
		Schema::drop('sensors_supervisors');
		Schema::drop('dates');
		Schema::drop('documents');
		Schema::drop('student_groups');
		Schema::drop('student');
		Schema::drop('groups');
		Schema::drop('users');
		Schema::drop('accesslevel');

    }
}