<?php 
require_once "base/BOsTipo.php"; 
class OsTipo extends BOsTipo
{
    
    /**
     * 
     * @return \DbError
     * @creado_por Esteban Martinez
     * @creado 19/11/2016
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
        
        if(!Ctrl::esVacio($this->getCodigoNumerico()))
        {
            $o = self::getOxCodigoNumerico(trim($this->getCodigoNumerico()));
            if($o && trim($o->getCodigoNumerico()) == trim($this->getCodigoNumerico()))
            {
                if($o && $o->getId() != $this->getId())
                {
                    $error->addError("El Codigo Numerico ya se encuentra cargado", "Codigo Numerico", "codigo_numerico");
                }
            }
        }
        else{
            $error->addError(100, "Codigo Numerico", "codigo_numerico");
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
    
    
}
?>