<?php 
require_once "base/BCntbDiarioAsiento.php"; 
class CntbDiarioAsiento extends BCntbDiarioAsiento
{
    /**
     * Metodo que calcula el importe total del DEBE del asiento
     * Autor: Pablo Rosen
     * Fecha: 12/05/2018 15:50
     * @return type
     */
    public function getImporteDebeTotal(){
        $importe = 0;
        
        $cntb_diario_asiento_cuentas = $this->getCntbDiarioAsientoCuentasDebe();
        foreach($cntb_diario_asiento_cuentas as $cntb_diario_asiento_cuenta){
            $importe+= $cntb_diario_asiento_cuenta->getImporteDebe();
        }
        
        return $importe;
    }
    
    /**
     * Metodo que calcula el importe total del HABER del asiento
     * Autor: Pablo Rosen
     * Fecha: 12/05/2018 15:50
     * @return type
     */
    public function getImporteHaberTotal(){
        $importe = 0;
        
        $cntb_diario_asiento_cuentas = $this->getCntbDiarioAsientoCuentasHaber();
        foreach($cntb_diario_asiento_cuentas as $cntb_diario_asiento_cuenta){
            $importe+= $cntb_diario_asiento_cuenta->getImporteHaber();
        }
        
        return $importe;        
    }
    
    /**
     * Metodo que retorna todas las cuentas del DEBE del asiento
     * Autor: Pablo Rosen
     * Fecha: 12/05/2018 15:50
     * @return type
     */
    public function getCntbDiarioAsientoCuentasDebe(){
        $cntb_diario_asiento_cuentas_debe = array();
        
        $cntb_diario_asiento_cuentas = $this->getCntbDiarioAsientoCuentas();
        foreach($cntb_diario_asiento_cuentas as $cntb_diario_asiento_cuenta){
            $cntb_tipo_saldo = $cntb_diario_asiento_cuenta->getCntbTipoSaldo();
            
            if($cntb_tipo_saldo->getCodigo() == CntbTipoSaldo::TIPO_DEUDOR){
                $cntb_diario_asiento_cuentas_debe[] = $cntb_diario_asiento_cuenta;
            }
        }
        return $cntb_diario_asiento_cuentas_debe;
    }

    /**
     * Metodo que retorna todas las cuentas del HABER del asiento
     * Autor: Pablo Rosen
     * Fecha: 12/05/2018 15:50
     * @return type
     */
    public function getCntbDiarioAsientoCuentasHaber(){
        $cntb_diario_asiento_cuentas_haber = array();
        
        $cntb_diario_asiento_cuentas = $this->getCntbDiarioAsientoCuentas();
        foreach($cntb_diario_asiento_cuentas as $cntb_diario_asiento_cuenta){
            $cntb_tipo_saldo = $cntb_diario_asiento_cuenta->getCntbTipoSaldo();
            
            if($cntb_tipo_saldo->getCodigo() == CntbTipoSaldo::TIPO_ACREEDOR){
                $cntb_diario_asiento_cuentas_haber[] = $cntb_diario_asiento_cuenta;
            }
        }
        return $cntb_diario_asiento_cuentas_haber;
    }
    
}
?>