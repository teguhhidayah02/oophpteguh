<?php 

// define('NAMA', 'Teguh Hidayah');
// echo NAMA;

// echo "<br>";

// const UMUR = 18;
// echo UMUR;

// class Coba {
// 	const NAMA = 'Teguh Hidayah';
// }

// echo Coba::NAMA;

// echo __FILE__;




// function Coba() {
// 	return __FUNCTION__;	
// }

// echo Coba();

class coba {
	public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;

 ?>