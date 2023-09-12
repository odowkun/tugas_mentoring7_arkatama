<?php

class tanggal
{
	function tanggalymd(){
		try {
			return date('Y-m-d');
		} catch (Exception) {
			return "";
		}
	}

	function tanggaldmy(){
		try {
			return date('d M y');
		} catch (Exception) {
			return "";
		}
	}


}

