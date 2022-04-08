<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notebooks', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer');
            $table->string('type');
            $table->string('display');
            $table->unsignedInteger('memory');
            $table->unsignedInteger('harddisk');
            $table->string('videocontroller');
            $table->unsignedInteger('price');
            $table->foreignId('processor_id')->constrained()->cascadeOnDelete();
            $table->foreignId('opsystem_id')->constrained()->cascadeOnDelete();
            $table->unsignedInteger('pieces');
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
        Schema::dropIfExists('notebooks');
    }
}
