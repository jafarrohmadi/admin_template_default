<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('permission_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id');

            $table->foreign('user_id', 'user_id_fk_683706')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('permission_id');

            $table->foreign('permission_id', 'role_id_fk_683706')->references('id')->on('permissions')->onDelete('cascade');
        });
    }
}
