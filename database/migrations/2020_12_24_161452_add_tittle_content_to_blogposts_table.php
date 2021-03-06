<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTittleContentToBlogpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogposts', function (Blueprint $table) {

            $table->text('unique')->nullable();
            // $table->foreignId('user_name')->nullable()->constrained('users'); // ovde ne sme biti unique()

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogposts', function (Blueprint $table) {
            // $table->dropForeign('user_name');
            $table->dropColumn(['unique']);
        });
    }
}
