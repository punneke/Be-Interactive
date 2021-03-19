<?php 
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class CreateContactsTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/ 
public function up()
{
	
	Schema::create('contacts', function (Blueprint $table) { 
	$table->uuid('id')->primary();
	$table->string('name'); 
	$table->string('email'); 
    $table->string('dateofbirth'); 
    $table->string('phone_number');
	$table->string('passport');
    $table->boolean('goingwith');
    $table->string('fearofflight');
    $table->text('allergies')->nullable(); 
	$table->text('travelwishes')->nullable();  
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
	Schema::drop("contacts");
     }
}