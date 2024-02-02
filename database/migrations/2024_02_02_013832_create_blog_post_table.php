<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("BlogPost", function (BluePrint $table) {
            $table->bigIncrements("id");
            $table->tinyText("header");
            $table->mediumText("main content");
            $table->mediumText("conclusion");
            $table->timestamp("created at")->useCurrent();
            $table->timestamp("updated at")->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
