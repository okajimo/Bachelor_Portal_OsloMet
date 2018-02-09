<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeedsTable extends Migration
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
		
		    $table->foreign('level')->references('level')->on('accesslevel');
		
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
        Schema::dropIfExists('seeds');
    }
}
