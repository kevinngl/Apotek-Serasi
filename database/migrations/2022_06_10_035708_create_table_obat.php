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
        Schema::create('table_obat', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->default(0);
            $table->string('nama');
            $table->integer('harga');
            $table->integer('jenis_id')->default(0);
            $table->string('stok')->default(0);
            $table->date('expired');
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
        Schema::dropIfExists('table_obat');
    }
};
