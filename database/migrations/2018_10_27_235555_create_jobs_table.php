<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('company_name');
            $table->string('category');
            $table->string('address');
            $table->string('street');
            $table->string('city');
            $table->text('description');
            $table->text('requirements');
            $table->decimal('salary',6,2);
            $table->string('picture')->default('noImage');
            $table->boolean('sponsored')->default(0);
            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('jobs');
    }
}
