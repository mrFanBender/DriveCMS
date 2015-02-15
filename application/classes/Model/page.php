<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page extends Model{

	protected $_tablePages = 'pages';
	protected $page = array();

	public function getPage($name)
	{
		$query = DB::select()
					->from($this->_tablePages)
					->where('name', '=', $name)
					->limit(1);
		$result = $query->execute()->as_array();
		if($result){
			foreach($result[0] as $page_attr => $value){
				$page[$page_attr] = $value;
			}
		}
		return $result ? $page : array();
	}
	
}
?>