<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipantsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('email', 128);
            $table->string('avatar');
            $table->unsignedTinyInteger('step')->default(0);
            $table->timestamp('step_assigned_at')->nullable();
            $table->unsignedInteger('curator_id')->nullable();
            $table->timestamp('curator_assigned_at')->nullable();
            $table->unsignedTinyInteger('curator_pending_level')->default(0);
            $table->text('extra');
            $table->unsignedTinyInteger('attempts')->default(1);
            $table->timestamp('verified_at')->nullable();
            $table->integer('graduate')->default(0);
            $table->string('certificate', 20)->nullable();
            $table->timestamp('graduated_at')->nullable();
            $table->timestamp('certificate_expiration_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('curator_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }

}
