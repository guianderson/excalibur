<?php include 'header.php';
	  include 'conexao/conecta.php';
		$sql_verifica = "SELECT * FROM produto where categ_produto = '".$_GET['cat']."'";
	    $result=mysqli_query($conecta,$sql_verifica);
?>
	<section>
		<div class="single-product-slider" style="padding-top: 200px;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<?php 
								if ($_GET['cat'] == 'ar_condicionado') {
									$_GET['cat'] = 'Ar condicionado';
								}elseif ($_GET['cat'] == 'filtro_de_agua') {
									$_GET['cat'] = 'Filtro de Água';
								}elseif ($_GET['cat'] == 'lava_loucas') {
									$_GET['cat'] = 'Lava Louças';
								}
							?>
							<h1><?php echo(mb_convert_case($_GET['cat'], MB_CASE_TITLE, "UTF-8"));?></h1>
						</div>
					</div>
				</div>
				<div class="row">
					<?php				    
					    while($consulta=mysqli_fetch_array($result))
					    {
					    	echo "
					    		<div class='col-lg-3 col-md-6'>
									<div class='single-product'>
										<img class='img-fluid' src='".$consulta['img_produto']."' style='background: #1C6A8C'>
										<div class='product-details'>
											<center><h6>".$consulta['nome_produto']."</h6></center>
										</div>
									</div>
								</div>
					    	";
					    }
					?>   					
				</div>
			</div>
		</div>
	</section>

<?php include'footer.php'?>