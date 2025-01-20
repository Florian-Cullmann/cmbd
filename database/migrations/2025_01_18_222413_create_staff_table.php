<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigInteger('staffId')->unsigned()->primary();  // Define staffId as primary key
            $table->date('birthday');
            $table->string('birthPlace')->nullable();
            $table->string('birthName')->nullable();
            $table->enum('gender', ['m', 'w']);
            $table->string('firstName');
            $table->string('lastName');
            $table->string('steuerId')->nullable();
            $table->date('startDate');
            $table->date('endDate')->nullable();
            $table->string('endReason')->nullable();
            $table->integer('weeklyHours');
            $table->string('insertedBy');
            $table->timestamp('insertDate')->useCurrent();
            $table->string('updatedBy')->nullable();
            $table->timestamp('updateDate')->nullable();
        });
    }

    public function down() {
        Schema::dropIfExists('staff');
    }
};
