<html>
<body> 
    <table border=1>
        <tr> <th>Nom</th> <th>Moyenne</th> </tr> 
<?php
function moyenne ($val)
{
  $c='red';
  if($val>=10)
  $c='green';
return $c;
}
$tab6 = array('Salwa' => 12 ,
'Olfa' => 8 ,
'Hanen' => 12.5 );
foreach ($tab6 as $cle => $val)//$val:moyenne
{
     $c=moyenne($val);

 echo "<tr bgcolor=$c><td>$cle</td><td>$val</td></tr>\n" ;


}
?> 
</table> 
</body> 
</html>