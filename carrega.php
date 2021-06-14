<?php

    ini_set('max_execution_time', 0);

    require 'conexao.php';
    $filename = 'C:\Projetos\ProjetoJava\teste_2\carregamento\1T2020.csv';

    if(file_exists($filename)){
        
        if( mysqli_query($conecta, "LOAD DATA INFILE '$filename' INTO TABLE 1T2020
        FIELDS TERMINATED BY ';'
        LINES TERMINATED BY '\n'
        IGNORE 1 ROWS")){
            echo "Carrgeamento com Sucesso";
        } else{
            echo "Falha no Carregamento";
        }
       

    }else{

        echo "Arquivo não encontrada!!";

    }

?>