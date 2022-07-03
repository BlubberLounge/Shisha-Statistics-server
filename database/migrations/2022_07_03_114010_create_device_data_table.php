<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Device;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_data', function (Blueprint $table) {
            $table->id();
            $table->uuid()
                ->unique()
                ->comment('used for audit logging and public api');
            $table->foreignIdFor(Device::class)
                ->constrained('devices')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->dateTime('start');
            $table->dateTime('end');
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
        Schema::dropIfExists('device_data');
    }
};
