<?php
    try{
      $connect = mysqli_connect("localhost","pedrospiet","","crud");
      
        $cod = $_POST['cod'];
        $modelo = $_POST['modelo'];
        $processador = $_POST['processador'];
        $valor = $_POST['valor'];
        $sistema = $_POST['sistema'];
        $tela = $_POST['tela'];
        $wifi = $_POST['wifi'];
        $qntd = $_POST['qntd'];
        $resolucao = $_POST['resolucao'];
        $flash = $_POST['flash'];
        $descricao = $_POST['descricao'];
          
        $query = "insert into tb_registro values (null,'$cod','$modelo','$processador','$valor','$sistema','$tela','$wifi','$qntd','$resolucao','$flash','$descricao')";
      
      mysqli_query($connect,$query);
      
      echo "Cadastrado com sucesso";
      
    }
    catch(exception $e){
        echo "Erro ao cadastrar".$e;
    }
    


?>
