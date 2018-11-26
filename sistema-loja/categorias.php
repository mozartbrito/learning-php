<?php
	//abaixo incluo o arquivo de conexão com o banco de dados
	require "includes/connection.php";

	$sql_categorias = "SELECT * FROM categoria;";
	$categorias = $conexao->query($sql_categorias);


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
		<div class="">
			<a href="nova-categoria.php" class="btn btn-primary">
				Nova categoria
			</a>
		</div>
		<p>&nbsp;</p>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>ID</th>
				<th>Descrição</th>
			</tr>

			<!-- linha de loop -->
			<?php while($categoria = $categorias->fetch_array(MYSQLI_ASSOC)) { ?>
				<tr>
					<td><?php echo $categoria['id']; ?></td>
					<td><?php echo $categoria['descricao']; ?></td>
				</tr>
			<?php } ?>
			<!-- fim da linha de loop -->
		</table>
	</div>
</div>

<?php include "layout/footer.php"; ?>