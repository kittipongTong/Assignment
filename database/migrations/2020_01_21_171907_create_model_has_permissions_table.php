<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelHasPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_has_permissions', function (Blueprint $table) {
          $table->unsignedBigInteger('permission_id');

          $table->string('model_type');
          $table->string($columnNames['model_morph_key']);
          $table->index([$columnNames['model_morph_key'], 'model_type'], 'model_has_permissions_model_id_model_type_index');

          $table->foreign('permission_id')
              ->references('id')
              ->on($tableNames['permissions'])
              ->onDelete('cascade');

          $table->primary(['permission_id', $columnNames['model_morph_key'], 'model_type'],
                  'model_has_permissions_permission_model_type_primary');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_has_permissions');
    }
}
