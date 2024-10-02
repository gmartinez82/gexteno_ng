<?php

require_once "base/BVtaPresupuestoEnviado.php";

class VtaPresupuestoEnviado extends BVtaPresupuestoEnviado {

    const PRESUPUESTO_ENVIADO_CORRECTAMENTE = 'Enviado con exito.';

    public function setConfirmarVtaPresupuestoEnviado($estado = 1, $error = '') {
        $this->setEstado($estado);
        $this->setCodigoEnvio($error);
        $this->save();

        return $this;
    }

}

?>