<?php

while($row = mysql_fetch_array($result))
{
    echo $row['FirstName'];
}

?>