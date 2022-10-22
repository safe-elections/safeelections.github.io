<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Estamentos estudiantiles</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php 
include('../conectarmysqli.php');
?>
	<div class="escudo"><img src="escudo.png"></div>
	<p class="ins">Institución Educativa Técnica Rafael Gutiérrez Girardot<br>"En armonía con la naturaleza".</p>
	<h1>ELECCIONES DE REPRESENTANTES A LOS PRINCIPALES ENTES DEL GOBIERNO ESCOLAR</h1>
	<h3 class="">Hola <span style="color: black;"><?php echo $_SESSION['nombre'] ?></span> elige la corporación</h3>
	<div class="titulos">
		<div class="img1"><h2>PERSONERÍA PRIMARIA</h2> <br> 
		<?php $count_query   = mysqli_query($con,"SELECT id_votante FROM votos where id_votante='$_SESSION[id_votante]' and corporacion='Personeria Primaria'");
		if ($row= mysqli_fetch_array($count_query)){ ?>
		<img id="ft" src="ya.png">
		<?php }else{ ?>
		<a href="../tarjetones prim/"><img id="ft" src="img1.png"></a>
		<?php } ?>	
		</div>
		<div class="img1"><h2>PERSONERÍA BACHILLERATO</h2> <br>
		<?php $count_query   = mysqli_query($con,"SELECT id_votante FROM votos where id_votante='$_SESSION[id_votante]' and corporacion='Personeria Bachillerato'");
		if ($row= mysqli_fetch_array($count_query)){ ?>
		<img id="ft" src="ya.png">
		<?php }else{ ?>
		<a href="../tarjetones bach/"><img id="ft" src="img1.png"></a>
		<?php } ?>	
		</div>
		<div class="img1"><h2>CONTRALORÍA</h2><br>
		<?php $count_query   = mysqli_query($con,"SELECT id_votante FROM votos where id_votante='$_SESSION[id_votante]' and corporacion='Contraloria'");
		if ($row= mysqli_fetch_array($count_query)){ ?>
		<img id="ft" src="ya.png">
		<?php }else{ ?>
		<a href="../tarjetones cont/"><img id="ft" src="img1.png"></a>
		<?php } ?>
	</div>
	</div>
<div style="text-align: center;">
 <h3><a href="../INICIO/">Salir</a> </h3>
</div>
	


</body>
</html>