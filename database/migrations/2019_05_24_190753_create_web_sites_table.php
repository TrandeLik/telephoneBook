<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webSites', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('webSite');
            $table -> unsignedInteger('contact_id');
            $table -> foreign('contact_id') -> references('id') -> on('contacts') -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webSites');
    }
}
