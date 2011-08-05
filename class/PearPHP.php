<?php
namespace oc\ext\pearphp ;

use jc\auth\IdManager;
use jc\mvc\model\db\orm\PrototypeAssociationMap;
use jc\db\DB ;
use jc\db\PDODriver ;
use oc\ext\Extension;

class PearPHP extends Extension
{
	public function load()
	{
		set_include_path( get_include_path().DIRECTORY_SEPARATOR.dirname(__DIR__).'/lib' ) ;
	}
	
}

?>