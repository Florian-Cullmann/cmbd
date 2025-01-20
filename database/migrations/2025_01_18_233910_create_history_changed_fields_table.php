<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryChangedFieldsTable extends Migration
{
    public function up()
    {
        Schema::create('history_changed_fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('historyId');
            $table->unsignedInteger('subId');
            $table->string('fieldName');
            $table->string('oldValue');
            $table->string('newValue');
            $table->timestamps();

            $table->foreign('historyId')->references('id')->on('history')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('history_changed_fields');
    }
}
