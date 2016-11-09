<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"></head>
<body>
<?php
$username= $_POST['username'];
$pwd= $_POST['pwd'];

if($username && $pwd){
    $db = mysql_connect("localhost", "knk", "SQL99galcm") or die("Error!");
    mysql_select_db("world",$db) or die("Error in db");
    $query = mysql_query("SELECT * from user WHERE UserID='$username' AND Pwd='$pwd'");
    $numrows = mysql_num_rows($query);
    if($numrows!=0){
        echo("<h2--><a href="file:///C:/xampp/htdocs/KNK/userpro.html">Welcome $username. Go to profile</a>");
    //code to login
    /*    while($row = mysql_fetch_row($query))
        {
            $dbusername = $row["UserID"];            
            $dbpwd = $row["Pwd"];            
        }
            if($username=$dbusername &amp;&amp; $pwd=$dbpwd)
            {    
                echo("Welcome '$username'");
            }
            else
                echo("Incorrect password");  */
        }
    else 
    {   echo("New User. Register Here!"); }
}
else
{
    echo("Please type a username and password");   
}

?>
    
</body></html>