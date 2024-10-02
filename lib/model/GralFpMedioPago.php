<?php 
require_once "base/BGralFpMedioPago.php"; 
class GralFpMedioPago extends BGralFpMedioPago
{
    /* Control */
    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // descripcion
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getDescripcion())) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError(505, 'Descripcion', 'descripcion');
            } else {
                $o = self::getOxDescripcion($this->getDescripcion());
                if ($o && $o->getId() != $this->getId()) {
                    //$error->addError(140, 'Descripcion', 'descripcion');
                }
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }

        // ---------------------------------------------------------------------
        // forma de pago
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getGralFpFormaPagoId())) {
            $error->addError(100, 'GralFpFormaPago', 'gral_fp_forma_pago_id');
        }

        return $error;
    }    
}
?>