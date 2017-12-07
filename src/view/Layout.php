<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"
	media="screen" />
<link href="css/pagina.css" rel="stylesheet" type="text/css"
	media="screen" />
<link
	href="https://fonts.googleapis.com/css?family=Montserrat+Alternates"
	rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat"
	rel="stylesheet">
<script type="text/javascript" src="js/jquery/jquery.js"></script>
<script type="text/javascript" src="js/jquery/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.metisMenu.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/knockout.js"></script>
<title>4º Encontro Nacional dos Gestores de Treinamento da Indústria
	Farmacêutica</title>
</head>
<body
	style="background: url('img/Background.png'); background-repeat: no-repeat; background-size: 100% 800px;">
<?php
$controller = $this->page->getController ();

if ($controller == "Participante") {
	$dataFinal = new DateTime ();
	$dataFinal->setTime ( 23, 59 );
	$dataFinal->setDate ( 2017, 11, 29 );
	$dataAtual = new DateTime ();
	if ($dataAtual > $dataFinal) {
		include "participante/bloqueio.php";
	} else {
		include $this->page->getCorpo ();
	}
} else {
	include $this->page->getCorpo ();
}

?>

</body>
</html>
















