<html>
<body> 
    <table border=1>
        <tr> <th>Nom</th> <th>Moyenne</th> </tr> 
<?php
include("util.php");
foreach ($tab6 as $cle => $val)//$val:moyenne
{
     $c=moyenne($val);

 echo "<tr bgcolor=$c><td>$cle</td><td>$val</td></tr>\n" ;


}
?> 
</table> 
</body> 
</html>