<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
	 
	        $table->string('first_name',40)->after('id');
	        $table->string('last_name',40)->after('first_name');
	        $table->timestamp('birthday')->index()->nullable()->after('email');
	        $table->string('code_melli')->unique()->after('birthday');
	        $table->string('position')->index()->after('code_melli');
	 
	        $table->softDeletes();
	
	        $table->index('email');
	        $table->index(['last_name' , 'first_name'] , 'users_name_index');
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
            //
        });
    }
}
