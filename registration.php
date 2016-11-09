<html>
<head>
<title>Registration</title>
<!--<link rel="stylesheet" type="text/css" href="registration.css">-->
<style>
.menu{
    background-color: #4CAF50;
    padding: 0px;
    margin: 0px;
}
.menuright ul {
    list-style-type: none;
    overflow: hidden;
    background-color: #4CAF50;
}

.menuright li {
float:left;
}

.menuright li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.menuright a:hover {
    background-color: #4CAFFF;
}
    
.menuright div{
    position: absolute;
    visibility: hidden;
    background: white;
    border: 1px solid #4CAF50;
}

.menuright div a{
    position: relative;
    display: block;
    padding 5px 10px;
    width: auto;
    text-align: left;
    color: #4CAF50;
}

.menuright div a:hover{
    color:white;
}
    
#roundedcorners {
    border-radius: 25px;
    border: 2px solid none;
    padding: 20px; 
    width: 200px;
    height: 150px;    
    background-color: none;
    margin: 20px;
    white-space: nowrap;
    overflow: hidden; 
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
h4{
font-size: 18px;    
color: white;
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
h4{
display: block;
padding: 3px 10px;
}
td{
vertical-align: middle;
    color: #4CAF50;
}
body{
  font-family:sans-serif;
background-color: #4CAF50;    
}
.footer{
width: 100%;
height: 5%;
    
}    

#roundedcorners td h4{
    vertical-align: text-bottom;
}

#roundedcorners td{
    vertical-align: text-bottom;
}    
    
.message{
    color:white;
    horizontal-align:center;
    vertical-align:middle;
    padding:30p;
}
    
</style>

    
</head>    

<body>
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
   
<div class="message" >
    <p>holaaaaaaaaaaa</p>
    <?php
        $dbhost = 'localhost:3306';
        $dbuser = 'knk';
        $dbpass = 'SQL99galcm';
        $conn = mysql_connect($dbhost, $dbuser, $dbpass);
        if(! $conn )
        {
          die('Could not connect: ' . mysql_error());
        }
        echo 'Connected successfully. ';
        $usersname=(string) $_POST['usersname'];
        $userid=(string) $_POST['userid'];
        $email=(string) $_POST['email'];
        $pwd=(string) $_POST['pwd'];
        $gender=$_POST['gender'];
        if($gender=='male'){ $gender = (int)1;} else{ $gender = (int)0; }
        $dob=(string) $_POST['dob'];
        $address=(string) $_POST['address'];
        $zip=(integer)$_POST['zip'];
        
        $sql = "INSERT INTO world.user VALUES('$userid', '$pwd', '$usersname', '$email', $gender, '$dob', '$address', $zip);";
       // echo($sql.".");
      $retval = mysql_query( $sql, $conn );
        if(! $retval )
        {
          die('Could not execute query. ' . mysql_error());
        }
        echo "Query executed successfully. User created";
        echo"Welcome $usersname";
        mysql_close($conn);  
    ?>
</div>

<div class="footer">
    <center>
    <h5 style="color:white;">Copyright &copy; 1995-2016 Kanak Sharma. All Rights Reserved.</h5>
    </center>
</div>
    
</body>
</html>
