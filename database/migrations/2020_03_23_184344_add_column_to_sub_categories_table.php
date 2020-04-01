<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('sub_categories', 'slug'))
        {
            Schema::table('sub_categories', function (Blueprint $table) {
                $table->string('slug');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (!Schema::hasColumn('sub_categories', 'slug'))
        {
            Schema::table('sub_categories', function (Blueprint $table) {
                $table->string('slug');
            });
        }
    }
}
