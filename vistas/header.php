<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="umglogo.png">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery-3.2.1.min.js" ></script>
	<title>Comprobar Expresiones Regulares Online</title>
</head>
<body>
<div>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="index.php">ExpRg</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item ">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <!-- 
		      <li class="nav-item">
		        <a class="nav-link" href="subirArchivo.php">Cargar Archivo</a>
		      </li>
		      -->
		      <li class="nav-item">
		        <a class="nav-link " href="afd.php">AFD</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link " href="afnd.php">AFND</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link " href="automataDePila.php">Automata  De Pila</a>
		      </li>
		    </ul>
		  </div>
		</nav>
	</header>
</div>
<div class="jumbotron text-center">
  <h1 class="display-3">Expresiones Regulares Online</h1>
  <p class="lead">Este es un simple validador de cadenas, utilizando Expresiones Regulares</p>  
</div>
<?php // Desactivar toda notificación de error
error_reporting(0); ?>