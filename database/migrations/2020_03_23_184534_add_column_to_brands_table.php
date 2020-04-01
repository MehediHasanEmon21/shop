<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('brands', 'slug'))
        {
            Schema::table('brands', function (Blueprint $table) {
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
        if (!Schema::hasColumn('brands', 'slug'))
        {
            Schema::table('brands', function (Blueprint $table) {
                $table->string('slug');
            });
        }
    }
}
