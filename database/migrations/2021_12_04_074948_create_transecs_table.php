<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transecs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('address')->nullable();
            $table->string('province')->nullable();
            $table->string('notes')->nullable();
            $table->string('product_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('price')->nullable();
            $table->integer('total')->nullable();
            $table->string('payment')->nullable();
            $table->string('ccname')->nullable();
            $table->integer('ccnumber')->nullable();
            $table->integer('ccexpiration')->nullable();
            $table->integer('cccvv')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            // $table->string('slug');
            // $table->string('code');
            // $table->text('deskripsi');
            // $table->string('foto')->nullable(); //banner produknya
            // $table->string('satuan');
            // $table->double('harga', 12, 2)->default(0);
            // $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transecs');
    }
}
