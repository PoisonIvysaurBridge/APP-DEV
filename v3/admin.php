<html>
<body>

<?php
session_start();
if ($_SESSION['usertype']!=102) 
       header("Location: http://".$_SERVER['HTTP_HOST'].  dirname($_SERVER['PHP_SELF'])."/index.php");
else{

echo "WELCOME ".$_SESSION["username"]."!";

require_once('../mysql_connect.php');
$query="select * from users order by usertype";
$result=mysqli_query($dbc,$query);

$last = 100;
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){

    if($last!=$row['usertype']){
        $last = $row['usertype'];

        echo '<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
        <tr>
        <td width="10%"><div align="center"><b>USER NAME
        </div></b></td>
        <td width="10%"><div align="center"><b>FULL NAME
        </div></b></td>
        <td width="5%"><div align="center"><b>ADDRESS
        </div></b></td>
        </tr>';
        echo "<h2>USER TYPE: {$row['usertype']}</h2>";
    }

    echo "<tr>
    <td width=\"10%\"><div align=\"center\">{$row['username']}
    </div></td>
    <td width=\"50%\"><div align=\"center\">{$row['fullname']}
    </div></td>
    <td width=\"10%\"><div align=\"center\">{$row['address']}
    </div></td>
    </tr>";
    
    }
    echo '</table>';

}

?>
<p><p>
Show dashboard of administrator, etc, here



</body>
</html>