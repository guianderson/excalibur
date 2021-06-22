<?php include 'header.php' ?>

<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Cadastrar Produtos</h1>
            </div>
        </div>
    </div>
</section>

<section>
		<!-- single product slide -->
		<div class="single-product-slider" style="padding-bottom: 100px; padding-top: 100px;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Cadastrar Produto</h1>
							<p></p>
						</div>
					</div>
				</div>

					<form action="cadastra_prod.php" method="POST" enctype="multipart/form-data">
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Nome Produto</label>
					    <input type="text" name="nome" class="form-control" required="Insira o nome do Produto" id="exampleFormControlInput1">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Descrição Produto</label>
					    <input type="text" name="descricao" class="form-control" required="Insira a Descrição do Produto" id="exampleFormControlInput1">
					  </div>
					  <div class="form-group">
					  	<div><label for="exampleFormControlInput1">Categoria Produto</label></div>
					    <select class="form-control" name="categoria" id="exampleFormControlSelect1">
					      <option value="geladeiras">Geladeiras</option>
					      <option value="lavadoras">Lavadoras</option>
					      <option value="secadoras">Secadoras</option>
					      <option value="tanquinhos">Tanquinhos</option>
					      <option value="microondas">Microondas</option>
					      <option value="ar_condicionado">Ar Condicionado</option>
					      <option value="filtro_de_agua">Filtro de Ar</option>
					      <option value="lava_loucas">Lava Louças</option>
					    </select>
					  </div>
					  <br><br>
					  <div class="form-group">
					   <label for="conteudo">Enviar imagem:</label>
					   <input type="file" name="pic" accept="image/*"> 
					   </div>   
					   <button type="submit" class="btn btn-primary">Enviar imagem</button>
					</form>
					  


					  
					</form>
			</div>
		</div>
</section>
<?php include 'footer.php' ?>