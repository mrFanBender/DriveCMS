<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Modulemanager extends Controller{
	protected $page_id;
	protected $pagemodules = array();
	protected $loadedPM = array();
	protected $generalmodules = array();
	protected $loadedGM = array();

	public function __construct()
	{
		
		return $this;
	}

	public function getPageModules($page_id=0)
	{
		$this->pagemodules 	= Model::factory('ModuleManager')
							->getPageModules($page_id);
		return $this->pagemodules;
	}

	public function loadPageModules($page_id=0, $admin=FALSE)
	{
		if(!$admin)
		{
			$this->getPageModules($page_id);
		}
		else
		{

		}
		foreach ($this->pagemodules as $pm) {
				$pagemodule = $pm['module_name']::factory();
				$this->loadedPM[] = $pagemodule->render();
			}
		return $this->loadedPM;
	}

	public function getGeneralModules(){
		$this->generalmodules 	= Model::factory('ModuleManager')
								->getGeneralModules();
		return $this->generalmodules;
	}

	public function loadGeneralModules($admin=FALSE)
	{
		if(!$admin)
		{
			$this->getGeneralModules();
		}
		else
		{

		}
		foreach ($this->generalmodules as $gm_group) 
		{
			foreach($gm_group as $gm)
			{
				$generalmodule = $gm['name']::factory();
				$this->loadedGM[$gm['position']][] = $generalmodule->render();
			}
		}
		return $this->loadedGM;
	}
}