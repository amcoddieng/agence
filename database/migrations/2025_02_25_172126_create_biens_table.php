<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->decimal('prix', 10, 2);
            $table->foreignId('proprietaire_id')->constrained('proprietaires')->onDelete('cascade');
            $table->string('cycle');
            $table->string('region');
            $table->string('departement');
            $table->string('ville');
            $table->string('adresse');
            $table->string('etat');
            $table->integer('disponibilite');
            $table->integer('surface');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biens');
    }
};
