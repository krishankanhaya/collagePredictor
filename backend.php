<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cut off</title>
    <link rel="stylesheet" href="style/php.css">
</head>
<body>
    <?php

//get variable gjuOpeningAndClosingRank
$rank = $_POST['rank'];
$catogory = $_POST['catogory'];
if($rank>0){
    
//making connection to the database
$dbc = mysqli_connect("localhost","id17400137_krishankanhaya_","Kkanhayak0007@","id17400137_root") or die("Error in connection to the database");
//respose of users
$query = "INSERT INTO collagePredictorResponse (category,rank) VALUES ('$catogory','$rank')";
$result = mysqli_query($dbc,$query);
//end respose of users
// query 1
$query1 = "SELECT * FROM `ymcaOpeningAndClosingRank` WHERE $catogory > $rank  ORDER BY $catogory ";

$result1 = mysqli_query($dbc,$query1) or die(mysqli_error($dbc));

$num1 =mysqli_num_rows($result1);
echo "<h1>" . "Top 5 Collages in Haryana under HSTES</h1></br>";
echo "<p class='sinfo'>"."YOUR RANK = " . $rank . "</p>";
echo "<p class='sinfo'>"."YOUR CATEGORY = " . $catogory . "</p>";
echo "<h1>YMCA Faridabad</h1>";
echo "<h1>" . "Total number of result ="  . " " . $num1 . "</h1></br>";


 echo "<table width='100%' border='1' >";
 echo "<tr><th>Sr.No.</th><th>Branch</th><th>Closing Rank</th></tr>";

$i = 1;
while($row = mysqli_fetch_assoc($result1)){
    echo "<tr><td>" . $i . "</td>" . "<td>" . $row['collageBranch'] . "</td>" . "<td>" . $row[$catogory] . "</td>" . "</tr>";
    $i = $i + 1;
}
echo "</table></br>";
 //end of query 1
 //query 2
$query2 = "SELECT * FROM `dcrustOpening and closing rank` WHERE $catogory > $rank  ORDER BY $catogory ";

$result2 = mysqli_query($dbc,$query2) or die(mysqli_error($dbc));

$num2 =mysqli_num_rows($result2);
echo "<h1>DCRUST Murthal</h1>";
echo "<h1>" . "Total number of result ="  . " " . $num2 . "</h1></br>";


 echo "<table width='100%' border='1' >";
 echo "<tr><th>Sr.No.</th><th>Branch</th><th>Closing Rank</th></tr>";

$i = 1;
while($row = mysqli_fetch_assoc($result2)){
    echo "<tr><td>" . $i . "</td>" . "<td>" . $row['collageBranch'] . "</td>" . "<td>" . $row[$catogory] . "</td>" . "</tr>";
    $i = $i + 1;
}
echo "</table></br>";
//end of query 2
//query 3
$query3 = "SELECT * FROM `gjuOpeningAndClosingRank` WHERE $catogory > $rank  ORDER BY $catogory ";

$result3 = mysqli_query($dbc,$query3) or die(mysqli_error($dbc));

$num3 =mysqli_num_rows($result3);
echo "<h1>Guru Jambeshwar University,GJU HISAR</h1>";
echo "<h1>" . "Total number of result ="  . " " . $num3 . "</h1></br>";


 echo "<table width='100%' border='1' >";
 echo "<tr><th>Sr.No.</th><th>Branch</th><th>Closing Rank</th></tr>";

$i = 1;
while($row = mysqli_fetch_assoc($result3)){
    echo "<tr><td>" . $i . "</td>" . "<td>" . $row['collageBranch'] . "</td>" . "<td>" . $row[$catogory] . "</td>" . "</tr>";
    $i = $i + 1;
}
echo "</table></br>";
//end of query 3
//query 4
$query4 = "SELECT * FROM `uietkrukshetraOpeningAndClosingRank` WHERE $catogory > $rank  ORDER BY $catogory ";

$result4 = mysqli_query($dbc,$query4) or die(mysqli_error($dbc));

$num4 =mysqli_num_rows($result4);
echo "<h1>UIET KURUKSHETRA</h1>";
echo "<h1>" . "Total number of result ="  . " " . $num4 . "</h1></br>";


 echo "<table width='100%' border='1' >";
 echo "<tr><th>Sr.No.</th><th>Branch</th><th>Closing Rank</th></tr>";

$i = 1;
while($row = mysqli_fetch_assoc($result4)){
    echo "<tr><td>" . $i . "</td>" . "<td>" . $row['collageBranch'] . "</td>" . "<td>" . $row[$catogory] . "</td>" . "</tr>";
    $i = $i + 1;
}
echo "</table></br>";
//end of query 4
//query 5
$query5 = "SELECT * FROM `mduOpeningAndClosingRank` WHERE $catogory > $rank  ORDER BY $catogory ";

$result5 = mysqli_query($dbc,$query5) or die(mysqli_error($dbc));

$num5 =mysqli_num_rows($result5);
echo "<h1>UIET, MDU Rohtak</h1>";
echo "<h1>" . "Total number of result ="  . " " . $num5 . "</h1></br>";


 echo "<table width='100%' border='1' >";
 echo "<tr><th>Sr.No.</th><th>Branch</th><th>Closing Rank</th></tr>";

$i = 1;
while($row = mysqli_fetch_assoc($result5)){
    echo "<tr><td>" . $i . "</td>" . "<td>" . $row['collageBranch'] . "</td>" . "<td>" . $row[$catogory] . "</td>" . "</tr>";
    $i = $i + 1;
}
echo "</table></br>";
//end of query 5

mysqli_close($dbc);
echo "<a href='https://kkanhayak.000webhostapp.com/collagePredictor' ><h3 class='back'>Try For Another Rank</h3></a>";
echo "<div class='footer'>&copy;2021-22 &nbsp; <span>KRISHAN KANHAYA</span></div>";

}
else{
    echo "<h2>Enter Your Rank Correctly.";
}
?>



</body>
</html>



