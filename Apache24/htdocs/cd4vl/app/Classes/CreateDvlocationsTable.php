<?php
namespace App\Classes;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDvlocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dv_locations', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('site');
         $table->string('locid',50)->nullable();
         $table->string('preAisle',50)->nullable();
         $table->string('aisle',50)->nullable();
         $table->string('postAisle',50)->nullable();
         $table->string('slot',50)->nullable();
         $table->string('spokenVerification',50)->nullable();
         $table->string('dv1',5)->nullable();
         $table->string('dv2',5)->nullable();
         $table->string('dv3',5)->nullable();
         $table->string('dv4',5)->nullable();
         $table->string('dv5',5)->nullable();
         $table->timestamps();
         $table->index(['site', 'locid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dv_locations');
    }
}
