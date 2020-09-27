<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaDataTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metadata_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('metadata_id')->unsigned();
            $table->string('locale');
            $table->string('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_other')->nullable();
            $table->text('meta_custom')->nullable();

            $table->unique(['metadata_id', 'locale']);
            $table->foreign('metadata_id')->references('id')->on('metadata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metadata_translations');
    }
}
