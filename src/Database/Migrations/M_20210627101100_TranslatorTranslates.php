<?php
namespace Jalno\Translator\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class M_20210627101100_TranslatorTranslates extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('translator_translates', function (Blueprint $table) {
			$table->id();
			$table->string("table", 255);
			$table->unsignedBigInteger("pk");
			$table->string("lang", 2);
			$table->unique(["table", "pk", "lang"]);
			$table->text("text");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('translator_translates');
	}
}
