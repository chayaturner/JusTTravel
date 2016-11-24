<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Just Travel</title>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" type="text/css">
<style class="cp-pen-styles">
body {
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: "Roboto";
  font-size: 14px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

nav {
  width:500px;
  margin: 30px auto;
}

nav ul {
  background: #2ecc71;
  list-style: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  position: relative;
  display: inline-block;
  margin-right: -4px;
  text-align: center;
}

nav ul li:first-child a {
  background: #27ae60;
  width: 49px;
  padding: 15px 0;
}

nav ul li:last-child { margin: 0; }

nav ul li a {
  display: block;
  background: #2ecc71;
  padding: 15px 20px;
  color: #fff;
  font-size: 14px;
  text-decoration: none;
  transition: 0.2s linear;
}

nav ul li a:hover { background: #27ae60; }

nav ul li ul {
  position: absolute;
  top: 100%;
  left: 0;
  width: 240px;
  border-bottom: 4px solid #2ecc71;
}

nav ul li ul li {
  display: block;
  width: 100%;
  margin: 0;
  text-align: left;
}

nav ul li ul li a {
  display: block;
  background: #2c3e50;
  padding: 10px 15px;
}

nav ul li ul li a:first-child {
  background: #2c3e50;
  width: auto;
  border-left: 4px solid transparent;
  padding: 10px 15px;
  font-size: 14px;
}

nav ul li ul li a:hover {
  background: #34495e;
  border-left: 4px solid #2ecc71;
}
</style>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
</head>

<body>

<nav class='animated flipInX'>
  <ul>
      <li> <a href='index.php'>
      <div class='fa fa-home'></div>
      </a> </li>
    <li class='sub-menu'> <a href='#'> Activities <i class='fa fa-angle-down'></i> </a>
      <ul>
        <li> <a href='searchActivities.php'> Activities </a> </li>
        <li> <a href='addActivity.php'> Add Activities </a> </li>
        <li> <a href='myActivities.php'> My Activities </a> </li>
      </ul>
    </li>
    <li class='sub-menu'> <a href='#'> More <i class='fa fa-angle-down'></i> </a>
      <ul>
        <li> <a href='aboutUs.php'> About Us </a> </li>
        <li> <a href='contactus.php'> Contact Us </a> </li>
      </ul>
    </li>
  </ul>
</nav>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>
$('.sub-menu ul').hide();
$(".sub-menu a").click(function () {
  $(this).parent(".sub-menu").children("ul").slideToggle("200");
  $(this).find("i.fa").toggleClass("fa-angle-up fa-angle-down");
});
</script>
</body>
</html>
