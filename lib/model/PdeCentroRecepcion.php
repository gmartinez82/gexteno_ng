<?php 
require_once "base/BPdeCentroRecepcion.php"; 
class PdeCentroRecepcion extends BPdeCentroRecepcion
{
    const PREFIJO_CREDENCIAL = 'CENTRO_RECEPCION_';

    public function control(){
        $error = new DbError();

        
        // descripcion
        if(!Ctrl::esVacio($this->getDescripcion())){
            if(Ctrl::esMaxCaracteres(100,$this->getDescripcion())){
                $error->addError(505, 'Descripcion', 'descripcion');
            }
        }else{
            $error->addError(100, 'Descripcion', 'descripcion');
        }
        
        return $error;
    }
    
    public function saveDesdeBackend() {
        
        if($this->getCodigo() == ''){
            $codigo = $this->getDescripcion();
            $codigo = Gral::getStringSaneadoSinCaracteresEspeciales($codigo);
            $codigo = strtoupper($codigo);
            $this->setCodigo($codigo);
        }
        
        parent::saveDesdeBackend();
        
        // se genera el usuario vinculado
        $this->setGenerarUsuarioParaPdeCentroRecepcion();
    }
    
    /**
     * Metodo que genera automaticamente un usuario para el centro de recepcion
     */
    public function setGenerarUsuarioParaPdeCentroRecepcion(){
        
        // si es un panol no se le genera usuario, ya que el panol tiene su propio usuario
        if($this->getEsPanol()) return;
        
        $gral_lenguaje = GralLenguaje::getOxCodigo('es');
        $us_grupo_cr = UsGrupo::getOxCodigo(UsGrupo::CENTRO_RECEPCION_RESPONSABLE);
        
        $us_usuario = $this->getUsUsuarioXPdeCentroRecepcionUsUsuario();
        if(!$us_usuario){
            $us_usuario = new UsUsuario();
            $us_usuario->setGralLenguajeId($gral_lenguaje->getId());
            $us_usuario->setApellido($this->getCodigo());
            $us_usuario->setNombre('Recepcion');
            $us_usuario->setUsuario($this->getCodigo());
            $us_usuario->setEstado(1);
            $us_usuario->setActivado(1);
            $us_usuario->setAbsoluto(0);
            $us_usuario->saveDesdeBackend();
            
            // inicializacion de clave, al crear el usuario: clave = usuario.
            $clave_actual = $us_usuario->getClaveActual();
            if(!$clave_actual){
                $us_usuario->setNuevaClave($us_usuario->getUsuario());
            }
            
            // se vincula el usuario con el chofer
            $pde_centro_recepcion_us_usuario = new PdeCentroRecepcionUsUsuario();
            $pde_centro_recepcion_us_usuario->setUsUsuarioId($us_usuario->getId());
            $pde_centro_recepcion_us_usuario->setPdeCentroRecepcionId($this->getId());
            $pde_centro_recepcion_us_usuario->save();
            
            // se vincula el usuario con el grupo
            $us_agrupado = new UsAgrupado();
            $us_agrupado->setUsUsuarioId($us_usuario->getId());
            $us_agrupado->setUsGrupoId($us_grupo_cr->getId());
            $us_agrupado->save();
        }        
    }
    
    static function getPdeCentroRecepcionsCmbXUsUsuario($us_usuario_id = false) {
        if(!$us_usuario_id){
            $us_usuario = UsUsuario::autenticado();
            $us_usuario_id = $us_usuario->getId();
        }
        
        $c = new Criterio();
        $c->add(UsUsuario::GEN_ATTR_ID, $us_usuario_id, Criterio::IGUAL);
        $c->addTabla(PdeCentroRecepcion::GEN_TABLA);
        $c->addRealJoin(PdeCentroRecepcionUsUsuario::GEN_TABLA, PdeCentroRecepcionUsUsuario::GEN_ATTR_PDE_CENTRO_RECEPCION_ID, PdeCentroRecepcion::GEN_ATTR_ID);
        $c->addRealJoin(UsUsuario::GEN_TABLA, UsUsuario::GEN_ATTR_ID, PdeCentroRecepcionUsUsuario::GEN_ATTR_US_USUARIO_ID);
        $c->addOrden(PdeCentroRecepcion::GEN_ATTR_DESCRIPCION);
        $c->setCriterios();
        
        $arr = parent::getPdeCentroRecepcionsCmbF(null, $c);
        return $arr;
    }
}
?>