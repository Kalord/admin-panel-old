<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Rule;

class CreateAdminRuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_admin_rule', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30)->unique();
            $table->string('description');
            $table->integer('id_creator');
            $table->timestamps();
        });

        $this->createDefaultRule();
    }

    public function createDefaultRule()
    {
        Rule::create([
            'title' => 'Guest',
            'description' => 'Default Rule',
            'id_creator' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_admin_rule');
    }
}
