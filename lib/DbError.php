<?php
class DbError
{
    private $numero, $mensaje, $campo, $indice;
    private $errores = array();

    public function getNumero(){ return $this->numero; }
    public function setNumero($v){ $this->numero = $v; }

    public function getMensaje(){ return $this->mensaje; }
    public function setMensaje($v){ $this->mensaje = $v; }

    public function getCampo(){ return $this->campo; }
    public function setCampo($v){ $this->campo = $v; }

    public function getIndice(){ return $this->indice; }
    public function setIndice($v){ $this->indice = $v; }

    public function addError($v, $campo, $indice = false){
        $err = new DbError();
        $err->setNumero($v);
        $err->setMensaje($this->getErrorMsj($v));
        $err->setCampo($campo);
        $err->setIndice($indice);
        $this->errores[$indice] = $err;
    }

    public function addMensaje($v){
        $this->errores[] = $v;
    }
    public function getErrores(){ return $this->errores; }

    public function getErrorXIndice($indice){
        $v = $this->errores[$indice];
        if(!$v) $v = new DbError();
        return $v;
    }
    
    public function getExisteError(){
        $msjs = $this->errores;
        if(count($msjs) > 0) return true;
        return false;
    }

    public function getErrorMsj($v){
        $m = $v;
        switch($v){
            case 100: $m = "Debe ingresar valores"; break;
            case 101: $m = "Debe ingresar valores alfabeticos"; break;
            case 102: $m = "Debe ingresar valores numericos"; break;
            case 103: $m = "Debe ingresar valores alfanumericos"; break;
            case 104: $m = "Debe ingresar valores numericos enteros"; break;

            case 120: $m = "Debe ingresar un valor valido"; break;
            case 121: $m = "Debe ingresar una fecha valida"; break;
            case 122: $m = "Debe ingresar una hora valida"; break;
            case 123: $m = "Debe ingresar un email valido"; break;			

            case 140: $m = "El valor que cargo ya existe en el sistema"; break;
            case 141: $m = "Caracteres Invalidos - Ingrese numeros y letras unicamente"; break;

            case 150: $m = "La clave ingresada no concuerda con la actual"; break;
            case 151: $m = "Las claves nueva y repetida no son iguales"; break;

            case 155: $m = "La clave debe tener al menos 6 caracteres"; break;
            case 156: $m = "La clave no puede tener mas de 16 caracteres"; break;
            case 157: $m = "La clave debe tener al menos una letra minuscula"; break;
            case 158: $m = "La clave debe tener al menos una letra mayuscula"; break;
            case 159: $m = "La clave debe tener al menos un caracter numerico"; break;

        }
        return $m;
    }
}
?>