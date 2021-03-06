<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('responden_id')->unsigned();
            $table->foreign('responden_id')->references('id')
                ->on('respondens')->onUpdate('cascade')->onDelete('cascade');
            $table->string('Q1');
            $table->string('Q2');
            $table->string('Q3');
            $table->string('Q4');
            $table->string('Q5');
            $table->string('Q6');
            $table->string('Q7');
            $table->string('Q8');
            $table->string('Q9');
            $table->string('Q10');
            $table->string('Q11');
            $table->string('Q12');
            $table->string('Q13');
            $table->string('Q14');
            $table->string('Q15');
            $table->string('Q16');
            $table->string('Q17');
            $table->string('Q18');
            $table->string('Q19');
            $table->string('Q20');
            $table->string('Q21');
            $table->string('Q22');
            $table->string('Q23');
            $table->string('Q24');
            $table->string('Q25');
            $table->string('Q26');
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
        Schema::dropIfExists('kuesioners');
    }
}
