<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string	('first_name');
            $table->string ('last_name');
            $table->string ('phone');
            $table->string ('email');
            $table->date ('dob');
            $table->string ('gender');
            $table->string	('company_name') ->nullable();
            $table->string ('add_street') ->nullable();
            $table->string ('add_suburb') ->nullable();
            $table->string ('add_city') ->nullable();
            $table->string	('add_postcode') ->nullable();
            $table->string ('add_country') ->nullable();
/*            $table->string ('course_name');
            $table->string ('course_date');
            $table->integer('course_total');*/

            $table->foreignID ('coursedate_id')->contrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
