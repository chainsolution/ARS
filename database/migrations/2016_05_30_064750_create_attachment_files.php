<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment_files', function (Blueprint $table) {
          $table->integer('app_no')->nullable();
          $table->integer('file_no')->nullable();
          $table->char('file_type',2)->nullable();
          $table->string('file_name',100)->nullable();
          $table->string('file_path',200)->nullable();
          $table->char('del_flg',1)->nullable();
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
        Schema::drop('attachment_files');
    }
}
