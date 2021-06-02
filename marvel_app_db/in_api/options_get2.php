<?php

class opGet{
    public $position = "";
    public $limit = "";
    public function position($a){
        if($a !== 0 && $a !== ""){
            $position = "$a";
            return $position;
        }else{
            return "characters";
        }
    }
     public function limit($a){
        if($a !== 0 && $a !== ""){
            $limit = "&limit=$a";
            return $limit;
        }else{
            return "";
        }
    }
    public function offset($a){
        if($a !== 0 && $a !== "" && isset($a)){
            $offset = "&offset=$a";
            return $offset;
        }else{
            return "";
        }
    }
    public function get_url( $url )
    {
        $options = array(
    
            CURLOPT_RETURNTRANSFER => true,     //retorna a pagina
            CURLOPT_HEADER         => false,    //ignora o topo
            // CURLOPT_FOLLOWLOCATION => true,     // follow redirects
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
        );
    
        $ch      = curl_init( $url );
        curl_setopt_array( $ch, $options );
        $content = curl_exec( $ch );
        curl_close( $ch );
    
        return $content;
    }


}

?>