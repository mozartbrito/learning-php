<?php 
	$nome = $_POST['login'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="contaner">
	<p>&nbsp;</p>
<!-- 	<p>&nbsp;</p> -->
	<div class="row">
		<div class="col"></div>
		<div class="col">

			<div class="card shadow p-3 mb-5 bg-white rounded">
				<div class="card-body">
					<h3 class="text-center">Bem-vindo <?php echo strtoupper($nome); ?></h3>
				</div>
			</div>
		</div>
		<div class="col"></div>
	</div>

</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>