<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Access;

class CreateAdminRuleAccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_admin_rule_access', function (Blueprint $table) {
            $table->id();
            $table->integer('id_rule');
            $table->integer('id_module');
        });
    }

    public function createDefaultAccess()
    {
        Access::create([
            'id_rule' => 1,
            'id_module' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_admin_rule_access');
    }
}
