<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
$a = 0;
while ($a<=100) {
// echo $a . ", ";
$a++; // $i = $i +1; $i += 1;
}
$a = 0;
// do {
//
// } while ($a <= 100);
for ($i=0; $i<=100; $i++) {
// echo $i .", ";
}

$array1 = array(1, 2, "56", "string");

$array2 = array(
array(1,2,3,
array(1)
),
2, "56", "string");

foreach($array1 as $item) {
// echo $item . "<br>";
}

$asArray = array(
"yogurt" => "2 euros",
"milk" => "1 euros",
"bread" => "3 euros",
"eggs" => "3.5 euros",
"bira" => "20 euros"
 
);

foreach($asArray as $key=>$value) {
echo $key . " -> " . $value . "<br>";
}
unset($array1[2]);



var_dump($array1);
echo "<br>".json_encode($array1);



// $l = strlen($array1);
?>
</body>
</html>