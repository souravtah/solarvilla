<?php

namespace Coderflex\LaravelTicket\Database\Factories;

use App\Enums\TicketStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        $tableName = config('laravel_ticket.table_names.tickets', 'tickets');

        Schema::create($tableName, function (Blueprint $table) {
            $table->id()->from(6100);
            $table->uuid('uuid')->nullable();
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('message')->nullable();
            $table->string('priority')->default('low');
            $table->string('status')->default(TicketStatus::open->value);
            $table->date('due_date')->nullable()->default(null);
            $table->boolean('is_resolved')->default(false);
            $table->boolean('is_locked')->default(false);
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
        Schema::dropIfExists('laravel_tickets');
    }
};
