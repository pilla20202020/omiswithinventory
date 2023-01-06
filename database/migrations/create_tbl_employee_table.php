<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_employee", function (Blueprint $table) {
$table->integer("emplyee_id")->default(0);
$table->string("employeeFirstName");
$table->string("employeeMiddleName");
$table->string("employeeLastName");
$table->string("phone");
$table->string("email");
$table->string("employeeRole");
$table->string("employeeSalary");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_employee");
    }
};