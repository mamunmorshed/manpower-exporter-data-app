<?php

namespace App\Traits;

use App\Worker;


trait HumanReadableID{
	
	protected function generate($id = 0, $worker = true)
	{

		if ( $id <= 0 ) { return false; }
		if ($worker) {
			$id += 1000;
			$prefix = 'W';
			$length = 4;
		}else{
			$id += 100;
			$prefix = 'A';
			$length = 3;
		}

		$sid = $this->build($id, $prefix, $length);
		$sidCount = Worker::where('sid', $sid)->count();

		while ( $sidCount >= 1) {
			
			$id++;
			$sid = $this->build($id, $prefix, $length);
			$sidCount = Worker::where('sid', $sid)->count();

		}

		return $sid;

	}

	private function build($id, $prefix, $length)
	{
		$alphabets = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I','J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S','T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
		
		if ($length == 3) {
			$divider = 999;
		}elseif ($length == 4) {
			$divider = 9999;
		}

		$charIndex = intval($id/$divider);
		$number = $id%$divider;
		
		if ( $id%$divider == 0 ) {
			$charIndex = intval($id/$divider) -1 ;
			$number = $divider;
		}
		
		return $prefix.$alphabets[$charIndex].str_pad($number, $length, "0", STR_PAD_LEFT);
	}
}