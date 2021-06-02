<?php
class verifica{
    function le_posicao(){

        $file = fopen("status.txt","a+") or die("5556");
        $le = file_get_contents("status.txt");
        return $le;
        
    }
    function grava_posicao($a){
        $file=fopen("status.txt", "w+") or die("Unable to open file!");
        $state = $a;
    
        fwrite($file, $state);
        fclose($file);
    
        echo ($state);
    }

}


?>