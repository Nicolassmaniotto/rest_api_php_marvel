<?php
//cria classe para as chaves
class keys{
    public function key(){
        //chave publica
        $public_key = "bce7b1e856554ab646ff3497dfed63bf" ;
        
        //chave privada
        $private_key = "2a3fc59492db34bc5f6ce9813da14be6e463924a";
        
        //escolhe um numero aleatorio
        $ts = random_int(4,999);

        //concatena as strings
        $all_key = $ts.$private_key.$public_key;

        //remove espaços em branco
        $all_sem_espaco = trim ( $all_key," ");

        //gera chave hash
        $hashmd5_sem_espaco = md5($all_sem_espaco);

        //concatena e nomeia as strings
        $connect = "ts=$ts&apikey=$public_key&hash=$hashmd5_sem_espaco";

        // retorna a autenticação
        return $connect;

    }

}

?>