<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_shiftRoster", function (Blueprint $table) {
$table->integer("departmentName_id")->default(0);
$table->integer("rosterName_id")->default(0);
$table->string("shift");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->integer("remarks")->default(0);
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_shiftRoster");
    }
};