<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";
$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

$date =  str_replace('-','/',$date);
$date = date($date);
echo "<br><br>2. After Replace \$date: ".$date."<br><br>";

if($date > date($tar)) {
	echo "3. The Future<br><br>";
}
elseif($date < date($tar)) {
	echo "3. The Past<br><br>";
}
else {
	echo "3. Oops<br><br>";
}

$last = strrpos($date,"/");
$pos = 0;
echo "4. All positions of occurances of '/' : ";
while($pos<$last) {
    $pos = strpos($date,"/",$pos);
    echo $pos." ";
    $pos++;
}
echo "<br><br>";

echo "5. number of words in \$date : ".str_word_count($date,0)."<br><br>";
echo "6. Length of \$date : ".strlen($date)."<br><br>";
echo "7. ASCII value of the first character of a \$date : ".ord($date)."<br><br>";
echo "8.  last two characters in \$date : ".substr($date, -2)."<br><br>";

echo "9. words in \$date separated by ' ' : ";
$word = strtok($date, "/");
while ($word !== false) {
    echo $word." ";
    $word = strtok("/");
}

echo "<br><br>10. Using foreach<br>";  
foreach($year as $value) {
	$leap = ($value % 4) == 0 && (($value % 100) != 0 || ($value % 400) == 0);
	switch($leap) {
		case true:
		   echo $value."-> True, ";
		   break;
		case false:
		   echo $value."-> False, ";
		   break;		           
	}
}

echo "<br><br>10. Using while<br>"; 
$i = 0;
while($i<sizeof($year)) {
	$leap = ($year[$i] % 4) == 0 && (($year[$i]  % 100) != 0 || ($year[$i]  % 400) == 0);
    switch($leap) {
		case true:
		   echo $year[$i]."-> True, ";
		   break;
		case false:
		   echo $year[$i]."-> False, ";
		   break;		            
	}
	$i++;
}


?>