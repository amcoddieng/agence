<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('email');
            $table->string('nin');
            $table->string('telephone');
            $table->date('dateNaissance');
            $table->string('lieuNaissance');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('personnes');
    }
};
