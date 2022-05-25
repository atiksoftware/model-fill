<?php

namespace Atiksoftware\ModelFill;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
	/**
	 * Register the service provider.
	 */
	public function register(): void
	{
		$this->commands(ModelFillCommand::class);
	}
}
