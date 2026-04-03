<?php
	//Koordinātes priekš kartes
	function getSavedLocations($schools) {
		$coordinates = '[';

		foreach ($schools as $school) {
			$long = $school->getLongtitude();
			$lat = $school->getLatitude();
			$name = replaceQuotes($school->getName());
			$id = $school->getID();
			if ($long == NULL or $lat == NULL) {
				continue;
			}
			if ($coordinates != '[') {
				$coordinates .= ',';
			}
			$coordinates .= '["'.$lat.'","'.$long.'","'.$name.'","'.$id.'"]';
		}
		$coordinates .= ']';
		echo $coordinates;
	}
	function replaceQuotes($name) {

	    return str_replace('"','\\\"',$name);
}

