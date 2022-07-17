<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shishas', function (Blueprint $table) {
            $table->id();
            $table->uuid()
                ->unique()
                ->comment('used for audit logging and public api');
            $table->string('name');
            $table->string('description')
                ->default('A Smoke detecting device')
                ->nullable();
            $table->timestamp('last_seen');
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
        Schema::dropIfExists('shishas');
    }
};
