<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('role_id')->after('id');
            $table->string('first_name')->after('role_id');
            $table->string('last_name')->after('first_name');
            $table->integer('contact_no')->after('last_name');  
            $table->boolean('status')->after('contact_no');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('role_id');
        $table->dropColumn('first_name');
        $table->dropColumn('last_name');
        $table->dropColumn('contact_no');
        $table->dropColumn('status');
        });
    }
}
