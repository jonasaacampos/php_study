<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<div class="container">
    <h1>Contato</h1>

    <form action="" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="seu nome" class="form-control">
        
        <label>Assunto:</label>
        <input type="text" name="assunto" placeholder="assunto" class="form-control">

        <label>Mensagem:</label>
        <textarea name="mensagem" placeholder="seu texto aqui..." class="form-control"></textarea>
        <br>
        
        <input type="button" value="Enviar" name="submit" class="btn btn-success">
    </form>


<?php

if(isset($_POST['submit'])){

    $nome = $_POST['nome'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    echo "Nome: $nome <br>";
    echo "Assunto: $assunto <br>";
    echo "Mensagem: $mensagem <br>";
}
?>

</div>

