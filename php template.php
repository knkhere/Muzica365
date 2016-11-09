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
    <img src="icons/bookIcon.png" width="50px" height="50px" style="float:left;">
    <h2 style="float:left;">Muzica</h2>
    </a>
    </div>
    <div class="menuright" style="float:left;">
    <ul> 
        <li><a href="homepage.html" onmouseover="mOpen('m1')" onmouseout="mCloseTime()">Home</a>
            <div id="m1" onmouseover="mCancelCloseTime()" onmouseout="mCloseTime()">
                <a href="#">About Us</a>
                <a href="#">Mission</a>
                <a href="#">Vision</a>
                <a href="#">Contact Us</a>
            </div>            
        </li>
        <li><a href="catalogue.html" onmouseover="mOpen('m2')" onmouseout="mCloseTime()">Catalogue</a>
            <div id="m2" onmouseover="mCancelCloseTime()" onmouseout="mCloseTime()">
                <a href="#">About Us</a>
                <a href="#">Mission</a>
                <a href="#">Vision</a>
                <a href="#">Contact Us</a>
            </div>             
        </li>
        <li><a href="registration.html" onmouseover="mOpen('m3')" onmouseout="mCloseTime()">Register</a>
            <div id="m3" onmouseover="mCancelCloseTime()" onmouseout="mCloseTime()">
                <a href="#">About Us</a>
                <a href="#">Mission</a>
                <a href="#">Vision</a>
                <a href="#">Contact Us</a>
            </div>            
        </li>
        <li><a href="userpro.html" onmouseover="mOpen('m4')" onmouseout="mCloseTime()">Profile</a>
            <div id="m4" onmouseover="mCancelCloseTime()" onmouseout="mCloseTime()">
                <a href="#">About Us</a>
                <a href="#">Mission</a>
                <a href="#">Vision</a>
                <a href="#">Contact Us</a>
            </div>            
        </li>
        <li><a href="shoppingcart.html" onmouseover="mOpen('m5')" onmouseout="mCloseTime()">Shopping Cart</a>
            <div id="m5" onmouseover="mCancelCloseTime()" onmouseout="mCloseTime()">
                <a href="#">About Us</a>
                <a href="#">Mission</a>
                <a href="#">Vision</a>
                <a href="#">Contact Us</a>
            </div>            
        </li>
        <li><a href="payment.html">Payment</a></li>
    </ul>   
    </div>    
</div>    
   
<div class="message" >
    <?php
        $dbhost = 'localhost:3306';
        $dbuser = 'knk';
        $dbpass = 'SQL99galcm';
        $conn = mysql_connect($dbhost, $dbuser, $dbpass);
        if(! $conn )
        {
          die('Could not connect: ' . mysql_error());
        }
        echo 'Connected successfully<br />';
        $sql = '';
        $retval = mysql_query( $sql, $conn );
        if(! $retval )
        {
          die('Could not execute query' . mysql_error());
        }
        echo "Query executed\n";
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
