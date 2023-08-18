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
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->date("dob");
            $table->string("phone");
            $table->string("wp_no");
            $table->float("pay_done", 8,2)->nullable();
            $table->float("pay_due", 8,2)->nullable();
            $table->text("remark")->nullable();
            $table->string("pre_image")->nullable();
            $table->string("post_image");
            $table->string("after_image")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
