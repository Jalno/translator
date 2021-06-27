<?php
namespace Jalno\Translator\Providers;

use Illuminate\Support\ServiceProvider;

class TranslatorServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		if ($this->app->runningInConsole()) {
			$this->registerMigrations();
		}
	}

	public function registerMigrations()
	{
		$this->loadMigrationsFrom(package()->getMigrationPath());
	}
}
