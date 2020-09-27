<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTableMigration extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->integer('position', false, true);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('parent_id')
                ->references('id')
                ->on('articles')
                ->onDelete('set null');
        });

        Schema::create('article_closure', function (Blueprint $table) {
            $table->increments('closure_id');

            $table->unsignedBigInteger('ancestor');
            $table->unsignedBigInteger('descendant');
            $table->unsignedBigInteger('depth');

            $table->foreign('ancestor')
                ->references('id')
                ->on('articles')
                ->cascadeOnDelete();

            $table->foreign('descendant')
                ->references('id')
                ->on('articles')
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('article_closure');
        Schema::dropIfExists('articles');
    }
}
