<?php
namespace App\Helper;
use DB;

class CSVHelper
{

	public static function import_CSV($filename, $delimiter = ',') {
		if(!file_exists($filename) || !is_readable($filename))
		return false;
		$header = null;
		$data = array();
		if (($handle = fopen($filename, 'r')) !== false) {
			while (($row = fgetcsv($handle, 4096, $delimiter)) !== false) {
				if(!$header) {
					$header = $row;
					$hc=count($row);
				}
				else {
					$rc=count($row);
					if ($rc === $hc){
						$data[] = array_combine($header, $row);
					}
				}
			}
			fclose($handle);
		}

		return $data;
	}
}