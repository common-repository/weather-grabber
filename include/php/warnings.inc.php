<?php
function changefreezingColor($weatherArray,$key,$val,$subArray){

$warncoldcolorlow = '#cff;';
$warncoldcolormed = '#99f;';
$warncoldcolorhigh = '#44f;';
$warncolorlow = '#ee6;';
$warncolormed = '#fb4;';
$warncolorhigh = '#f44;';
$windlevelmoderate = '#ff2;';
$windlevelstrong = '#fb3;';
$windlevelgale = '#f83;';
$windlevelstorm = '#f3b;';
$windlevelhurricane = '#f22;';
$currentraincolor ='#cff;';
$windpowerlow = '#4f4;';
$windpowergood = '#2f2;';
$windpowerbest = '#0f0;';
$freezinglevlow = '#88b;';
$freezinglevlower = '#88c;';
$freezinglevlowest = '#88d;';

$CSSIdent = 'CSS'; // We're adding this string to the regular weatherArray variable to create a new array item that has the CSS background colour... default is "no".
$CSSstyletag = 'margin:1px;padding:1px;background-color:';
$CSSdefaultvalue = 'none;';
$CSSdefault = $CSSstyletag . $CSSdefaultvalue;
$newName = $key . $CSSIdent; //Create the new $weatherArray variable.
$weatherArray[$newName] = $CSSdefault;


//////////////Current Freezing Level Reading/////////////////////////
if ($key == 'freezingLevel'){
//echo $val . '__';
//echo $newName . '__'. $CSSstyletag . $warncolorlow . '__';
	if ($val < 3000) {
		$weatherArray[$newName] = $CSSstyletag . $freezinglevlow;
	}
	
	if ($val < 1150) {
		$weatherArray[$newName] = $CSSstyletag . $freezinglevlower;
	}
}
//echo $val;
return $weatherArray;

}


function changeBarColor($weatherArray,$key,$val,$subArray){

$warncoldcolorlow = '#cff;';
$warncoldcolormed = '#99f;';
$warncoldcolorhigh = '#44f;';
$warncolorlow = '#ee6;';
$warncolormed = '#fb4;';
$warncolorhigh = '#f44;';
$windlevelmoderate = '#ff2;';
$windlevelstrong = '#fb3;';
$windlevelgale = '#f83;';
$windlevelstorm = '#f3b;';
$windlevelhurricane = '#f22;';
$currentraincolor ='#cff;';
$windpowerlow = '#4f4;';
$windpowergood = '#2f2;';
$windpowerbest = '#0f0;';
$freezinglevlow = '#0f0;';
$freezinglevlower = '#0f0;';
$freezinglevlowest = '#0f0;';

$CSSIdent = 'CSS'; // We're adding this string to the regular weatherArray variable to create a new array item that has the CSS background colour... default is "no".
$CSSstyletag = 'margin:1px;padding:1px;background-color:';
$CSSdefaultvalue = 'none;';
$CSSdefault = $CSSstyletag . $CSSdefaultvalue;
$newName = $key . $CSSIdent; //Create the new $weatherArray variable.
$weatherArray[$newName] = $CSSdefault;


//////////////Current Barometer Reading/////////////////////////
if ($key == 'barometer' || $key == 'stationPressure' || $key == 'houravgbarom' || $key == 'dayavgbarom' || $key == 'weekavgbarom' || $key == 'monthtodateavgbarom' || $key == 'yeartodateavgbarom'){
//echo $val . '__';
//echo $newName . '__'. $CSSstyletag . $warncolorlow . '__';
	if ($val <= 999 && $val > 995) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
	}

	if ($val <= 995 && $val > 985) {
		$weatherArray[$newName] = $CSSstyletag . $warncolormed;
	}

	if ($val <= 985) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorhigh;
	}
}
//////////////Hour Barometer Change/////////////////////////
if ($key == 'hourchangebarom' || $key == 'weekchangebarom'){
	if (($val >= 1 && $val < 1.5) || ($val <= -1 && $val > -1.5) ) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
	}

	if (($val > 1.5) || ($val < -1.5) ) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorhigh;
	}
}
//////////////Day Barometer Change/////////////////////////

if ($key == 'daychangebarom'){
	if (($val >= 5 && $val < 8.5) || ($val <= -5 && $val > -8.5) ) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
	}

	if (($val > 8.5) || ($val < -8.5) ) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorhigh;
	}
}
//////////////Day Barometer Low/////////////////////////

if ($key == 'lowBarometer' || $key == 'hiBarometer'){
	if ($val <= 987 && $val > 983) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
	}
	if ($val <= 983) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorhigh;
	}

}

return $weatherArray;

}


function changeWindColor($weatherArray,$key,$val,$subArray){

$warncoldcolorlow = '#cff;';
$warncoldcolormed = '#99f;';
$warncoldcolorhigh = '#44f;';
$warncolorlow = '#ee6;';
$warncolormed = '#fb4;';
$warncolorhigh = '#f44;';
$windlevelmoderate = '#ff2;';
$windlevelstrong = '#fb3;';
$windlevelgale = '#f83;';
$windlevelstorm = '#f3b;';
$windlevelhurricane = '#f22;';
$currentraincolor ='#cff;';
$windpowerlow = '#4f4;';
$windpowergood = '#2f2;';
$windpowerbest = '#0f0;';
$freezinglevlow = '#0f0;';
$freezinglevlower = '#0f0;';
$freezinglevlowest = '#0f0;';

$CSSIdent = 'CSS'; // We're adding this string to the regular weatherArray variable to create a new array item that has the CSS background colour... default is "no".
$CSSstyletag = 'margin:1px;padding:1px;background-color:';
$CSSdefaultvalue = 'none;';
$CSSdefault = $CSSstyletag . $CSSdefaultvalue;
$newName = $key . $CSSIdent; //Create the new $weatherArray variable.
$weatherArray[$newName] = $CSSdefault;
//////////////WindSpeed Warning Check/////////////////////////

if ( $key == 'windGustSpeed' || $key == 'windSpeed' || $key == 'intervalAvgWindSpeed'){
	if ($val >= 20 && $val < 45) {
		$weatherArray[$newName] = $CSSstyletag . $windlevelmoderate;
	}

	if ($val >= 45 && $val < 63) {
		$weatherArray[$newName] = $CSSstyletag . $windlevelstrong;
	}

	if ($val >= 63 && $val < 93) {
		$weatherArray[$newName] = $CSSstyletag . $windlevelgale;
	}

	if ($val >= 93 && $val < 120) {
		$weatherArray[$newName] = $CSSstyletag . $windlevelstorm;
	}

	if ($val >= 120) {
		$weatherArray[$newName] = $CSSstyletag . $windlevelhurricane;
	}

}


//////////////High WindSpeed Warning Check/////////////////////////
elseif ($key == 'hiWindSpeed' || $key == 'hiWindGustSpeed'){

	if ($val >= 25 && $val < 45) {
		$weatherArray[$newName] = $CSSstyletag . $windlevelmoderate;
		}

	if ($val >= 45 && $val < 63) {
		$weatherArray[$newName] = $CSSstyletag . $windlevelstrong;
		
	}

	if ($val >= 63 && $val < 93) {
		$weatherArray[$newName] = $CSSstyletag . $windlevelgale;
	
	}

	if ($val >= 93 && $val < 120) {
		$weatherArray[$newName] = $CSSstyletag . $windlevelstorm;
		
	}

	if ($val >= 120) {
		$weatherArray[$newName] = $CSSstyletag . $windlevelhurricane;
		
	}
	
	
}

return $weatherArray;

}


function changeRainColor($weatherArray,$key,$val,$subArray){

$warncoldcolorlow = '#cff;';
$warncoldcolormed = '#99f;';
$warncoldcolorhigh = '#44f;';
$warncolorlow = '#ee6;';
$warncolormed = '#fb4;';
$warncolorhigh = '#f44;';
$windlevelmoderate = '#ff2;';
$windlevelstrong = '#fb3;';
$windlevelgale = '#f83;';
$windlevelstorm = '#f3b;';
$windlevelhurricane = '#f22;';
$currentraincolor ='#cff;';
$windpowerlow = '#4f4;';
$windpowergood = '#2f2;';
$windpowerbest = '#0f0;';
$freezinglevlow = '#0f0;';
$freezinglevlower = '#0f0;';
$freezinglevlowest = '#0f0;';


$CSSIdent = 'CSS'; // We're adding this string to the regular weatherArray variable to create a new array item that has the CSS background colour... default is "no".
$CSSstyletag = 'margin:1px;padding:1px;background-color:';
$CSSdefaultvalue = 'none;';
$CSSdefault = $CSSstyletag . $CSSdefaultvalue;
$newName = $key . $CSSIdent; //Create the new $weatherArray variable.
$weatherArray[$newName] = $CSSdefault;

/*echo $subArray;
echo '~';
echo $key;
echo ':';
echo $val;
echo ';';
*/
//////////////Rain Warning Check/////////////////////////
// PROBLEM HERE:  NOT GOING INTO SUB ARRAY SQLDATA... creating unnecessary values.
if ($key == 'dailyRain' || $key == 'RainPeriodSum' ){

	if ($val > 0 && $val < 20) {
		if ($subArray == 'SQLData') {
		$weatherArray[$subArray][$newName] = $CSSstyletag . $currentraincolor;
		}
		else {
		$weatherArray[$newName] = $CSSstyletag . $currentraincolor;
		}
	
	}
	
	if ($val >= 20 && $val < 40) {
		if ($subArray == 'SQLData') {
		$weatherArray[$subArray][$newName] = $CSSstyletag . $warncolorlow;
		}
		else {
		
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
		}
		
	}

	if ($val >= 40 && $val < 80) {
		if ($subArray == 'SQLData') {
			$weatherArray[$subArray][$newName] = $CSSstyletag . $warncolormed;
		}
		else {
		
		$weatherArray[$newName] = $CSSstyletag . $warncolormed;
		}
	}

	if ($val >= 80) {
		if ($subArray == 'SQLData') {
			$weatherArray[$subArray][$newName] = $CSSstyletag . $warncolorhigh;
		}
		else {
		
		$weatherArray[$newName] = $CSSstyletag . $warncolormed;
		}
	}
}


//////////////Storm Rain Warning Check/////////////////////////

if ($key == 'stormRain'){

	if ($subArray == 'SQLData') {
	if ($val >= 50 && $val < 100) {	
		$weatherArray[$subArray][$newName] = $CSSstyletag . $warncolorlow;
	}

	if ($val >= 100 && $val < 150) {
		$weatherArray[$subArray][$newName] = $CSSstyletag . $warncolormed;
	}

	if ($val >= 150) {
		$weatherArray[$subArray][$newName] = $CSSstyletag . $warncolorhigh;
	}
	}
	else {
	
	if ($val >= 50 && $val < 100) {	
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
	}

	if ($val >= 100 && $val < 150) {
		$weatherArray[$newName] = $CSSstyletag . $warncolormed;
	}

	if ($val >= 150) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorhigh;
	}
	}
	
	//$weatherArray[$subArray][$newName];
}

//////////////Current Rain Rate Warning Check/////////////////////////

if ($key == 'rainRate'){
	if ($val > 0 && $val < 5) {
		$weatherArray[$newName] = $CSSstyletag . $currentraincolor;
	}

	if ($val >= 5 && $val < 15) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
	}

	if ($val >= 15 && $val < 30) {
		$weatherArray[$newName] = $CSSstyletag . $warncolormed;
	}

	if ($val >= 30) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorhigh;
	}
}
//////////////High Rain Rate Warning Check/////////////////////////

if ($key == 'hiRainRate'){

	if ($val > 0 && $val < 10) {
		$weatherArray[$newName] = $CSSstyletag . $currentraincolor;
	}
	
	if ($val >= 10 && $val < 20) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
	}

	if ($val >= 20 && $val < 40) {
		$weatherArray[$newName] = $CSSstyletag . $warncolormed;
	}

	if ($val >= 40) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorhigh;
	}

}

return $weatherArray;

}
function changeTempColor($weatherArray,$key,$val,$subArray){

$warncoldcolorlow = '#cff';
$warncoldcolormed = '#aaf';
$warncoldcolorhigh = '#77f';
$warncolorlow = '#ee6';
$warncolormed = '#fb4';
$warncolorhigh = '#f44';
$windlevelmoderate = '#ff2';
$windlevelstrong = '#fb3';
$windlevelgale = '#f83';
$windlevelstorm = '#f3b';
$windlevelhurricane = '#f22';
$currentraincolor ='#cff';
$windpowerlow = '#4f4';
$windpowergood = '#2f2';
$windpowerbest = '#0f0';
$freezinglevlow = '#0f0';
$freezinglevlower = '#0f0';
$freezinglevlowest = '#0f0';
$greyout = '#eee';
$greyouteven = '#111';

$CSSIdent = 'CSS'; // We're adding this string to the regular weatherArray variable to create a new array item that has the CSS background colour... default is "no".
$CSSstyletag = 'margin:1px;padding:1px;background-color:';
$CSSdefaultvalue = 'none;';
$CSSdefault = $CSSstyletag . $CSSdefaultvalue;
$newName = $key . $CSSIdent; //Create the new $weatherArray variable.
$weatherArray[$newName] = $CSSdefault;

//////////////Temperature Cold Warning/////////////////////////


if ($val <= 0 && $val > -5) {
$weatherArray[$newName] = $CSSstyletag . $warncoldcolorlow;


}

elseif ($val <= -5 && $val > -10) {
$weatherArray[$newName] = $CSSstyletag . $warncoldcolormed;
}

elseif ($val <= -10) {
$weatherArray[$newName] = $CSSstyletag . $warncoldcolorhigh;
}

if ($key != 'windChill') {
	//////////////Temperature Hot Warning/////////////////////////
	if ($val >= 20 && $val < 30) {
		if ($key == 'heatIndex' || $key == 'outsideHeatIndex' ) {
/*	Bug Here		
			if ($weatherArray['heatIndex'] > $weatherArray['outTemp']) {
					$weatherArray['heatIndexCSS'] = $CSSstyletag . $warncolorlow;
				}
			elseif ($weatherArray['outsideHeatIndex'] > $weatherArray['outTemp']) {
				$weatherArray['outsideHeatIndexCSS'] = $CSSstyletag . $warncolorlow;
				}
			if ($weatherArray['outsideHeatIndex'] == $weatherArray['outTemp']) {
				$weatherArray['outsideHeatIndexCSS'] = $CSSstyletag . $CSSdefaultvalue;
				$weatherArray['outsideHeatIndex'] = 'N/A';
				}	
*/			
			}
		}
	elseif ($val >= 30 && $val < 35) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
		}

	elseif ($val >= 35 && $val < 38) {
		$weatherArray[$newName] = $CSSstyletag . $warncolormed;
		}

	elseif ($val >= 38) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorhigh;
		}
	}
if ($key == 'windChill') {
	//////////////Temperature Hot Warning/////////////////////////
	if ($val >= -5 && $val < 0) {
		$weatherArray[$newName] = $CSSstyletag . $warncoldcolorlow;
		}
	elseif ($val >= -10 && $val < -5) {
		$weatherArray[$newName] = $CSSstyletag . $warncoldcolormed;
		}
	elseif ($val < -10) {
		$weatherArray[$newName] = $CSSstyletag . $warncoldcolorhigh;
		}
		
}
return $weatherArray;

}


function changesolarRadColor($weatherArray,$key,$val,$subArray){

$warncolorlow = '#ee6;';
$warncolormed = '#fb4;';
$warncolorhigh = '#f44;';

$CSSIdent = 'CSS'; // We're adding this string to the regular weatherArray variable to create a new array item that has the CSS background colour... default is "no".
$CSSstyletag = 'margin:1px;padding:1px;background-color:';
$CSSdefaultvalue = 'none;';
$CSSdefault = $CSSstyletag . $CSSdefaultvalue;
$newName = $key . $CSSIdent; //Create the new $weatherArray variable.
$weatherArray[$newName] = $CSSdefault;
//////////////Current Solar Radiation/////////////////////////

	if ($val < 500) {
		$weatherArray[$newName] = $CSSstyletag . $CSSdefaultvalue;
	}
	if ($val >= 500 && $val < 800) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
	}

	if ($val >= 800 && $val < 1000) {
		$weatherArray[$newName] = $CSSstyletag . $warncolormed;
	}

	if ($val >= 1000) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorhigh;
	}

return $weatherArray;

}

function changeSolarWindPotentialColor($weatherArray,$key,$val,$subArray){

$warncolorlow = '#ee6;';
$warncolormed = '#fb4;';
$warncolorhigh = '#f44;';

$CSSIdent = 'CSS'; // We're adding this string to the regular weatherArray variable to create a new array item that has the CSS background colour... default is "no".
$CSSstyletag = 'margin:1px;padding:1px;background-color:';
$CSSdefaultvalue = 'none;';
$CSSdefault = $CSSstyletag . $CSSdefaultvalue;
$newName = $key . $CSSIdent; //Create the new $weatherArray variable.
$weatherArray[$newName] = $CSSdefault;
//////////////Current Solar Potential/////////////////////////

	if ($val < 100) {
		$weatherArray[$newName] = $CSSstyletag . $CSSdefaultvalue;
	}
	if ($val >= 100 && $val < 200) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
	}

	if ($val >= 200 && $val < 400) {
		$weatherArray[$newName] = $CSSstyletag . $warncolormed;
	}

	if ($val >= 400) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorhigh;
	}

return $weatherArray;

}

function changeUVColor($weatherArray,$key,$val,$subArray){

$warncoloruvlow = '#9d9;';
$warncoloruvmed = '#ee6;';
$warncoloruvhigh = '#fb4;';
$warncoloruvveryhigh = '#f44;';
$warncoloruvextreme = '#b3b;';
$CSSIdent = 'CSS'; // We're adding this string to the regular weatherArray variable to create a new array item that has the CSS background colour... default is "no".
$CSSstyletag = 'margin:1px;padding:1px;background-color:';
$CSSdefaultvalue = 'none;';
$CSSdefault = $CSSstyletag . $CSSdefaultvalue;
$newName = $key . $CSSIdent; //Create the new $weatherArray variable.
$weatherArray[$newName] = $CSSdefault;
//////////////Current Solar Radiation/////////////////////////

	
	if ($val >= 1 && $val < 3) {
		$weatherArray[$newName] = $CSSstyletag . $CSSdefaultvalue;
	}
	if ($val >= 3 && $val < 6) {
		$weatherArray[$newName] = $CSSstyletag . $warncoloruvmed;
	}

	if ($val >= 6 && $val < 8) {
		$weatherArray[$newName] = $CSSstyletag . $warncoloruvhigh;
	}

	if ($val >= 8 && $val < 11) {
		$weatherArray[$newName] = $CSSstyletag . $warncoloruvveryhigh;
	}
	
	if ($val >= 11) {
		$weatherArray[$newName] = $CSSstyletag . $warncoloruvextreme;
	}
return $weatherArray;

}

function changeETColor($weatherArray,$key,$val,$subArray){

$warncolorinitial = '#ff9';
$warncolorlow = '#ee6;';
$warncolormed = '#fb4;';
$warncolorhigh = '#f44;';

$CSSIdent = 'CSS'; // We're adding this string to the regular weatherArray variable to create a new array item that has the CSS background colour... default is "no".
$CSSstyletag = 'margin:1px;padding:1px;background-color:';
$CSSdefaultvalue = 'none;';
$CSSdefault = $CSSstyletag . $CSSdefaultvalue;
$newName = $key . $CSSIdent; //Create the new $weatherArray variable.
$weatherArray[$newName] = $CSSdefault;	
/*echo $subArray;
echo '~';
echo $key;
echo ':';
echo $val;
echo ';';*/
//////////////Current ET/////////////////////////
	if ($val > 0 && $val < 2) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorinitial;
	}
	if ($val >= 2 && $val < 6) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorlow;
	}

	if ($val >= 6 && $val < 10) {
		$weatherArray[$newName] = $CSSstyletag . $warncolormed;
	}

	if ($val >= 10) {
		$weatherArray[$newName] = $CSSstyletag . $warncolorhigh;
	}
return $weatherArray;

}


function setcssalert($weatherArray) {
$subArray = 'NA';
foreach ($weatherArray as $key => $val) {

	
	if (stristr($key, 'freezingLevel')){ // Searching for freezingLevel
	
		if (stristr($key, 'Time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
			if (stristr($key, 'date') === FALSE){
				if (stristr($key, 'change') === FALSE){
					if (stristr($key, 'avg') === FALSE){
						if (stristr($key, 'unit') === FALSE){
		
		$weatherArray = changefreezingColor($weatherArray,$key,$val,$subArray);
							}
						}
					}
				}
			}
		} //end of FreezingLevel CSS Styling
		
	if (stristr($key, 'temp') || stristr($key, 'chill') || stristr($key, 'dew') || stristr($key, 'humidex') || stristr($key, 'heat')){ // Searching for temperature, windchill, dewpoint, and heat values
		if (stristr($key, 'Time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
			if (stristr($key, 'date') === FALSE){
				if (stristr($key, 'change') === FALSE){
					if (stristr($key, 'avg') === FALSE){
						if (stristr($key, 'unit') === FALSE){
		
		$weatherArray = changeTempColor($weatherArray,$key,$val,$subArray);
							}
						}
					}
				}
			}
		} //end of Temperature CSS Styling
		
	
	if (stristr($key, 'rain')){ // Searching for Rain
	
		if (stristr($key, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
			if (stristr($key, 'date') === FALSE){
				if (stristr($key, 'change') === FALSE){
					if (stristr($key, 'avg') === FALSE){
					if (stristr($key, 'rainSeasonStart') === FALSE){
					if (stristr($key, 'Status') === FALSE){
					if (stristr($key, 'Duration') === FALSE){
					
						if (stristr($key, 'unit') === FALSE){
		
	
		
		
		$weatherArray = changeRainColor($weatherArray,$key,$val,$subArray);
							}
						}}}}
					}
				}
			}
		} //end of Rain CSS Styling
		
		if (stristr($key, 'wind')){ // Searching for Wind
	
		if (stristr($key, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare wind
			if (stristr($key, 'date') === FALSE){
				if (stristr($key, 'change') === FALSE){
					if (stristr($key, 'unit') === FALSE){
						if (stristr($key, 'chill') === FALSE){
		
		$weatherArray = changeWindColor($weatherArray,$key,$val,$subArray);
							}
						}
					}
				}
			}
		} //end of Wind CSS Styling
		
		if (stristr($key, 'barom')){ // Searching for Wind
	
		if (stristr($key, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
			if (stristr($key, 'date') === FALSE){
				if (stristr($key, 'change') === FALSE){
					if (stristr($key, 'unit') === FALSE){
		
		$weatherArray = changeBarColor($weatherArray,$key,$val,$subArray);
						}
					}
				}
			}
		} //end of Barometer CSS Styling
		
		if (stristr($key, 'solarRad')){ // Searching for Solar Radiation and Wind Power Density
	
		if (stristr($key, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
			if (stristr($key, 'date') === FALSE){
				if (stristr($key, 'change') === FALSE){
					if (stristr($key, 'unit') === FALSE){
	
		$weatherArray = changesolarRadColor($weatherArray,$key,$val,$subArray);
						}
					}
				}
			}
		} //end of SolarRad CSS Styling
		
		if (stristr($key, 'hiRadiation')){ // Searching for Solar Radiation and Wind Power Density
	
		if (stristr($key, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
			if (stristr($key, 'date') === FALSE){
				if (stristr($key, 'change') === FALSE){
					if (stristr($key, 'unit') === FALSE){
		
		$weatherArray = changesolarRadColor($weatherArray,$key,$val,$subArray);
						}
					}
				}
			}
		} //end of hiRadiation CSS Styling
		
		if (stristr($key, 'solarPotential') || stristr($key, 'windPowerDensity') ){ // Searching for Solar Potential
	
		if (stristr($key, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
			if (stristr($key, 'date') === FALSE){
				if (stristr($key, 'change') === FALSE){
					if (stristr($key, 'unit') === FALSE){
		
		$weatherArray = changeSolarWindPotentialColor($weatherArray,$key,$val,$subArray);
						}
					}
				}
			}
		} //end of SolarPotential CSS Styling
		
		if (stristr($key, 'UV')){ // Searching for UV
	
		if (stristr($key, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
			if (stristr($key, 'date') === FALSE){
				if (stristr($key, 'change') === FALSE){
					if (stristr($key, 'unit') === FALSE){
		
		//echo $val;
		$weatherArray = changeUVColor($weatherArray,$key,$val,$subArray);
						}
					}
				}
			}
		} //end of UV CSS Styling
		
		if (stristr($key, 'ET')){ // Searching for EvapoTrans
	
		if (stristr($key, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
			if (stristr($key, 'date') === FALSE){
				if (stristr($key, 'change') === FALSE){
					if (stristr($key, 'unit') === FALSE){
						if (stristr($key, 'barometer') === FALSE){
							if (stristr($key, 'out') === FALSE){
								if (stristr($key, 'in') === FALSE){
								if (stristr($key, 'wetBulbTemp') === FALSE){
								if (stristr($key, 'archiveTableArray') === FALSE){
								if (stristr($key, 'offset') === FALSE){
								if (stristr($key, 'UnixOffset') === FALSE){
								
								
									if (stristr($key, 'leaf') === FALSE){
		$weatherArray = changeETColor($weatherArray,$key,$val,$subArray);
										}
										}
										}
										}
										}
									}
								}
							}
						}
					}
				}
			}
		} //end of ET CSS Styling
		
		if (stristr($key, 'SQLData')) { // Searching for SQLData {
		$subArray = 'SQLData';
			foreach ($val as $key2 => $val2) {
				if (stristr($key2, 'temp') || stristr($key2, 'chill') || stristr($key2, 'humidex') || stristr($key2, 'dew') || stristr($key2, 'heat')){ // Searching for temperature, windchill, dewpoint, and heat values
					if (stristr($key2, 'Time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
						if (stristr($key2, 'date') === FALSE){
							if (stristr($key2, 'change') === FALSE){
								if (stristr($key2, 'avg') === FALSE){
									if (stristr($key2, 'unit') === FALSE){
										$weatherArray = changeTempColor($weatherArray,$key2,$val2,$subArray);
									}
								}
							}
						}
					}
				} //end of SQL Temperature CSS Styling
				
				if (stristr($key2, 'rain')){ // Searching for Rain
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare rain
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'avg') === FALSE){
								if (stristr($key2, 'unit') === FALSE){
								//echo $key2;
								//echo ';';
								//echo $val2;
									$weatherArray = changeRainColor($weatherArray,$key2,$val2,$subArray);
		
									}
								}
							}
						}
					}
				} //end of Rain CSS Styling
		
				if (stristr($key2, 'wind')){ // Searching for Wind
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, and windchill instead of bare wind
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
								if (stristr($key2, 'chill') === FALSE){
				
				$weatherArray = changeWindColor($weatherArray,$key2,$val2,$subArray);
									}
								}
							}
						}
					}
				} //end of Wind CSS Styling
		
				if (stristr($key2, 'barom')){ // Searching for Wind
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
				
				$weatherArray = changeBarColor($weatherArray,$key2,$val2[287],$subArray);
								}
							}
						}
					}
				} //end of Barometer CSS Styling
		
				if (stristr($key2, 'solarRad')){ // Searching for Solar Radiation
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
				
				$weatherArray = changesolarRadColor($weatherArray,$key2,$val2,$subArray);
								}
							}
						}
					}
				} //end of SolarRad CSS Styling
		
				if (stristr($key2, 'hiRadiation')){ // Searching for Solar Radiation
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
				
				$weatherArray = changesolarRadColor($weatherArray,$key2,$val2,$subArray);
								}
							}
						}
					}
				} //end of hiRadiation CSS Styling
		
		
				if (stristr($key2, 'UV')){ // Searching for UV
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){

				$weatherArray = changeUVColor($weatherArray,$key2,$val2,$subArray);
								}
							}
						}
					}
				} //end of UV CSS Styling
		
				if (stristr($key2, 'ET')){ // Searching for EvapoTrans
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
								if (stristr($key2, 'barometer') === FALSE){
									$weatherArray = changeETColor($weatherArray,$key2,$val2,$subArray);
									}
								}
							}
						}
					}
				} //end of ET CSS Styling*/
		
				if (stristr($key2, 'ET') && stristr($key2, 'sum')){ // Searching for EvapoTrans
					if (stristr($key2, 'hourly') === FALSE){
									$weatherArray = changeETColor($weatherArray,$key2,$val2,$subArray);
					}
				} //end of ET CSS Styling*/
				
				
			} //END if SQLDATA foreach
		
			
		
		}//End of SQL IF
	} //end of FOREACH loop

/*
if ($weatherArray[almanacPeriod] != 'Daily') {
	
	foreach ($weatherArray[SQLData][$weatherArray[almanacPeriod]][Value] as $key2 => $value2) {
		
	if (stristr($key2, 'temp') || stristr($key2, 'chill') || stristr($key2, 'dew') || stristr($key2, 'heat')){ // Searching for temperature, windchill, dewpoint, and heat values
			$weatherArray = changeTempColor($weatherArray,$key2,$value2,$subArray);
			//print_r($weatherArray[SQLData][$weatherArray[almanacPeriod]][Value]);	
			} //end of SQL Temperature CSS Styling
				
			if (stristr($key2, 'rain')){ // Searching for Rain
			$weatherArray = changeRainColor($weatherArray,$key2,$value2,$subArray);
		
			} //end of Rain CSS Styling
		
				if (stristr($key2, 'wind')){ // Searching for Wind
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
				
				$weatherArray = changeWindColor($weatherArray,$key2,$val2[287],$subArray);
								}
							}
						}
					}
				} //end of Wind CSS Styling
		
				if (stristr($key2, 'barom')){ // Searching for Wind
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
				
				$weatherArray = changeBarColor($weatherArray,$key2,$val2[287],$subArray);
								}
							}
						}
					}
				} //end of Barometer CSS Styling
		
				if (stristr($key2, 'solarRad')){ // Searching for Solar Radiation
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
				
				$weatherArray = changesolarRadColor($weatherArray,$key2,$val2[287],$subArray);
								}
							}
						}
					}
				} //end of SolarRad CSS Styling
		
				if (stristr($key2, 'hiRadiation')){ // Searching for Solar Radiation
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
				
				$weatherArray = changesolarRadColor($weatherArray,$key2,$val2[287],$subArray);
								}
							}
						}
					}
				} //end of hiRadiation CSS Styling
		
		
				if (stristr($key2, 'UV')){ // Searching for UV
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){

				$weatherArray = changeUVColor($weatherArray,$key2,$val2[287],$subArray);
								}
							}
						}
					}
				} //end of UV CSS Styling
		
				if (stristr($key2, 'ET')){ // Searching for EvapoTrans
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
								if (stristr($key2, 'barometer') === FALSE){
									$weatherArray = changeETColor($weatherArray,$key2,$val2[287],$subArray);
									}
								}
							}
						}
					}
				} //end of ET CSS Styling
		
				if (stristr($key2, 'ET') && stristr($key2, 'sum')){ // Searching for EvapoTrans
					if (stristr($key2, 'hourly') === FALSE){
									$weatherArray = changeETColor($weatherArray,$key2,$val2,$subArray);
					}
				} //end of ET CSS Styling
		if (stristr($key2, 'temp') || stristr($key2, 'chill') || stristr($key2, 'dew') || stristr($key2, 'heat')){ // Searching for temperature, windchill, dewpoint, and heat values
					if (stristr($key2, 'Time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
						if (stristr($key2, 'date') === FALSE){
							if (stristr($key2, 'change') === FALSE){
								if (stristr($key2, 'avg') === FALSE){
									if (stristr($key2, 'unit') === FALSE){
										$weatherArray = changeTempColor($weatherArray,$key2,$val2[288],$subArray);
									}
								}
							}
						}
					}
				} //end of SQL Temperature CSS Styling
				
				if (stristr($key2, 'rain')){ // Searching for Rain
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'avg') === FALSE){
								if (stristr($key2, 'unit') === FALSE){
									$weatherArray = changeRainColor($weatherArray,$key2,$val2[287],$subArray);
		
									}
								}
							}
						}
					}
				} //end of Rain CSS Styling
		
				if (stristr($key2, 'wind')){ // Searching for Wind
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
				
				$weatherArray = changeWindColor($weatherArray,$key2,$val2[287],$subArray);
								}
							}
						}
					}
				} //end of Wind CSS Styling
		
				if (stristr($key2, 'barom')){ // Searching for Wind
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
				
				$weatherArray = changeBarColor($weatherArray,$key2,$val2[287],$subArray);
								}
							}
						}
					}
				} //end of Barometer CSS Styling
		
				if (stristr($key2, 'solarRad')){ // Searching for Solar Radiation
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
				
				$weatherArray = changesolarRadColor($weatherArray,$key2,$val2[287],$subArray);
								}
							}
						}
					}
				} //end of SolarRad CSS Styling
		
				if (stristr($key2, 'hiRadiation')){ // Searching for Solar Radiation
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
				
				$weatherArray = changesolarRadColor($weatherArray,$key2,$val2[287],$subArray);
								}
							}
						}
					}
				} //end of hiRadiation CSS Styling
		
		
				if (stristr($key2, 'UV')){ // Searching for UV
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){

				$weatherArray = changeUVColor($weatherArray,$key2,$val2[287],$subArray);
								}
							}
						}
					}
				} //end of UV CSS Styling
		
				if (stristr($key2, 'ET')){ // Searching for EvapoTrans
			
				if (stristr($key2, 'time') === FALSE){// The Following Conditions get rid of the array keys that have to do with times, or are intervals, instead of bare temperatures
					if (stristr($key2, 'date') === FALSE){
						if (stristr($key2, 'change') === FALSE){
							if (stristr($key2, 'unit') === FALSE){
								if (stristr($key2, 'barometer') === FALSE){
									$weatherArray = changeETColor($weatherArray,$key2,$val2[287],$subArray);
									}
								}
							}
						}
					}
				} //end of ET CSS Styling
		
				if (stristr($key2, 'ET') && stristr($key2, 'sum')){ // Searching for EvapoTrans
					if (stristr($key2, 'hourly') === FALSE){
									$weatherArray = changeETColor($weatherArray,$key2,$val2,$subArray);
					}
				} //end of ET CSS Styling
				
	}//End Almanac ForEach
}//End Daily Almanac IF
*/

return $weatherArray;

}	

?>