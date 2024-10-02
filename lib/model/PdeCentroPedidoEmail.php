<?php 
require_once "base/BPdeCentroPedidoEmail.php"; 
class PdeCentroPedidoEmail extends BPdeCentroPedidoEmail
{
    /* Control de PrvProveedor */
    public function control(){
        $error = new DbError();	
        
        if(!Ctrl::esVacio($this->getDescripcion())){
            if(Ctrl::esMaxCaracteres(100, $this->getDescripcion())){
                $error->addError(505, 'Descripcion', 'descripcion');
            }else{
                if(!Ctrl::esEmail($this->getDescripcion())){
                    $error->addError('No es un formato de email correcto', 'Email', 'descripcion');
                }
            }
        }else{
            $error->addError(100, 'Descripcion', 'descripcion');
        }
        
        
        
        return $error;
    }
}
?>