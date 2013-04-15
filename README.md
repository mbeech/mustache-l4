laravel4-mustache
=================

A Mustache.php wrapper for Laravel 4

# Install

Service Provider
	'Conarwelsh\MustacheL4\MustacheL4ServiceProvider',

# Usage

You can now use Mustache just as you would Blade.  Just name your files with a `.mustache` file extension, and the Mustache engine will be used.

# Configure

You can alter the configuration options that are passed to Mustache.php by publishing the config file.
	
	php artisan config:publish conarwelsh/mustache-l4