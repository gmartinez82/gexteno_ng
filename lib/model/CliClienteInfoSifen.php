<?php 
require_once "base/BCliClienteInfoSifen.php"; 
class CliClienteInfoSifen extends BCliClienteInfoSifen
{
    
    /**
     * 
     */
    public function getDescripcion(){
        $texto = "";
        
        $xContRUC_dRUCCons = $this->getSifenXcontrucDruccons();
        $xContRUC_dRazCons = $this->getSifenXcontrucDrazcons();
        $xContRUC_dCodEstCons = $this->getSifenXcontrucDcodestcons();
        $xContRUC_dDesEstCons = $this->getSifenXcontrucDdesestcons();
        $xContRUC_dRUCFactElec = $this->getSifenXcontrucDrucfactelec();
        
        if($this->getCodigo() == -2){
            $texto = 'Sin Respuesta de SIFEN con el RUC indicado';
        }elseif($this->getCodigo() == -1){
            $texto = 'RUC '.$ruc_numero.' No Existe en SIFEN';
        }else{
            if($this->getSifenXcontrucDcodestcons() == 'ACT'){
                $texto = $xContRUC_dDesEstCons.' - RUC '.$xContRUC_dRUCCons.' - '.$xContRUC_dRazCons;
            }else{
                $texto = $xContRUC_dDesEstCons.' - '.$xContRUC_dRUCCons.' - '.$xContRUC_dRazCons;
            }
        }
        
        return $texto;
    }    
    
    /**
     * 
     */
    public function getColor(){
        $color = "#cccccc";
        
        if($this->getCodigo() == -2){
            $color = "gray";
        }elseif($this->getCodigo() == -1){
            $color = "#cc0000";
        }else{
            if($this->getSifenXcontrucDcodestcons() == 'ACT'){
                $color = "#01850a";
            }elseif($this->getSifenXcontrucDcodestcons() == 'CAN'){
                $color = "#b83202";
            }else{
                $color = "#b83202";
            }
        }
        
        return $color;
    }
    
    /**
     * 
     */
    static function getTipoEstadosCmb(){
        $cli_cliente_info_sifens = CliClienteInfoSifen::getCliClienteInfoSifens();
        foreach($cli_cliente_info_sifens as $cli_cliente_info_sifen){
            if(trim($cli_cliente_info_sifen->getSifenXcontrucDdesestcons()) != ''){
                $arr_tipo_estado_sifens[$cli_cliente_info_sifen->getSifenXcontrucDcodestcons()] = $cli_cliente_info_sifen->getSifenXcontrucDdesestcons();
            }
        }
        //Gral::prr($arr_tipo_estado_sifen);
                
        foreach($arr_tipo_estado_sifens as $cod => $descripcion){
            $cont++;
            $arr[$cont]['cod'] = $cod;
            $arr[$cont]['descripcion'] = $descripcion;
        }
        
        $cont++;
        $arr[$cont]['cod'] = 'SIFEN-SIN-RESPUESTA';
        $arr[$cont]['descripcion'] = 'ERROR - Sin Respuestas de SIFEN';

        $cont++;
        $arr[$cont]['cod'] = 'SIFEN-RUC-NO-EXISTE';
        $arr[$cont]['descripcion'] = 'ERROR - RUC No Existe en SIFEN';
        
        return $arr;
    }
}
?>