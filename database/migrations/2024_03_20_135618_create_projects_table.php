<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->String('name',255)->nullable();
            $table->String('introduction',255)->nullable();
            $table->String('location',255)->nullable();
            $table->String('cost',22)->nullable()->nullable()->default(0.00);
            $table->String('created_at',255)->nullable();
            $table->String('updated_at',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
