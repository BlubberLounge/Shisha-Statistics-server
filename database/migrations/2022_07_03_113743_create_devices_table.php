<?php

use App\Models\Shisha;
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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->uuid()
                ->unique()
                ->comment('used for audit logging and public api');
            $table->foreignIdFor(Shisha::class)
                ->constrained('shishas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('description')
                ->default('A Smoke detecting device')
                ->nullable();
            $table->ipAddress();
            $table->macAddress();
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
        Schema::dropIfExists('devices');
    }
};
