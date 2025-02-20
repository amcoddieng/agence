<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->string('etat');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('bien_id')->constrained('biens');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('contrats');
    }
};
