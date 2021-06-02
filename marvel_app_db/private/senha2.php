<?php
//cria classe para as chaves
class keys{
    public function key(){
        //chave publica
        $public_key = "public key marvel" ;
        
        //chave privada
        $private_key = "private key marvel";
        
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