<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelHasRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_has_roles', function (Blueprint $table) {
          $table->unsignedBigInteger('role_id');

          $table->string('model_type');
          $table->string($columnNames['model_morph_key']);
          $table->index([$columnNames['model_morph_key'], 'model_type'], 'model_has_roles_model_id_model_type_index');

          $table->foreign('role_id')
              ->references('id')
              ->on($tableNames['roles'])
              ->onDelete('cascade');

          $table->primary(['role_id', $columnNames['model_morph_key'], 'model_type'],
                  'model_has_roles_role_model_type_primary');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_has_roles');
    }
}
