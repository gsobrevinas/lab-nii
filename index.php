<!DOCTYPE HTML>
<head>
<title>Site Internet de Fontaine</title>
<link rel="icon" type="image/icon" href="./Images/logo.webp" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
body{
	background-image: url("./Images/fontaine2.png");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	margin:0;
  padding:0;
}

.fontaine {
  display: block;
  margin-left:auto;
  margin-right:auto;
  border-radius: 8px;
}

.intro {
	color:white;
	text-align:center;
}

.stem {
  text-align:center;
  color:white;
  font-family: 'palatino', serif;
	font-size: 75px;
}

.nav ul {
  list-style: none;
  text-align: center;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #2d4286;
  position: fixed;
  top: 0;
  width: 100%;
}

.nav li {
  display: inline-block;
}

.nav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 15px;
  text-decoration: none;
}

.nav li a:hover {
  background-color: #698ae8;
  transition: 0.4s;
}

.logo{
  display:block;
  margin-right:auto;
  margin-left:auto;
  height: 45px;
  width: 45px;
}
.ppp{
	color:white;
}
</style>
<body>
<div class="nav">  
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="./News.php">News</a></li>
  <li><img src="./Images/logo.webp" width="64px" height="64px" ></li>
  <li><a href="./Archon.php">Artworks</a></li>
  <li ><a href="./About.php">About</a></li>
  <li><a href="./guestbook.php">Update Me!</a></li>
</ul>
</div>

<div style="padding:20px;margin-top:30px;height:25px;">
<p>In this example, x, y, and z are variables.</p>

<p id="demo"></p>

<script>
var x = 5;
var y = 6;
var z = x + y;
document.getElementById("demo").innerHTML =
"The value of z is: " + z;
</script>
</div>

<div class="ppp">
<?php
echo phpversion();
?>
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 
<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>

<?php
$x = "John";
echo "Hello $x";
?>

<?php
$x = 10;  
$y = 6;

echo $x + $y;
?>  

</div>

<?php
if (5 > 3) {
  echo "Have a good day!";
}
?>

<?php  
$i = 1;

while ($i < 6) {
  echo $i;
  $i++;
} 
?>  
<?php
function myMessage() {
  echo "Hello world!";
}

myMessage();
?> 

<pre>

<?php
$cars = array("Volvo", "BMW", "Toyota"); 

var_dump($cars);
?>

</pre>
</body>
</html>
