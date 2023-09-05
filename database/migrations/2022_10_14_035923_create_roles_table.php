<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('added_by');
            $table->timestamp('created_at')->default(date('Y-m-d'));
            $table->integer('updated_by');
            $table->timestamp('updated_at')->default(date('Y-m-d'));
            $table->integer('deleted_by');
            $table->timestamp('deleted_at')->default(date('Y-m-d'));
            $table->longText('remarks');
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
