<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::create('produk', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->decimal('harga', 10, 2);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('produk');
}

};
