<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyLicenseNumberInDriversTable extends Migration
{
    public function up()
    {
        Schema::table('drivers', function (Blueprint $table) {
            $table->string('license_number')->nullable()->unique()->change(); // Menjadikan license_number nullable
        });
    }

    public function down()
    {
        Schema::table('drivers', function (Blueprint $table) {
            $table->string('license_number')->default('N/A')->unique()->change(); // Mengembalikan ke default jika perlu
        });
    }
}