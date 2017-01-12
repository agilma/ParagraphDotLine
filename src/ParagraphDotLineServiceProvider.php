<?php namespace AgilMa\ParagraphDotLine;

use Illuminate\Support\ServiceProvider;

class ParagraphDotLineServiceProvider extends ServiceProvider 
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->published([ __DIR__ .'/../assets' => public_path('paragraph-dot-line')], 'paragraphdotline');
		$this->registerParagraphDotLineBuilder();
		$this->app->alias('paragraph-dot-line', 'AgilMa\ParagraphDotLineBuilder');
	}

	/**
	 * Register paragraph dot line builder.
	 * @return
	 */
	protected function registerParagraphDotLineBuilder()
	{
		$this->app->singleton('paragraph-dot-line', function($app)
		{
			return new ParagraphDotLineBuilder($app['url']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('paragraph-dot-line');
	}
}