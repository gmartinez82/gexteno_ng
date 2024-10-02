<?php 
require_once "base/BPdeOvCosto.php"; 
class PdeOvCosto extends BPdeOvCosto
{
    
    /* Control de PrvProveedor */
    public function control(){
        $error = new DbError();	
        
        if(Ctrl::esNull($this->getInsInsumoId())){
            $error->addError(100, 'Insumo', 'ins_insumo_id');
        }
        if(Ctrl::esNull($this->getInsInsumoInstanciaId())){
            $error->addError(100, 'Instancia', 'ins_insumo_instancia_id');
        }else{
            if($this->getId() == ''){
                
                $pde_ov_centro_venta = $this->getPdeOvCentroVenta();
                $ins_insumo = $this->getInsInsumo();
                $ins_insumo_instancia = $this->getInsInsumoInstancia();
                
                $c = new Criterio();
                $c->add(PdeOvCosto::GEN_ATTR_PDE_OV_CENTRO_VENTA_ID, $pde_ov_centro_venta->getId(), Criterio::IGUAL);
                $c->add(PdeOvCosto::GEN_ATTR_INS_INSUMO_ID, $ins_insumo->getId(), Criterio::IGUAL);
                $c->add(PdeOvCosto::GEN_ATTR_INS_INSUMO_INSTANCIA_ID, $ins_insumo_instancia->getId(), Criterio::IGUAL);
                if(!Ctrl::esNull($this->getPdeOvVariableId())){
                    $c->add(PdeOvCosto::GEN_ATTR_PDE_OV_VARIABLE_ID, $this->getPdeOvVariableId(), Criterio::IGUAL);
                }else{
                    $c->add(PdeOvCosto::GEN_ATTR_PDE_OV_VARIABLE_ID, 'and true', Criterio::IS_NULL);
                }
                $c->addTabla(PdeOvCosto::GEN_TABLA);
                $c->setCriterios();
                $pde_ov_costos = PdeOvCosto::getPdeOvCostos(null, $c);
                if(count($pde_ov_costos) > 0){
                    $error->addError('Ya existe un COSTO para para 
                        CV: '.$pde_ov_centro_venta->getDescripcion().', 
                        Ins: '.$ins_insumo->getDescripcion().', 
                        Inst: '.$ins_insumo_instancia->getDescripcion().' por un costo de '.$pde_ov_costos[0]->getGralMoneda()->getSimbolo().' '.$pde_ov_costos[0]->getCosto(), 'Instancia', 'ins_insumo_instancia_id');
                }
            }            
        }
        if(Ctrl::esNull($this->getGralMonedaId())){
            $error->addError(100, 'Moneda', 'gral_moneda_id');
        }
        if(!Ctrl::esNumero($this->getCosto())){
            $error->addError('Debe ingresar un valor numerico', 'Costo', 'costo');
        }else{
            if($this->getCosto() == 0){
                $error->addError('Debe ingresar un valor mayor a cero', 'Costo', 'costo');
            }
        }
        
        return $error;
    }
    
}
?>