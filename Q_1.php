<!DOCTYPE html>
<html lang = en>
<head>
        <title> Question 1 </title> 
        <meta charset="utf-8">
</head>

<body>
<?php
	function findSummation($n=1) {
		if(!is_numeric($n) || $n <= 0) {
			return false;
		}
		$sum = 0;
		for($i=1; $i<=$n; $i++) {
			$sum += $i;
		}
		return $sum;
	}

    function uppercaseFirstandLast($str) {
		$words = explode(" ", $str);
		foreach($words as &$word) {
			$first = substr($word, 0, 1);
			$last = substr($word, -1, 1);
			$word = strtoupper($first) . substr($word, 1, -1) . strtoupper($last);
		}
		return implode(" ", $words);
	}

    function findAverage_and_Median($arr) {
		$avg = array_sum($arr) / count($arr);
		sort($arr);
		$count = count($arr);
		$middle = floor($count / 2);
		if($count % 2 == 0) {
			$median = ($arr[$middle-1] + $arr[$middle]) / 2;
		} else {
			$median = $arr[$middle];
		}
		return array("average" => $avg, "median" => $median);
	}

    function find4Digits($str) {
		$numbers = explode(" ", $str);
		foreach($numbers as $number) {
			if(strlen($number) == 4 && is_numeric($number)) {
				return $number;
			}
		}
		return false;
	}
?>

<h2>findSummation Function:</h2>
	<p>findSummation(2) returns: <?php echo findSummation(2); ?></p>
	<p>findSummation(-7) returns: <?php echo findSummation(-7); ?></p>
	<p>findSummation("string") returns: <?php echo findSummation("string"); ?></p>

<h2>uppercaseFirstandLast Function:</h2>
    
	<p>uppercaseFirstandLast("hello world") returns: <?php echo uppercaseFirstandLast("hello world"); ?></p>
	<p>uppercaseFirstandLast("this is an apple") returns: <?php echo uppercaseFirstandLast("this is an apple"); ?></p>

<h2>findAverage_and_Median Function:</h2>
    <p>findAverage_and_Median([1, 2, 3, 4, 5]) returns:</p>
    <?php print_r(findAverage_and_Median([1, 2, 3, 4, 5])); ?>

    <p>findAverage_and_Median([1, 2, 3, 4, 5, 9]) returns:</p>
    <?php print_r(findAverage_and_Median([1, 2, 3, 4, 5, 9])); ?>

<h2>find4Digits Function:</h2>
    <p>find4Digits("1234 5678 9 123 4567") returns: <?php echo find4Digits("1234 5678 9 123 4567"); ?></p>
    <p>find4Digits("123 4567 89") returns: <?php echo find4Digits("123 4567 89"); ?></p>
    <p>find4Digits("12 3 456 89") returns: <?php echo find4Digits("12 3 456 89"); ?></p>

</body>
</html>
