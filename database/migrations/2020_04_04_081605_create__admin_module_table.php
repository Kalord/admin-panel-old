<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Module;

class CreateAdminModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_admin_module', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
        });

        $this->createDefaultModules();
    }

    public function createDefaultModules()
    {
        Module::create([
            'title' => 'board',
            'description' => 'Basic statistics'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_admin_module');
    }
}
