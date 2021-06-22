<?php
include 'conexao/conecta.php';

$nome           = $_POST['nome'];
$descricao      = $_POST['descricao'];
$categoria      = $_POST['categoria'];

 if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = './produtos/'; //Diretório para uploads 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo("Imagen enviada com sucesso! <br>");
    
 }else{
    echo "imagem não encontrada";
 }


$sql = "INSERT INTO produto (nome_produto, desc_produto, categ_produto, img_produto)
VALUES ('".$nome."', '".$descricao."', '". $categoria."', '".$dir.$new_name."')";
   

if (mysqli_query($conecta, $sql)) {
      echo "<script>alert('Produto adicionado com sucesso'); window.location = './cadastro_prod.php';</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conecta);
}
mysqli_close($conecta);
?>    
