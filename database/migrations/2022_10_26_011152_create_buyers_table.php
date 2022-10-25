<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->unique();
            $table->string('name');
            $table->string('phone')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->text('address')->nullable()->default(null);
            $table->timestamps();
        });
    }
};
