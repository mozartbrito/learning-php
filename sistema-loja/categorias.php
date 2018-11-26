<?php
	//abaixo incluo o arquivo de conexão com o banco de dados
	require "includes/connection.php";
	include "layout/header.php"; 
	include "layout/menu.php"; 
?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Categorias</h1>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Categorias</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>ID</th>
				<th>Descrição</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Cat1</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Cat2</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Cat3</td>
			</tr>
		</table>
	</div>
</div>

<?php include "layout/footer.php"; ?>