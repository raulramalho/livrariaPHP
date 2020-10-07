<!DOCTYPE html> 

<html lang="pt-br"> 

  <head> 

    <meta charset="utf-8">  

    <title>Minha Loja</title> 
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery livraria -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- JavaScript compilado-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.navbar( margin-bottom: 0;)
	</style>
  </head> 

  <body> 
		<!-- includes de conexao e CSS -->
		<?php 
			include 'navbar.php'; 
			include 'jumbotron.php';
			echo '</br>';
			include 'conexao.php'; 		
			$consulta = $cn->query('select nm_livro,vl_preco,ds_capa from vw_livro;');
			$exibe = $consulta->fetch(PDO::FETCH_ASSOC);
		 ?>
	
		<div class="container-fluid">			
			<div class="row">
				<?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){ ?>
				<div class="col-sm-3">				
					<img src="imagens/<?php echo $exibe['ds_capa'];?>.jpg" class="img-responsive" style="width:100%">
					<h4><b><?php echo mb_strimwidth($exibe['nm_livro'],0,30,'...');?></b></h4>
					<h5>R$ <?php echo number_format($exibe['vl_preco'],2,',','.');?></h5>			
				<div class="text-center">
				<button class="btn btn-lg btn-block btn-info">
					<span class="glyphicon glyphicon-info-sign"> Detalhes</span>
				</div>
				

				<div class="text-center" style="margin-top:5px; margin-bottom:5px;">
				<button class="btn btn-lg btn-block btn-danger">
					<span class="glyphicon glyphicon-usd"> Comprar</span>
				</div>
				
				
				</div>
				<?php echo '<br/>';}?>				
			</div>
		</div>
		
		<?php include 'rodape.html';?>	
  </body> 

</html> 