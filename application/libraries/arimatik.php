<?php

class arimatik
{
	function penambahan($a, $b){
		try {
			if (is_numeric($a) && is_numeric($b)) {
				$hasil = $a + $b;
				return $hasil;
			}	
		} catch (Exception) {
			return "";
		}
	}

	public function pengurangan($a, $b) {
        try {
			if (is_numeric($a) && is_numeric($b)) {
				$hasil = $a - $b;
				return $hasil;
			}	
        } catch (Exception) {
            return "";
        }
    }

    public function perkalian($a, $b) {
        try {
			if (is_numeric($a) && is_numeric($b)) {
				$hasil = $a * $b;
				return $hasil;
			}	
        } catch (Exception) {
            return "";
        }
    }

    public function pembagian($a, $b) {
        try {
			if (is_numeric($a) && is_numeric($b)) {
				$hasil = $a / $b;
				return $hasil;
			}	
            if ($b == 0) {
                return "Pembagian oleh nol tidak diizinkan.";
            }
        } catch (Exception) {
            return "";
        }
    }
}

