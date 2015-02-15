<?php defined('SYSPATH') or die('No direct script access.');

class Model_ModuleManager extends Model{

	protected $_tablePageModules 	= 'pagemodules';
	protected $_tableModules 		= 'modules';
	protected $_tableGeneralModules	=	'generalmodules';

	protected $generalmodules = array();

	public function getPageModules($page_id=0)
	{
		$query = DB::select()
					->from($this->_tablePageModules)
					->where('page_id', '=', $page_id)
					->order_by('order');
		$result = $query->execute()->as_array();
		
		return $result ? $result : array();

	}

	public function getGeneralModules2($position)
	{
		$query = DB::select()
					->from($this->_tableGeneralModules)
					->where('work', '=', 1)
					->and_where('position', '=', $position)
					->order_by('order');
		$result = $query->execute()->as_array();

		return $result ? $result : array();
	}

	public function getGeneralModules()
	{
		$this->generalmodules['header'] = array();
		$this->generalmodules['left'] = array();
		$this->generalmodules['right'] = array();
		$this->generalmodules['footer'] = array();
		$query = DB::select()
					->from($this->_tableGeneralModules)
					->where('work', '=', 1)
					->order_by('order');
		$result = $query->execute()->as_array();
		foreach($result as $module){
			$this->generalmodules[$module['position']][] = $module;
		}
		return $result ? $this->generalmodules : array();
	}
}
?>