<?php 
require_once "base/BCtrlEquipo.php"; 
class CtrlEquipo extends BCtrlEquipo
{
    /**
     * 
     * @return \DbError
     * @creado_por Esteban Martinez
     * @creado 23/11/2016
     */
    public function control()
    {
        $error = new DbError();
        
        if(!Ctrl::esVacio($this->getDescripcion()))
        {
            if(Ctrl::esMaxCaracteres(100, $this->getDescripcion())){
                $error->addError(505, "Descripcion", "descripcion");
            }
            else
            {
                $o = self::getOxDescripcion(trim($this->getDescripcion()));
                if($o && trim($o->getDescripcion()) == trim($this->getDescripcion()))
                {
                    if($o && $o->getId() != $this->getId())
                    {
                        $error->addError("La descripcion ya se encuentra cargada", "Descripcion", "descripcion");
                    }
                }
            }
        }
        else{
            $error->addError(100, "Descripcion", "descripcion");
        }
        
        
        if(!Ctrl::esVacio($this->getCodigo()))
        {
            if(Ctrl::esMaxCaracteres(100, $this->getCodigo())){
                $error->addError(505, "Codigo", "codigo");
            }
            else
            {
                $o = self::getOxCodigo(trim($this->getCodigo()));
                if($o && trim($o->getCodigo()) == trim($this->getCodigo()))
                {
                    if($o && $o->getId() != $this->getId())
                    {
                        $error->addError("El Codigo ya se encuentra cargado", "Codigo", "codigo");
                    }
                }
            }
        }
        else
        {
            //$error->addError(100, "Codigo", "codigo");
        }
        
        
        return $error;
    }
    
    
    /**
     * @creado_por Pablo Rosen
     * @creado 19/11/2016
     */
    public function saveDesdeBackend()
    {
        $id = ($this->getId() != '') ? $this->getId() : 0;
        
        $o = self::getOxId($id);
        
        parent::saveDesdeBackend();
        
        if (!$o){
            // se inicializa el codigo para url amigable
            $this->setCodigoFormateado();
        }
        else{
            // se mantiene el mismo codigo para url amigable
            $this->setCodigoFormateado($o->getCodigo());
        }
    }
    
    
    /**
     * 
     * @param type $codigo
     * @creado_por Pablo Rosen
     * @creado 19/11/2016
     */
    public function setCodigoFormateado($codigo = '')
    {
        if (strlen($codigo) == 0)
        {
            if($this->getCodigo() != '')
            {
                $codigo = strtoupper($this->getCodigo());
            }
            else
            {
                $codigo = Gral::getStringSaneadoSinCaracteresEspeciales($this->getDescripcion());
                $codigo = strtoupper($codigo);
            }
        }
        
        $this->setCodigo($codigo);
        $this->save();
    }
    
    
    public function setEnviarEstadoActivo($codigo = 'Proceso Temporizado'){
        $ejec = new Ejecucion();
        $sql = 'UPDATE ctrl_equipo_estado SET actual = 0 WHERE ctrl_equipo_id = '.$this->getId();
        $ejec->setSql($sql);
        $ejec->execute();
                
        $descripcion = $this->getDescripcion();
        
        $ctrl_equipo_tipo_estado_activo = CtrlEquipoTipoEstado::getOxCodigo(CtrlEquipoTipoEstado::ESTADO_ACTIVO);
        $ctrl_sector_actual = $this->getCtrlSectorActualDelEquipo();
        if($ctrl_sector_actual){
            $descripcion.= ' - '.$ctrl_sector_actual->getDescripcion();
        }
        
        $ctrl_equipo_estado = new CtrlEquipoEstado();
        $ctrl_equipo_estado->setDescripcion($descripcion);
        $ctrl_equipo_estado->setCodigo($codigo);
        $ctrl_equipo_estado->setCtrlEquipoTipoEstadoId($ctrl_equipo_tipo_estado_activo->getId());
        $ctrl_equipo_estado->setCtrlEquipoId($this->getId());
        $ctrl_equipo_estado->setInicial($inicial);
        $ctrl_equipo_estado->setActual(1);
        $ctrl_equipo_estado->setEstado(1);
        $ctrl_equipo_estado->save();
    }
    
    
    public function getCtrlEquipoEstadoActual(){
        $array(
              array('campo' => CtrlEquipoEstado::GEN_ATTR_CLUB_CTRL_EQUIPO_ID, 'valor' => $this->getId()),
              array('campo' => CtrlEquipoEstado::GEN_ATTR_ACTUAL, 'valor' => 1)
        );
        $ctrl_equipo_estado = CtrlEquipoEstado::getOxArray($array);
        if($ctrl_equipo_estado){
            return $ctrl_equipo_estado;
        }
        return false;
    }
    
    
    public function getCtrlSectorActualDelEquipo(){
        $ctrl_sector = $this->getCtrlSectorXCtrlEquipoCtrlSector();
        return $ctrl_sector;
    }
    
    
}
?>