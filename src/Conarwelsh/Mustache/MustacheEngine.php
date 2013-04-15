<?php
namespace Conarwelsh\Mustache;

use Illuminate\View\Engines\EngineInterface;
use Illuminate\Filesystem\Filesystem;
use Mustache_Engine;

class MustacheEngine implements EngineInterface {

	public function __construct(Filesystem $files)
	{
		$this->files = $files;
	}
	
	public function get($path, array $data = array())
	{
		$view = $this->files->get($path);
		$app = app();
		$m = new Mustache_Engine( $app['config']->get('mustache::config') );

		$data = array_map(function($item){
			return method_exists($item, 'toArray') ? $item->toArray() : $item;
		}, $data);
		 
		return $m->render($view, $data);
	}

}