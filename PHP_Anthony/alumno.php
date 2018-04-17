<?php
class Alumno{
	public $nombre;
	public $carrera;
	public $ciudad;
	public $diaNacimiento;

	public function Alumno($newnombre='', $newcarrera='',$newciudad='',$newdia=''){
		$this->nombre = $newnombre;
		$this->carrera = $newcarrera;
		$this->ciudad = $newciudad;
		$this->diaNacimiento = $newdia;
	}

}
?>