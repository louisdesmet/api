<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingTypeSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_type_subject', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->unsignedBigInteger('meeting_type_id');
            $table->foreign('meeting_type_id')->references('id')->on('meeting_types');
            $table->unsignedTinyInteger('allowed')->default(0);
            $table->unsignedTinyInteger('auto_accept')->default(0);
            $table->unsignedInteger('duration')->default(45);
            $table->unsignedInteger('granularity')->default(30);
            $table->unsignedInteger('earliest')->default(0);
            $table->unsignedInteger('latest')->default(42);
            $table->unsignedInteger('max_concurrent_appointments')->default(1);
            $table->unsignedInteger('buffer')->default(0);
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
        Schema::dropIfExists('meeting_type_subject');
    }
}
