<?php
include('../conectarmysqli.php');

$consul= mysqli_query ($con,"insert into votos values (null ,'$_SESSION[id_votante]','$_GET[candidato]','$_GET[corporacion]',null)");
echo "<script>
document.location.href='index.html'
</script>"; 
?>