<!DOCTYPE html>
<html>
<head><title>Results</title>
	<div id="link"><pre><a href="../assignments.html">Back to Assignments</a><a href="survey.html">      Back to survey</a><a href="../index.html">        Home</a></pre>
	</div>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="survey.css">
	<div id="border">
		<h1>RESULTS</h1>
	<?php
	$filePath = "survey.txt";
	function outPut($array, $number)
	{
		echo "$array[0] out of $number want to be a hero. <br>";
		echo "$array[1] out of $number want to be a villan. <br><br>";
		echo "$array[2] out of $number became a hero because that's just the way they are. <br>";
		echo "$array[3] out of $number became a hero because of a Promise. <br>";
		echo "$array[4] out of $number became a hero because of a past tragety with a villan<br><br>";
		echo "$array[5] out of $number became a villan because of a Past tragety. <br>";
		echo "$array[6] out of $number became a villan because they are just evil. <br>";
		echo "$array[7] out of $number became a villan because they are an agent of chaos. <br><br>";
		echo "$array[8] out of $number have Super Strength<br>";
		echo "$array[9] out of $number have Flight abilities <br>";
		echo "$array[10] out of $number have Element abilities <br>";
		echo "$array[11] out of $number can turn invisible <br><br>";
		echo "$array[12] out of $number would protect or antagonize Detroit, Michigan. <br>";
		echo "$array[13] out of $number would protect or antagonize New Orleans, Louisiana. <br>";
		echo "$array[14] out of $number would protect or antagonize Oakland, Calafornia. <br>";
		echo "$array[15] out of $number would protect or antagonize Cincinnati, Ohio. <br>";
		echo "$array[16] out of $number would protect or antagonize Birmingham, Alabama. <br>";
		echo "$array[17] out of $number would protect or antagonize Baltimore, Maryland. <br>";
	}
	function longIfState($array){

		if($_POST["char"] === "Hero")
		{

			$array[0] += 1;
		}
		else
		{
			$array[1] += 1;
		}

		if($_POST["past"] === "Just a good person")
		{
			$array[2] += 1;
		}
		elseif($_POST["past"] === "Promise")
		{
			$array[3] += 1;
		}
		elseif($_POST["past"] === "past tragety with villan")
		{
			$array[4] += 1;
		}
		elseif($_POST["past"] === "past tragety")
		{
			$array[5] += 1;
		}
		elseif($_POST["past"] === "Just because Im Evil")
		{
			$array[6] += 1;
		}
		else
		{
			$array[7] += 1;
		}

		if($_POST["Power"] === "Strength")
		{
			$array[8] += 1;

		}
		elseif($_POST["Power"] === "Flight")
		{
			$array[9] += 1;
			
		}
		elseif($_POST["Power"] === "Elements")
		{
			$array[10] += 1;
		}
		else
		{
			$array[11] += 1;
		}

		if($_POST["city"] === "Detroit, Michigan")
		{
			$array[12] += 1;

		}
		elseif($_POST["city"] === "New Orleans, Louisiana")
		{
			$array[13] += 1;
			
		}
		elseif($_POST["city"] === "Oakland, Calafornia")
		{
			$array[14] += 1;
		}
		elseif($_POST["city"] === "Cincinnati, Ohio")
		{
			$array[15] += 1;
			
		}
		elseif($_POST["city"] === "Birmingham, Alabama")
		{
			$array[16] += 1;
		}
		else
		{
			$array[17] += 1;
		}
		return $array;


	}

	if(file_exists($filePath))
	{
		
		$openfile = fopen($filePath, "r");
		$newFile = fread($openfile, filesize($filePath));
		fclose($openfile);
		$newArray1 = explode(",", $newFile);
		if(!empty($_POST["char"]) && !empty($_POST["char"]) && !empty($_POST["char"]) && !empty($_POST["char"]))
		{
		$ARR = longIfState($newArray1);
		$openfile = fopen($filePath, "w");
		$newText = implode(",", $ARR);
		fwrite($openfile, $newText);
		fclose($openfile);
		$num = $ARR[0] + $ARR[1];
		outPut($ARR, $num);
	}
	else
	{
		$num = $newArray1[0] + $newArray1[1];
		outPut($newArray1, $num);
	}

	}
	else
	{
		$num = 1;
		$array =  array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
		if(!empty($_POST["char"]) && !empty($_POST["char"]) && !empty($_POST["char"]) && !empty($_POST["char"]))
		{
		$openfile = fopen($filePath, "w+") or die ("unable to open file");
		$newArray = longIfState($array);
		$newText = implode(",", $newArray);
		fwrite($openfile, $newText);
		fclose($openfile);
		outPut($newArray, $num);
	}
	else
	{
		outPut($array, $num);
	}

	}


	?>

<div>
</body>
</html>