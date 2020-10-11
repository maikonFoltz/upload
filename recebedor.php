<?php
//aquivo responsavel por receber o arquivo captado da maquina do usuario e fazer os devidos tratamentos necessarios
$arquivo = $_FILES['arquivo'];

if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name'])== false){
    move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$arquivo['name']);

    echo "ta ooko";
}


?>



