<?php

    $firma = $_GET["firma"];
    $data = $_GET["data"];
    $numero = $_GET["numero"];
    $endereco = $_GET["endereco"];
    $complemento = $_GET["complemento"];
    $estado = $_GET["estado"];
    $cidade = $_GET["cidade"];
    $bairro = $_GET["bairro"];
    $cep = $_GET["cep"];
    $cnpj = $_GET["cnpj"];
    $inscricao = $_GET["inscricao"];
    $telefone = $_GET["telefone"];
    $celular = $_GET["celular"];
    $email = $_GET["email"];
    $observacao = $_GET["observacao"];

    if(empty($firma)){
        echo"<h1> O nome da Firma Deve Ser Informado</h1>";
    }
    elseif(empty($data)){
        echo"<h1> A Data Deve Ser Informado</h1>";
    }
    elseif(empty($numero)){
        echo"<h1> O Número Deve Ser Informado</h1>";
    }
    elseif(empty($complemento)){
        echo"<h1> O Complemento Deve Ser Informado</h1>";
    }
    elseif($estado == "Estado"){
        echo"<h1> O Estado Deve Ser Informado</h1>";
    }
    elseif(empty($cidade)){
        echo"<h1> A Cidade Deve Ser Informado</h1>";
    }
    elseif(empty($bairro)){
        echo"<h1> O Bairro Deve Ser Informado</h1>";
    }
    elseif(empty($cep)){
        echo"<h1> O CEP Deve Ser Informado</h1>";
    }
    elseif(empty($cnpj)){
        echo"<h1> O CNPJ Deve Ser Informado</h1>";
    }
    elseif(empty($inscricao)){
        echo"<h1> O Número de Inscrição Deve Ser Informado</h1>";
    }
    elseif(empty($telefone)){
        echo"<h1> Pelo Menos um Telefone Deve Ser Informado</h1>";
    }
    elseif(empty($email)){
        echo"<h1> O E-Mail Deve Ser Informado</h1>";
    }
    else{
        file_put_contents("dados.csv", "$firma,$data,$numero,$endereco,$complemento,$estado,$cidade,$bairro,$cep,$cnpj,$inscricao,$telefone,$celular,$email,$observacao\n", FILE_APPEND);
        echo"<h1> O Formulário Foi Enviado<h1>";
    }

?>