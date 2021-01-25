<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_careers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('department');
            $table->string('designation');
            $table->longText('job_description');
            $table->longText('major_skills');
            $table->integer('vacancyNumber');
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
        Schema::dropIfExists('admin_careers');
    }
}
