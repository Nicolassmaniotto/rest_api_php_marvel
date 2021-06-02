<?php
//criação da classe opget
class opGet{
    //variavei publicas
    public $position = "";
    public $limit = "";
    //
    //funcao que gera a posicao da url
    public function position($a){
        if($a !== 0 && $a !== ""){
            $position = "$a";
            return $position;
        }else{
            return "characters";
        }
    }
    // verifica se existe limite e se é derefente de 0
     public function limit($a){
        if($a !== 0 && $a !== ""){
            $limit = "&limit=$a";
            return $limit;
        }else{
            //caso nao exista ou seja igual a zero é retornado nulo
            return "";
        }
    }
    // verifica se existe offset e se é derefente de 0
    public function offset($a){
        if($a !== 0 && $a !== ""){
            $offset = "&offset=$a";
            return $offset;
        }else{
            //caso nao exista ou seja igual a zero é retornado nulo
            return "";
        }
    }


}

?>