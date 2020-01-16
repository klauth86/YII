<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_orm_search_query', function (Blueprint $table) {
            $table->string('facebook_login', 127);
			$table->unsignedTinyInteger('self_position_id');
			$table->unsignedTinyInteger('search_position_id');
			$table->string('description', 127);
			$table->boolean('is_active')->default(true);
			
			$table->primary(['facebook_login', 'self_position_id']);
			$table->foreign('self_position_id')->references('id')->on('t_orm_position');
			$table->foreign('search_position_id')->references('id')->on('t_orm_position');
			$table->foreign('facebook_login')->references('facebook_login')->on('t_orm_account');			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_orm_search_query');
    }
}
