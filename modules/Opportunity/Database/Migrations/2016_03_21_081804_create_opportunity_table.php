<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunityTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunity', function(Blueprint $table)
        {
            $table->integer('id')->unsigned();
            $table->string('year', 4);
            $table->string('project_nbr', 7);
            $table->string('name');
            $table->string('description');
            $table->string('location')->nullable();
            $table->string('quotation_number', 25)->nullable();
            $table->integer('currency_type_id')->nullable()->index('fk_opportunity_currency1');
            $table->decimal('estimated_value', 10, 0)->nullable();
            $table->integer('rate_type_id')->nullable()->index('fk_opportunity_rate1');
            $table->integer('client_id')->nullable()->index('fk_opportunity_client1');
            $table->smallInteger('chance')->nullable();
            $table->integer('assigned_to_userid');
            $table->integer('project_type_id')->nullable();
            $table->enum('confirm_schedule', array('0','1'))->nullable()->default('0');
            $table->enum('confirm_schedule2', array('0','1'))->default('0');
            $table->enum('confirm_schedule3', array('0','1'))->default('0');
            $table->dateTime('confirmed_date')->nullable();
            $table->integer('confirmed_userid')->nullable();
            $table->timestamp('created_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('created_userid')->index('fk_opportunity_user1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('opportunity');
    }

}
