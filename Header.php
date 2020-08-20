<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/Style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<style type="text/css">
  
  nav{
    position: relative;
    margin: 0px auto 0;
    width: 100%;
    height: 50px;
    background-color: #34495e;
    font-size: 0;
    box-shadow: 0 2px 3px  0 rgb(0,0,0,.1);
  }
  
  nav a{
    font-size: 15px;
    text-transform: uppercase;
    color: white;
    text-decoration :none;
    line-height: 50px;
    position: relative;
    z-index: 1;
    display: inline-block;
    text-align: center;
    text-decoration: none;
  }
  nav .animation{
    position: absolute;
    height: 5px;
    bottom: 0;
    z-index: 0;
    background-color: #1abc9c;
    border-radius: 8px;
    transition: all 1s ease 0s;
  }
  a:nth-child(1)
  {
    width: 100px;
    text-decoration: none;
  }
  nav .start-home,a:nth-child(1):hover~.animation
 {  
  width: 100px;
  left: 850px;
 } 
 a:nth-child(2)
  {
    width: 100px;
    text-decoration: none;
  }
   nav .start-About,a:nth-child(2):hover~.animation
 {
  width: 100px;
  left: 950px;
 }
  a:nth-child(3)
  {
    width: 100px;
    text-decoration: none;
  }
  nav .start-Services,a:nth-child(3):hover~.animation
 {
  width: 100px;
  left: 1050px;
 }
  a:nth-child(4)
  {
    width: 100px;
    text-decoration: none;
  }
   nav .start-Contact,a:nth-child(4):hover~.animation
 {
  width: 100px;
  left: 1155px;
 }
  a:nth-child(5)
  {
    width: 100px;
    text-decoration: none;
  }
 nav .start-asd,a:nth-child(5):hover~.animation
 {
  width: 100px;
  left: 1250px;
 }
 nav a:hover
 {
  color: white;
 }
 .icons
 {
  background-color: black; 
  height: 40px;
 }
 .logoimg
 {
  
  margin-left: 100px
 }
</style>
</head>
<body>

<div class="icons">
  <div class="Icon">
 <i class="fab fa-facebook-f" style="color: white; font-weight: bold"></i>&nbsp
 <i class="fab fa-twitter" style="color: white; font-weight: bold"></i>&nbsp
 <i class="fab fa-google-plus-g" style="color: white; font-weight: bold"></i>	
 <i class="fas fa-phone-alt" style="color: white; float: right; margin-right: 100px">&nbsp +91-8169452591/ +91-8850078079</i></div>
</div>

<nav>
	<div class="inline">
	 <a href="Index.php"><img src="Images/poonim.jpg"  height="50px" width="500px" class="logoimg"></a>	
	</div>
	<div class="outline">
	<a href="https://app.infinityfree.net/accounts/epiz_26539689/domains/poonimhc.com">Home</a>
	<a href="https://app.infinityfree.net/accounts/epiz_26539689/domains/poonimhc.com/filemanager #About">About us</a>
	<a href="https://app.infinityfree.net/accounts/epiz_26539689/domains/poonimhc.com/filemanager #services">Services</a>
	<a href="Contact Us.php">Contact</a>
	<a href="#">asd</a>
	
	<div class="animation start-home"></div>
</div>
    
</nav>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
    	duration: 2500,
    });
  </script>
</body>
</html>