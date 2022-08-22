<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameMainCatIdInSubcats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subcats', function (Blueprint $table) {
            //categoriest instead of main_cat_id 
            $table->renameColumn('main_cat_id', 'categories_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subcats', function (Blueprint $table) {
            $table->renameColumn('categories_id', 'main_cat_id');
        });
    }
}
