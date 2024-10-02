<?php

require_once "base/BVtaVendedor.php";

class VtaVendedor extends BVtaVendedor {

    const PREFIJO_USUARIO = 'ven-';

    const VENDEDOR_TIENDA_ONLINE_GEXTENO = 'TIENDA_ONLINE_GEXTENO';
    /* Control */

    public function control() {
        $error = new DbError();

        // apellido
        if (!Ctrl::esVacio($this->getApellido())) {
            if (Ctrl::esMaxCaracteres(100, $this->getApellido())) {
                $error->addError(505, 'Apellido', 'apellido');
            }
        } else {
            $error->addError(100, 'Apellido', 'apellido');
        }

        // nombre
        if (!Ctrl::esVacio($this->getNombre())) {
            if (Ctrl::esMaxCaracteres(100, $this->getNombre())) {
                $error->addError(505, 'Nombre', 'nombre');
            }
        } else {
            $error->addError(100, 'Nombre', 'nombre');
        }

        // codigo
        if (!Ctrl::esVacio($this->getCodigo())) {
            if (Ctrl::esMaxCaracteres(100, $this->getCodigo())) {
                $error->addError(505, 'Codigo', 'codigo');
            } else {
                $o = self::getOxCodigo($this->getCodigo());
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError('Ya existe el codigo en la base de datos', 'Codigo', 'codigo');
                }
            }
        } else {
            //$error->addError(100, 'Codigo', 'codigo');
        }

        return $error;
    }

    /*
      Metodo que retorna la descripcion de un objeto
      autor: Pablo Rosen
      fecha: 24/11/2011 12:11
      return string
     */

    public function getDescripcion() {
        return $this->getApellido() . ', ' . $this->getNombre();
    }

    public function saveDesdeBackend() {

        if ($this->getId() != '') {
            $o = self::getOxId($this->getId());
        }

        parent::saveDesdeBackend();

        // ----------------------------------------------------------------------
        // se inicializa la ubicacion
        // ----------------------------------------------------------------------
        $this->setInicializarVendedor();

        // ----------------------------------------------------------------------
        // se reasigna de acuerdo sucursal asignada
        // ----------------------------------------------------------------------
        $this->setAsignarSucursal();
    }

    public function setInicializarVendedor() {
        $us_grupo_codigo = UsGrupo::GRUPO_VENDEDOR;

        $gral_lenguaje = GralLenguaje::getOxCodigo('es');
        $us_grupo_vendedor = UsGrupo::getOxCodigo($us_grupo_codigo);

        if (trim($this->getCodigo()) != "") {
            $us_usuario = $this->getUsUsuarioXVtaVendedorUsUsuario();
            if (!$us_usuario) {

                $us_usuario = new UsUsuario();
                $us_usuario->setGralLenguajeId($gral_lenguaje->getId());
                $us_usuario->setApellido($this->getApellido());
                $us_usuario->setNombre($this->getNombre());
                $us_usuario->setUsuario(self::PREFIJO_USUARIO . $this->getCodigo());
                $us_usuario->setEmail($this->getEmail());
                $us_usuario->setEstado(1);
                $us_usuario->setActivado(1);
                $us_usuario->setAbsoluto(0);
                $us_usuario->saveDesdeBackend();

                // inicializacion de clave, al crear el usuario: clave = usuario.
                $clave_actual = $us_usuario->getClaveActual();
                if (!$clave_actual) {
                    $us_usuario->setNuevaClave($us_usuario->getUsuario());
                }

                // se vincula el usuario con el vendedor
                $vta_vendedor_us_usuario = new VtaVendedorUsUsuario();
                $vta_vendedor_us_usuario->setUsUsuarioId($us_usuario->getId());
                $vta_vendedor_us_usuario->setVtaVendedorId($this->getId());
                $vta_vendedor_us_usuario->save();

                // se crea el grupo, si no existe
                if (!$us_grupo_vendedor) {
                    $us_grupo_vendedor = new UsGrupo();
                    $us_grupo_vendedor->setDescripcion($us_grupo_codigo);
                    $us_grupo_vendedor->setCodigo($us_grupo_codigo);
                    $us_grupo_vendedor->setEstado(1);
                    $us_grupo_vendedor->save();
                }

                // se vincula el usuario con el grupo
                $us_agrupado = new UsAgrupado();
                $us_agrupado->setUsUsuarioId($us_usuario->getId());
                $us_agrupado->setUsGrupoId($us_grupo_vendedor->getId());
                $us_agrupado->save();
            } else {
                $us_usuario->setApellido($this->getApellido());
                $us_usuario->setNombre($this->getNombre());
                //$us_usuario->setUsuario(self::PREFIJO_USUARIO . $this->getCodigo());
                $us_usuario->setEmail($this->getEmail());
                $us_usuario->setCelular($this->getCelular());
                $us_usuario->saveDesdeBackend();
            }
        }
    }

    public function setAsignarSucursal() {
        $gral_sucursal = $this->getGralSucursal();
        $us_usuario = $this->getUsUsuario();

        if ($us_usuario) {
            // ------------------------------------------------------------------
            // se verifica que el usuario tenga asignado el alcance a la sucursal a la que pertenece
            // ------------------------------------------------------------------
            $array = array(
                array('campo' => 'gral_sucursal_id', 'valor' => $gral_sucursal->getId()),
                array('campo' => 'us_usuario_id', 'valor' => $us_usuario->getId()),
            );

            $gral_sucursal_us_usuario = GralSucursalUsUsuario::getOxArray($array);
            if (!$gral_sucursal_us_usuario) {
                $gral_sucursal_us_usuario = new GralSucursalUsUsuario();
                $gral_sucursal_us_usuario->setGralSucursalId($gral_sucursal->getId());
                $gral_sucursal_us_usuario->setUsUsuarioId($us_usuario->getId());
                $gral_sucursal_us_usuario->setEstado(1);
                $gral_sucursal_us_usuario->save();
            }
        }
    }

    /*
      Autor: Pablo Rosen
      Fecha: 23/02/2012 10:00 hs.
      Return: UsUsuario

      Metodo que retorna el UsUsuario que corresponde al VtaVendedor
     */

    public function getUsUsuario() {
        $vta_vendedor_us_usuarios = $this->getVtaVendedorUsUsuarios();
        foreach ($vta_vendedor_us_usuarios as $vta_vendedor_us_usuario) {
            return $vta_vendedor_us_usuario->getUsUsuario();
        }
        return false;
    }

    /**
     * 
     */
    public function getInsTipoListaPreciosHabilitadasParaVendedor() {
        $ins_tipo_listas_precios = $this->getInsTipoListaPreciosXVtaVendedorInsTipoListaPrecio();
        krsort($ins_tipo_listas_precios);

        // ---------------------------------------------------------------------
        // se quitan las listas de precios deshabilitadas
        // ---------------------------------------------------------------------
        foreach ($ins_tipo_listas_precios as $i => $ins_tipo_listas_precio) {
            if(!$ins_tipo_listas_precio->getEstado()){
                unset($ins_tipo_listas_precios[$i]);
            }
        }        
        
        // ---------------------------------------------------------------------
        // se incluye la lista de precios por default, si la hubiese
        // ---------------------------------------------------------------------
        $incluye_default = false;
        foreach ($ins_tipo_listas_precios as $ins_tipo_listas_precio) {
            if ($ins_tipo_listas_precio->getPorDefault()) {
                $incluye_default = true;
            }
        }
        /*
        if (!$incluye_default) {
            $ins_tipo_listas_precio_default = InsTipoListaPrecio::getOxPorDefault(1);
            if ($ins_tipo_listas_precio_default) {
                $ins_tipo_listas_precios[] = $ins_tipo_listas_precio_default;
            }
        }
        */

        return $ins_tipo_listas_precios;
    }

    public function getInsTipoListaPreciosHabilitadasParaVendedorCmb() {
        $ins_tipo_listas_precios = $this->getInsTipoListaPreciosHabilitadasParaVendedor();

        $cont = 0;
        $arr = array();
        foreach ($ins_tipo_listas_precios as $ins_tipo_listas_precio) {
            $cont++;
            $arr[$cont]['cod'] = $ins_tipo_listas_precio->getId();
            $arr[$cont]['descripcion'] = $ins_tipo_listas_precio->getDescripcionParaSelect();
        }
        return $arr;
    }

    public function getTieneListaHabilitada($ins_tipo_lista_precio) {
        $ins_tipo_listas_precios_habilitadas = $this->getInsTipoListaPreciosHabilitadasParaVendedor();
        foreach ($ins_tipo_listas_precios_habilitadas as $ins_tipo_listas_precio_habilitada) {
            if ($ins_tipo_listas_precio_habilitada->getId() == $ins_tipo_lista_precio->getId()) {
                return true;
            }
        }
        return false;
    }

    /**
     * 
     * @param type $clientes_vinculados
     * @return string
     */
    static function getVtaVendedorsCmbXAlcance() {
        // ------------------------------------------------------------------------------
        // se identifica al usuario logueado
        // ------------------------------------------------------------------------------
        $us_usuario_autenticado = UsUsuario::autenticado();

        // ------------------------------------------------------------------------------
        // se identifica al vendedor vinculado al usuario
        // ------------------------------------------------------------------------------
        $vta_vendedor_autenticado = $us_usuario_autenticado->getVtaVendedor();

        $criterio = new Criterio();
        if($us_usuario_autenticado->esUsuarioAuditorVentas()){
            // no aplica filtros si es auditor de ventas
        }elseif($us_usuario_autenticado->esUsuarioTelemarketer()){
            if($vta_vendedor_autenticado){
                $criterio->add(GralSucursal::GEN_ATTR_ID, $vta_vendedor_autenticado->getGralSucursalId(), Criterio::IGUAL);
            }
        }elseif($us_usuario_autenticado->esUsuarioResponsableSucursal()){
            if($vta_vendedor_autenticado){
                $criterio->add(GralSucursal::GEN_ATTR_ID, $vta_vendedor_autenticado->getGralSucursalId(), Criterio::IGUAL);
            }
        }else{
            if($vta_vendedor_autenticado){
                $criterio->add(VtaVendedor::GEN_ATTR_ID, $vta_vendedor_autenticado->getId(), Criterio::IGUAL);
            }                        
        }        
        
        $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, VtaVendedor::GEN_ATTR_GRAL_SUCURSAL_ID);
        $criterio->addOrden('2');
        $criterio->setCriterios();

        $col = VtaVendedor::getVtaVendedors($paginador = null, $criterio);

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            
            $cli_clientes_vinculados = $o->getCliClientesXCliClienteVtaVendedor();
            
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();
        }
        return $arr;
    }
    
    /**
     * 
     * @param type $clientes_vinculados
     * @return string
     */
    static function getVtaVendedorsCmbXAlcanceYDetalleClientes($clientes_vinculados = false) {
        // ------------------------------------------------------------------------------
        // se identifica al usuario logueado
        // ------------------------------------------------------------------------------
        $us_usuario_autenticado = UsUsuario::autenticado();

        // ------------------------------------------------------------------------------
        // se identifica al vendedor vinculado al usuario
        // ------------------------------------------------------------------------------
        $vta_vendedor_autenticado = $us_usuario_autenticado->getVtaVendedor();

        $criterio = new Criterio();
        if(!$us_usuario_autenticado->esUsuarioAuditorVentas()){
            if($vta_vendedor_autenticado){
                $criterio->add(VtaVendedor::GEN_ATTR_ID, $vta_vendedor_autenticado->getId(), Criterio::IGUAL);
            }            
        }
        $criterio->add(self::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        if($clientes_vinculados){
            $criterio->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, VtaVendedor::GEN_ATTR_ID);
            $criterio->addRealJoin(CliCliente::GEN_TABLA, CliCliente::GEN_ATTR_ID, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID);
        }
        $criterio->addTabla(self::GEN_TABLA);
        $criterio->addOrden('2');
        $criterio->setCriterios();

        $col = VtaVendedor::getVtaVendedors($paginador = null, $criterio);

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            
            $cli_clientes_vinculados = $o->getCliClientesHabilitadosXCliClienteVtaVendedor(null, null, true);
            
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect().' - '.count($cli_clientes_vinculados).' Clientes Vinculados';
        }
        return $arr;
    }
    
    /**
     * 
     */
    public function getCliClientesHabilitadosXCliClienteVtaVendedor($paginador = null, $criterio = null, $estado = null, $arr_ordens = false){
        $c = new Criterio();
        if($estado){
            $c->add(CliCliente::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            //$c->add(CliClienteVtaVendedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }
        $c->add(CliClienteVtaVendedor::GEN_ATTR_VTA_VENDEDOR_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(CliCliente::GEN_TABLA);
        $c->addRealJoin(CliClienteVtaVendedor::GEN_TABLA, CliClienteVtaVendedor::GEN_ATTR_CLI_CLIENTE_ID, CliCliente::GEN_ATTR_ID);
        $c->addOrden(2);
        $c->setCriterios();

        $os = CliCliente::getCliClientes($paginador, $c);
        return $os;
    }

}

?>