<table width="50%">
<?php

require_once(conex.php)
    
$nado = mysqli_query($ligar, 'SELECT * FROM alunos');
while ($row = mysqli_fetch_assoc($nado)):
 <tr>
    <td> <?= $row['1'] ?> </td>
</tr>

?>
<?php endwhile; ?>
</table>

<!DOCTYPE html>
<html>
<head>
    <title>sWETTALERT</title>
</head>
<body>
    

</body>
</html>
