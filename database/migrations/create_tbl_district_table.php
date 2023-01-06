<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_district", function (Blueprint $table) {
$table->integer("district_id")->autoIncrement();
$table->string("districtName");
$table->datetime("createdOn");
$table->string("createdBy");
$table->string("updatedBy");
$table->string("alias");
$table->integer("status")->default(0);
$table->text("remarks");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_district");
    }
};