<?php


class usuario
{
	private $id_visita;
	private $numero_visita;
  
	public function __construct(){
		
	}
  
	public function getId_Visita(){
		return $this->id_visita;
	}

	public function setId_Visita($id_visita){
		$this->id_visita = $id_visita;
	}

	public function getNumero_Visita(){
		return $this->numero_visita;
	}

	public function setNumero_Visita($numero_visita){
		$this->numero_visita = $numero_visita;
	}

	
 
}
