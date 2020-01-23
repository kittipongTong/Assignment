<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleHasPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_has_permissions', function (Blueprint $table) {
          $table->unsignedBigInteger('permission_id');
          $table->string('role_id');

          $table->foreign('permission_id')
              ->references('id')
              ->on($tableNames['permissions'])
              ->onDelete('cascade');

          $table->foreign('role_id')
              ->references('id')
              ->on($tableNames['roles'])
              ->onDelete('cascade');

          $table->primary(['permission_id', 'role_id'], 'role_has_permissions_permission_id_role_id_primary');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_has_permissions');
    }
}
