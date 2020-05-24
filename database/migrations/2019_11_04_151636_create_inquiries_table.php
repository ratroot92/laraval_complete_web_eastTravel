<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
                         $table->bigIncrements('id');
                         $table->string('type')->nullable();
                         $table->string('description')->nullable();
                         $table->string('email')->nullable();
                         $table->string('name')->nullable();
                         $table->string('phone')->nullable();
                         $table->string('number_of_travelers')->nullable();
                         $table->string('travelers_description')->nullable();
                         $table->string('city')->nullable();
                         $table->string('max_price')->nullable();
                         $table->string('min_price')->nullable();
                        //flight details
                         $table->string('flight_from')->nullable();
                         $table->string('flight_to')->nullable();
                         $table->string('flight_time')->nullable();
                         //airport transfer  details
                         $table->string('airport_from')->nullable();
                         $table->string('airport_to')->nullable();
                         $table->string('flight_number')->nullable();
                         $table->string('airport_transport')->nullable();
                          //accomodation    details
                         $table->string('accomodation_city')->nullable();
                         $table->string('accomodation_from')->nullable();
                         $table->string('accomodation_to')->nullable();
                         $table->string('accomodation_standard')->nullable();

                          //Tours    details
                         $table->string('tour_city')->nullable();
                         $table->string('tour_date')->nullable();
                         $table->string('tour_type')->nullable();
                         $table->string('tour_period')->nullable();

                         //Trip    details
                         $table->string('trip_from')->nullable();
                         $table->string('trip_to')->nullable();
                         $table->string('trip_type')->nullable();
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
        Schema::dropIfExists('inquiries');
    }
}
