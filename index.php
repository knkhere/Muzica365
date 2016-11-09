<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Home</title>
        
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow|Open+Sans:300" />
        <link rel="stylesheet" href="assets/css/styles.css" />
        <style>
        #impress p{
            background-color:rgba(211, 211, 211,0.5)
        }
        .login{
            z-index: 10;
            
        }
            body{
             background-color: none;   
            }
        </style>
    <link rel="stylesheet" type="text/css" href="design.css">
    <script type="text/javascript" src="menu.js"></script>     
    <script>
        function eventFire(el, etype){
  if (el.fireEvent) {
    el.fireEvent('on' + etype);
  } else {
    var evObj = document.createEvent('Events');
    evObj.initEvent(etype, true, false);
    el.dispatchEvent(evObj);
  }
   }
        </script>    
        
    </head>
    
    <body>
     
    <div class="menu" style="float:top; width: 100%; height:11%; margin-top:-100px; z-index:1000;">
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
        
<div class="login" style="margin-top:-100px; margin-left:30px; float:left; z-index:10000">
    
    <form action="login.php" method="post">    
    <table id="roundedcorners" >
	<tr>
        <th colspan="2">Log In</th>
    </tr>
	<tr>
    <td><h4>Username: </h4></td>
	<td><input class="lol" type="text" placeholder="Email-Id" name="username"></td>
	</tr>
	<tr>
	<td><h4>Password: </h4></td>
	<td><input class="lol" type="password"  placeholder="********" name="pwd"></td>
	</tr>	  
	<tr>    
	<td colspan="2"><input type="submit" value="Log In" class="button" style="width:100%;"></td>
	</tr>
    <tr></tr>    
    <tr>
    <td colspan="2"><a style="background:none;" href="registration.html">New User? Register Here.</a></td>    
    </tr>       
    </table>
    </form>
</div>

    <div id="impress" class="impress-not-supported" style="width:50%; float:right; height:80%" onmouseover="eventFire(document.getElementById('arrowRight'), 'click');">
			
			<div id="intro" class="step" data-x="0" data-y="0">
		        <h2>With Muzica listen to the Latest Music</h2>
		        <p> The latest music from trending sraight from the Top 250 Charts.<br> Get access to exclusive content.</p>
		        <img src="icons/1.jpg" width="450" height="450" />
		    </div>
		    
		    <div id="simplicity" class="step" data-x="1100" data-y="1200" data-scale="1.8" data-rotate="190">
		        <h2>Pop | Jazz | Rock</h2>
		        <p> Listen to and download hits from artists like Maroon 5, Coldplay, Adele, Icona Pop, Jason Derulo andmany others exclusively on our website. </p>
		      <img src="icons/2.jpg" width="450" height="450" />
		    </div>
		    
		    <div id="connect" class="step" data-x="-300" data-y="600" data-scale="0.2" data-rotate="270">
		        <h2 style="background-color:rgba(211, 211, 211,0.5)">Connect &amp; Share</h2>
		        <p>Real-life sharing is nuanced and rich. Muzica makes sharing music with friends and family just as easy at it is in person. </p>
		      <img src="icons/3.jpg" width="450" height="450" />
		    </div>
		    
		    <div id="upload" class="step" data-x="-200" data-y="1500" data-rotate="180">
		        <h2>Wish List</h2>
		        <p>Your music organizes itself in Wish List, which makes it much easier to share them with family and friends.</p>
		       <img src="icons/4.jpg" width="450" height="450" />
		    </div>
		    
		    <div id="music" class="step" data-x="-1200" data-y="1000" data-scale="0.8" data-rotate="270">
		        <h2>Jam on with Google Music</h2>
		        <p>Google Music makes discovery, purchase, and listening effortless and fun. Store your entire collection for free, and stream your music to your Galaxy Nexus, computer, or other Android devices.</p>
		       <img src="icons/5.jpg" width="450" height="450" />
		    </div>
		    
		</div>

		<a id="arrowLeft" class="arrow">&lt;</a>
		<a id="arrowRight" class="arrow">&gt;</a>

        <footer>
	        <h2>Copyright &copy 1995-2016. All Rights Reserved.</h2>
        </footer>
        
        <!-- JavaScript includes -->
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="assets/js/impress.js"></script>
		<script src="assets/js/script.js"></script>

    </body>
</html>

