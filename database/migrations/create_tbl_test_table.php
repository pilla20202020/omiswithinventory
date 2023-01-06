<?php

        use Illuminate\Database\Migrations\Migration;

        use Illuminate\Database\Schema\Blueprint;

        use Illuminate\Support\Facades\Schema;
        
        return new class extends Migration

        {

            public function up()

            {
Schema::create("tbl_test", function (Blueprint $table) {
$table->integer("id")->default(0);
$table->string("name");
$table->timestamps();
 });
   }
    public function down()
    {
     Schema::dropIfExists("tbl_test");
    }
};