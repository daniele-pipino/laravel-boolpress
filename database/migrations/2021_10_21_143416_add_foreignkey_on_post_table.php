<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyOnPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // aggiunta foreignkey tabella category
            $table->unsignedBigInteger('category_id')->after('id')->nullable();

            // definizione vinccolo
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // rimozione vincolo 
            $table->dropForeign('posts_category_id_foreign');

            //rimozione colonna
            $table->dropColumn('category_id');
        });
    }
}
