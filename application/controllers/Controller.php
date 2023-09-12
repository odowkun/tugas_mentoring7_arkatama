<?php
class Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('function_helper');
		$this->load->library('arimatik');
		$this->load->library('tanggal');
	}

	function prima()
	{
		$data['judul'] = "Bilangan Prima";
		$number = 32;
		$check = isPrimeNumber($number);
		$data['result'] = $check ? $number . ' is Prime Number' : $number . ' is not prime number';
		return $data;
	}
	
	function arimatik()
	{
		$data['judul'] = "Arimatika";
		$a = 2;
		$b = 3;
		$data['result'] = $a . ' + '. $b . ' = '. $this->arimatik->penambahan($a,$b);
		return $data;
	}

	function tugas()
	{
		$data['judul'] = "Tugas";
		$angka = 10;
		$hasilRomawi = intToRomawi($angka);
		$hasilAngka = romawiToInt($hasilRomawi);
		$tanggalymd = $this->tanggal->tanggalymd();
		$tanggaldmy = $this->tanggal->tanggaldmy();
		$data['result'] = "Angka ke romawi : " . $angka . " => " . $hasilRomawi . "<br>" . "Romawi ke angka : ".$hasilRomawi. " => ".$hasilAngka . "<br>" . "Format tanggal y-m-d : ". $tanggalymd . "<br>" . "Format tanggal d M y : ". $tanggaldmy  ;
		return $data;
	}

	function index()
	{
		// $data = $this->prima();
		// $data = $this->arimatik();
		$data = $this->tugas();
		return $this->load->view('frontend/tutorial', $data);
	}

}
?>
