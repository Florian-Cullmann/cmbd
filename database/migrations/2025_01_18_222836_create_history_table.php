<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('history', function (Blueprint $table) {
            $table->id();  // Primary key for history table
            $table->bigInteger('staffId')->unsigned();  // Unsigned to match staff's staffId
            $table->foreign('staffId')->references('staffId')->on('staff')->onDelete('cascade');  // Foreign key definition
            $table->date('validFrom');
            $table->date('validTo')->nullable();
            $table->timestamp('changeDate');
            $table->string('changeUser');
            $table->string('changeName');
        });
    }

    public function down() {
        Schema::dropIfExists('history');
    }
};
