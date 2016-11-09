<html>

<head>
<title>Book Catalogue</title>
<link rel="stylesheet" type="text/css" href="design.css">    
<style>
.menu{
    background-color: #4CAF50;
    padding: 0px;
    margin: 0px;
    border-radius: 15px;
}
ul {
    list-style-type: none;
    overflow: hidden;
    background-color: #4CAF50;
}

.menu li {
float:left;
}

.menu li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

a:hover {
    background-color: #4CAFFF;
}

h2{
 color:white;   
}
.menuleft:hover{
   background-color: #4CAFFF; 
    
}
.menuleft{
 padding:0px 5px;   
}

body{
font-family:sans-serif;
background-color: #4CAF50;
}       
.button {
    background-color: white;
    color: #4CAF50;
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-right: 0px;
    border-radius: 55px;
}        

.required-tracking li a{
    display: flex;
    color: white;
    text-align:justify;
    padding:16px;
    text-decoration: none;
    font-weight: 500;
}
.button:hover{
    background-color:  #4CAFFF;
    color:white;
}

.quotes{
    box-shadow: -10px 10px 5px rgba(0, 0, 0,0.5);
    margin: 20px; 
    transition: transform 1.3s;
}
.quotes:hover
{
        transform: scale(1.05);
}
        
.footer{
width: 100%;
height: 5%;    
}

.scrollable li a:hover{
  box-shadow: -10px 10px 5px rgba(0, 0, 0,0.5);  
}
       
</style>
    
<script>    
</script>    
    
</head>

<body bgcolor="#4CAF50">

    <div class="menu" style="float:top; width: 100%; height:11%;">
    <div class="menuleft" style="float:left;">
    <a href="registration.html" class="logo">
    <img src="icons/musikIcon.png" width="50px" height="50px" style="float:left;">
    <h2 style="float:left;"> Muzica</h2>
    </a>
    </div>
    <div class="menuright" style="float:left;">
    <ul> 
        <li><a href="index.php" onmouseover="mOpen('m1')" onmouseout="mCloseTime()">Home</a>
            <div id="m1" onmouseover="mCancelCloseTime()" onmouseout="mCloseTime()">
                <a href="#">About Us</a>
                <a href="#">Mission</a>
                <a href="#">Vision</a>
                <a href="#">Contact Us</a>
            </div>            
        </li>
        <li><a href="userpro.html" onmouseover="mOpen('m4')" onmouseout="mCloseTime()">Profile</a>
            <div id="m4" onmouseover="mCancelCloseTime()" onmouseout="mCloseTime()">
                <a href="#">My Profile</a>
                <a href="#">Previous Purchases</a>
                <a href="#">Edit Profile</a>
            </div>            
        </li>
        <li><a href="catalogue.php" onmouseover="mOpen('m2')" onmouseout="mCloseTime()">Catalogue</a>
            <div id="m2" onmouseover="mCancelCloseTime()" onmouseout="mCloseTime()">
                <a href="#">Genres</a>
                <a href="#">Music</a>
            </div>             
        </li>
        <li><a href="registration.html" onmouseover="mOpen('m3')" onmouseout="mCloseTime()">Register</a>
            <div id="m3" onmouseover="mCancelCloseTime()" onmouseout="mCloseTime()">
                <a href="#">Register</a>
                <a href="#">Login</a>
            </div>            
        </li>
        <li><a href="musicstore.html" onmouseover="mOpen('m6')" onmouseout="mCloseTime()">Music</a>
            <div id="m6" onmouseover="mCancelCloseTime()" onmouseout="mCloseTime()">
                <a href="#">Songs</a>
                <a href="#">Albums</a>
                <a href="#">Artists</a>
                <a href="#">Genres</a>
            </div>            
        </li>
        <li><a href="shoppingcart.html">Shopping Cart</a>  <!-- onmouseover="mOpen('m5')" onmouseout="mCloseTime()" -->
            </div>       
        </li>
        
    </ul>   
    </div>    
    
<div class="full" style="float:left;display:inline;">
<div class="scrollable menu-content" style="float:left; width:30%;">    
		<ul class="required-tracking" data-tracking-id="clp_books_clp/CategoryList_0-1_catergorylinks" >
			<li> <a class="link-text" href="musicstore.html"> Blues </a></li>
			<li> <a class="link-text" href="musicstore.html">Country</a></li>
			<li> <a class="link-text" href="musicstore.html"> Electronic</a></li>
			<li> <a class="link-text" href="musicstore.html"> EDM </a></li>
			<li> <a class="link-text" href="musicstore.html"> Folk </a></li>
			<li> <a class="link-text" href="musicstore.html"> Hip Hop</a></li>
			<li> <a class="link-text" href="musicstore.html">Jazz </a></li>
			<li> <a class="link-text" href="musicstore.html">Latin</a></li>
			<li> <a class="link-text" href="musicstore.html">Pop</a></li>
			<li> <a class="link-text" href="musicstore.html"> R &amp; B</a></li>
			<li> <a class="link-text" href="musicstore.html"> Rock </a></li>
			<li> <a class="link-text" href="musicstore.html"> Soul </a></li>
			<li> <a class="link-text" href="musicstore.html"> School Pop </a></li>
			<li> <a class="link-text" href="musicstore.html"> K pop </a></li>
			<li> <a class="link-text" href="musicstore.html"> J pop </a></li>
			<li> <a class="link-text" href="musicstore.html"> Covers </a></li>
			<li> <a class="link-text" href="musicstore.html"> Classic </a></li>
			<li> <a class="link-text" href="musicstore.html"> Old School Rap </a></li>
			<li> <a class="link-text" href="musicstore.html"> Soundtrack </a></li>
			<li> <a class="link-text" href="musicstore.html"> Bollywood </a></li>
			<li> <a class="link-text" href="musicstore.html"> Melody </a></li>
			<li> <a class="link-text" href="musicstore.html"> Metal </a></li>
			<li> <a class="link-text" href="musicstore.html"> Humor </a></li>
			<li> <a class="link-text" href="musicstore.html"> Audio Clips </a></li>
			<li> <a class="link-text" href="musicstore.html"> Black Metal </a></li>
			<li> <a class="link-text" href="musicstore.html"> Death Metal </a></li>
			<li> <a class="link-text" href="musicstore.html"> Heavy Metal </a></li>
			<li> <a class="link-text" href="musicstore.html"> Audiobooks </a></li>
			<li> <a class="link-text" href="musicstore.html"> Travel Music </a></li>
			<li> <a class="link-text" style="margin-bottom:20px;"> All Categories </a></li>
		</ul>
	</div>    

<div class="sideimage" style="float:right; width:69%;height:70%; ">     
<img src="icons/Quotefancy-11563-3840x2160.jpg" class="quotes" width="96%" height="100%">
<img src="icons/Quotefancy-28149-3840x2160.jpg" class="quotes" width="96%" height="100%">
<img src="icons/Quotefancy-4739-3840x2160.jpg" class="quotes" width="96%" height="100%">
<center>
    <form method="post" action="shoppingcart.html">   
    <input class="button" type="submit" value="Proceed">
</form>    
</center>
<div class="footer">
    <center>
    <h5 style="color:white;">Copyright &copy; 1995-2016 Kanak Sharma. All Rights Reserved.</h5>
    </center>
</div>    
</body>
</html>



