<?php
    include('conexao.php');

    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $fone = $_POST['fone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];


    echo "<h1>Alteraração de dados</h1>";
    $sql = "UPDATE agenda  SET 
        nome='$nome',
        apelido= '$apelido',
        endereco='$endereco',
        bairro='$bairro',
        cidade='$cidade',
        estado='$estado',
        telefone='$fone',
        celular='$celular', 
        email='$email'
        WHERE id_agenda=$id_agenda";

    $result = mysqli_query($con,$sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados:". $msqli_erro($con)."!";
?>

<a href="listar_agenda.php">Voltar</a>