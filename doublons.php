<?php
/* ----- Reperer des doublons dans un tableau */
function reperead($laTableau)
{
	if(!is_array($laTableau)){
		return false;
	}
	$laRepeatvalue = [];
	$laTabUnique = array_unique($laTableau);
	if(count($laTableau) - count($laTabUnique) > 0){
		for($i = 0; $i< count($laTableau); $i++) {
			if(!array_key_exists($i, $laTabUnique)) {
				$laRepeatvalue[] = $laTableau[$i];
			}
		}
	}
	return $laRepeatvalue;
}
 $in = array("a","b","c","a","d","e","f","b","g","h","b");

    $repeated = reperead($in);

//$out = array_diff($in,$repeated); 
// Affichage des doublons
	
	echo '<pre>';
 		 print_r ( $repeated ) ;
  	echo '</pre>';
// Affichage des elements sans doublons

	echo '<pre>';
 		 print_r ( array_diff($in, $repeated) ) ;
  	echo '</pre>';