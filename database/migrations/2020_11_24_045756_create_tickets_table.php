<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string("userName");
            $table->string("plate");
            $table->string("state");
            $table->string("license_type");
            $table->string("summons_number");
            $table->string("issue_date");
            $table->string("violation_time");
            $table->string("violation");
            $table->string("judgment_entry_date")->nullable();
            $table->integer("fine_amount");
            $table->integer("penalty_amount");
            $table->integer("interest_amount");
            $table->integer("reduction_amount");
            $table->integer("payment_amount");
            $table->integer("amount_due");
            $table->string("precinct");
            $table->string("county");
            $table->string("issuing_agency");
            $table->string("summons_image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
