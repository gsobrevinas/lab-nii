<!doctype html>
<head>
    <title>The Steambird</title>    
<link rel="icon" type="image/icon" href="./Images/logo.webp" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    body{
        background-color:#698ae8;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
        margin: 0;
        padding: 0;
    }
    h1{
        color: white;
        text-align: center;
    }
    p{
        color: white;
        text-align: center;
    }
	.center{
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 50%;
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
</style>
<body>
<div class="nav">  <ul>
  <li><a href="./index.php">Home</a></li>
  <li><a href="./News.php">News</a></li>
  <li><img src="./Images/logo.webp" width="64px" height="64px" ></li>
  <li><a href="./Archon.php">Artworks</a></li>
  <li ><a href="./About.php">About</a></li>
</ul>
</div>
    <h1>Steambird's Latest!</h1>
    <p>You can find the latest news in Teyvat here!</p>
	<img src="./Images/steambird.png" alt="Steambird News" class="center">
</body>
</html>