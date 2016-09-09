<?php
  
  require 'collector.php';
  require 'visita.php';
  
  class visitaColector extends collector {
	
	function __construct()
	{
		parent::__construct();
	}

	public function consultarVisita()
	{
		return self::read('visita',visita::class); 
	}
}
?>
