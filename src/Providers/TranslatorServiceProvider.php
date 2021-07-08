<?php
namespace Jalno\Translator\Providers;

use Illuminate\Support\ServiceProvider;

class TranslatorServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadMigrationsFrom(__DIR__ . "/../../database/migrations");
	}
}
