<?php 
    $categorias = [];

    $categorias[] = 'infantil';
    $categorias[] = 'adolescentes';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';
    //print_r($categorias)
    
   

 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    var_dump($nome);
    var_dump($idade);

   /*if($idade>= 6 && $idade <= 12){
       
        for($i = 0; $i <= count($categorias); $i++){
            if($categorias[$i] == 'infantil'){
                echo "Nadador $nome compete na categoria ", $categorias[$i];
            }
        }
    } else if($idade >12 && $idade <18){

        for($i = 0; $i <= count($categorias); $i++){
            if($categorias[$i] == 'adolescentes'){
                echo " Nadador $nome compete na categoria adolescente";
            }
        }
    } else{

        for($i = 0; $i <= count($categorias); $i++){
                if($categorias[$i] == 'adulto'){
               echo "Nadador $nome compete na categoria adulto.";
           }
       }
    }*/
?>