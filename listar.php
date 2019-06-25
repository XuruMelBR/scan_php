<?php
    
 
   
   try{
       $conexao = mysqli_connect("localhost", "pedrospiet","","crud");
        //Variavel de conexão        //Conecta no banco              //Servidor,  Usuario, Banco de dados
      

      $query ="SELECT * FROM tb_registro"; 
      
      $resultado = mysqli_query($conexao,$query);
          
        mysqli_query($conexao,$query);
        
        $registro = array(   
            'celulares' => array() 
            );
            
        $i = 0;
        
        while($linha = mysqli_fetch_assoc($resultado)){ 
            $registro['celulares'][$i] = array( 
                'codigo' => $linha['cd_cadastro'],    
                'nome' => $linha['nm_modelo'],      
                'processador' => $linha['nm_processador'],
                'valor' => $linha ['vl_valor'],
                'sistema' => $linha ['ds_sistema'],
                'tela' => $linha ['ds_tela'],
                'wifi' => $linha ['ds_wifi'],
                'qntd' => $linha ['ds_qntd'],
                'resolucao' => $linha ['ds_resolucao'],
                'flash' => $linha ['ds_flash'],
                'descricao' => $linha ['ds_descricao'],
                
                );
                $i++;   // contador
        }
            
            echo json_encode($registro);        // json do registro
            
    
        

       
   }catch(Exception $e){
       echo "Erro ao conectar".$e;
   }
        
            // Try Catch seria tipo um if else, TENTE, se não der exibirá os parametros do CATCH

?>