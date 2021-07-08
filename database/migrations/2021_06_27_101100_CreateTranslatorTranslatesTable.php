<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslatorTranslatesTable extends Migration
{
	public function up(): void
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

	public function down(): void
	{
		Schema::dropIfExists('translator_translates');
	}
}
