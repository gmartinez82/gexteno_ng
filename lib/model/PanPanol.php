<?php

require_once "base/BPanPanol.php";

class PanPanol extends BPanPanol {

    const PREFIJO_CREDENCIAL = 'PANOL_';

    /* Control de PrvProveedor */

    public function control() {
        $error = new DbError();

        // descripcion
        if (!Ctrl::esVacio($this->getDescripcion())) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError(505, 'Descripcion', 'descripcion');
            }else{
                $o = self::getOxDescripcion($this->getDescripcion());
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError(140, 'Descripcion', 'descripcion');
                }                
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }

        // codigo
        if (!Ctrl::esVacio($this->getCodigo())) {
            if (Ctrl::esMaxCaracteres(100, $this->getCodigo())) {
                $error->addError(505, 'Codigo', 'codigo');
            }

            $o = self::getOxCodigo($this->getCodigo());
            if ($o && $o->getId() != $this->getId()) {
                $error->addError(140, 'Codigo', 'codigo');
            }
        } else {
            //$error->addError(100, 'Codigo', 'codigo');
        }

        /*
        // galpon
        if (Ctrl::esNull($this->getGlpGalponId())) {
            $error->addError(100, 'Galpon', 'glp_galpon_id');
        }
        */
        
        // tipo panol
        if (Ctrl::esNull($this->getPanTipoPanolId())) {
            $error->addError(100, 'Tipo Panol', 'pan_tipo_panol_id');
        }
        /*
        // centro pedido
        if (Ctrl::esNull($this->getPdeCentroPedidoId())) {
            $error->addError(100, 'Centro Pedido', 'pde_centro_pedido_id');
        }
        */
        return $error;
    }

    public function getCodigoDeCredencial() {
        return self::PREFIJO_CREDENCIAL . $this->getCodigo();
    }

    /**
     * Metodo que retorna los panols de acuerdo al alcance del usuario
     * @return type
     */
    static function getPanPanolsxCredencial(){
        $user = UsUsuario::autenticado();
        
        $c = new Criterio();
        $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(PanPanolUsUsuario::GEN_ATTR_US_USUARIO_ID, $user->getId(), Criterio::IGUAL);
        $c->addTabla(PanPanol::GEN_TABLA);
        $c->addRealJoin(PanPanolUsUsuario::GEN_TABLA, PanPanolUsUsuario::GEN_ATTR_PAN_PANOL_ID, PanPanol::GEN_ATTR_ID);
        $c->addOrden(PanPanol::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();

        $pan_panols = PanPanol::getPanPanols($p = null, $c);
        return $pan_panols;
    }


    /**
     * Metodo que retorna los panols de acuerdo al alcance del usuario, para select
     * @return type
     */
    static function getPanPanolsCmbFxCredencial($paginador = null, $criterio = null) {        
        $user = UsUsuario::autenticado();
        $col = self::getPanPanolsxCredencial();

        $cont = 0;
        $arr = array();

        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcion();
        }
        return $arr;
    }

    static function getArrayPanPanolIdsXCredencial($paginador = null, $criterio = null) {

        $col = PanPanol::getPanPanols($paginador, $criterio);
        
        $user = UsUsuario::autenticado();
        $col = $user->getPanPanolsXPanPanolUsUsuario();

        $arr = array();

        foreach ($col as $o) {
            //$codigo = self::PREFIJO_CREDENCIAL . $o->getCodigo();
            //if (Login::esAutorizado($user, $codigo)) {
                $arr[] = $o->getId();
            //}
        }
        return $arr;
    }

    static function getArrayPanPanolIdsXCredencialParaComparadorIn($paginador = null, $criterio = null) {
        $arr = self::getArrayPanPanolIdsXCredencial($paginador, $criterio);
        if (is_array($arr) && count($arr) >= 1) {
            $in_string = '(' . implode(', ', $arr) . ')';
        } else {
            $in_string = '(0)';
        }
        return $in_string;
    }
    
    static function getPanPanolsReales(){
        $c = new Criterio();
        $c->addTrueInicialEnWhere();
        
        $c->addInicioSubconsulta();
        $c->add(PanTipoPanol::GEN_ATTR_CODIGO, PanTipoPanol::TIPO_PRINCIPAL, Criterio::IGUAL);
        $c->add(PanTipoPanol::GEN_ATTR_CODIGO, PanTipoPanol::TIPO_SUCURSAL, Criterio::IGUAL, false, Criterio::_OR);
        $c->addFinSubconsulta();
        
        $c->add(PanPanol::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(PanPanol::GEN_TABLA);
        $c->addRealJoin(PanTipoPanol::GEN_TABLA, PanTipoPanol::GEN_ATTR_ID, PanPanol::GEN_ATTR_PAN_TIPO_PANOL_ID);
        $c->addOrden(PanPanol::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $pan_panols = PanPanol::getPanPanols(null, $c);
        return $pan_panols;
    }

    public function getInsInsumoIdentificadosActualNoActivoEnPanol() {
        $c = new Criterio();
        $c->add(InsInsumoIdentificadoMovimiento::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        //$c->add(InsInsumoIdentificadoTipoEstado::GEN_ATTR_ACTIVO, 0, Criterio::IGUAL);
        $c->add(InsInsumoIdentificadoMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(InsInsumoIdentificado::GEN_TABLA);
        $c->addRealJoin(InsInsumoIdentificadoMovimiento::GEN_TABLA, InsInsumoIdentificadoMovimiento::GEN_ATTR_INS_INSUMO_IDENTIFICADO_ID, InsInsumoIdentificado::GEN_ATTR_ID);
        $c->addRealJoin(InsInsumoIdentificadoTipoEstado::GEN_TABLA, InsInsumoIdentificadoTipoEstado::GEN_ATTR_ID, InsInsumoIdentificadoMovimiento::GEN_ATTR_INS_INSUMO_IDENTIFICADO_TIPO_ESTADO_ID);
        $c->addOrden(InsInsumoIdentificado::GEN_ATTR_DESCRIPCION, 'asc');
        $c->setCriterios();

        $ins_insumos_identificados = InsInsumoIdentificado::getInsInsumoIdentificados(null, $c);
        return $ins_insumos_identificados;
    }

    public function getInsInsumoIdentificadoMovimientosActualNoActivoEnPanol() {
        $c = new Criterio();
        $c->addDistinct(false);
        $c->add(InsInsumoIdentificadoMovimiento::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        //$c->add(InsInsumoIdentificadoTipoEstado::GEN_ATTR_ACTIVO, 0, Criterio::IGUAL);
        $c->add(InsInsumoIdentificadoMovimiento::GEN_ATTR_PAN_PANOL_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(InsInsumoIdentificadoMovimiento::GEN_TABLA);
        $c->addRealJoin(InsInsumoIdentificado::GEN_TABLA, InsInsumoIdentificado::GEN_ATTR_ID, InsInsumoIdentificadoMovimiento::GEN_ATTR_INS_INSUMO_IDENTIFICADO_ID);
        $c->addRealJoin(InsInsumoIdentificadoTipoEstado::GEN_TABLA, InsInsumoIdentificadoTipoEstado::GEN_ATTR_ID, InsInsumoIdentificadoMovimiento::GEN_ATTR_INS_INSUMO_IDENTIFICADO_TIPO_ESTADO_ID);
        $c->addOrden(InsInsumoIdentificado::GEN_ATTR_DESCRIPCION, 'asc');
        $c->setCriterios();

        $ins_insumos_identificado_movimientos = InsInsumoIdentificadoMovimiento::getInsInsumoIdentificadoMovimientos(null, $c);
        return $ins_insumos_identificado_movimientos;
    }

    /* Metodo getPanPanols filtrado para select considerando solo galpones primarios */

    static function getPanPanolsCmbFxTipoPrincipal($paginador = null, $criterio = null) {
        $criterio = new Criterio();
        $criterio->add(PanTipoPanol::GEN_ATTR_CODIGO, PanTipoPanol::TIPO_PRINCIPAL, Criterio::IGUAL);
        $criterio->addTabla(PanPanol::GEN_TABLA);
        $criterio->addRealJoin(PanTipoPanol::GEN_TABLA, PanTipoPanol::GEN_ATTR_ID, PanPanol::GEN_ATTR_PAN_TIPO_PANOL_ID);
        $criterio->setCriterios();

        $col = PanPanol::getPanPanols($paginador, $criterio);

        $cont = 0;
        $arr = array();
        $user = UsUsuario::autenticado();
        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcion();
        }
        return $arr;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 13/03/2014 19:22hs.
     * Metodo que registra un nuevo tipo de asignacion para el panol
     */
    public function setPdiAsignacionNuevo($tipo_asignacion_codigo) {
        $inicial = 1;
        foreach ($this->getPdiAsignacions() as $pdi_asignacion) {
            $pdi_asignacion->setActual(0);
            $pdi_asignacion->save();

            $inicial = 0;
        }

        $pdi_tipo_asignacion = PdiTipoAsignacion::getOxCodigo($tipo_asignacion_codigo);

        $pdi_asignacion = new PdiAsignacion();
        $pdi_asignacion->setPanPanolId($this->getId());
        $pdi_asignacion->setPdiTipoAsignacionId($pdi_tipo_asignacion->getId());
        $pdi_asignacion->setInicial($inicial);
        $pdi_asignacion->setActual(1);
        $pdi_asignacion->setObservacion('');
        $pdi_asignacion->save();

        return $pdi_asignacion;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 13/03/2014 19:25 hs.
     * Metodo que retorna el PdiAsignacion Actual del Panol
     * @return PdiEstado
     */
    public function getPdiAsignacionActual() {
        $c = new Criterio();
        $c->add('pan_panol_id', $this->getId(), Criterio::IGUAL);
        $c->add('actual', 1, Criterio::IGUAL);
        $c->addTabla('pdi_asignacion');
        $c->setCriterios();

        $pdi_asignacions = PdiAsignacion::getPdiAsignacions(null, $c);
        foreach ($pdi_asignacions as $pdi_asignacion) {
            return $pdi_asignacion;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 04/03/2021 20:44
     * Metodo que retorna el panol principal
     * @return PdiEstado
     */
    static function getPanPanolPrincipal(){
        $o = PanPanol::getOxId(1);
        return $o;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 02/07/2021 10:11
     * Metodo que retorna el panol utilizado para ventas en ML
     * @return PdiEstado
     */
    static function getPanPanolVentaMercadolibre(){
        $o = PanPanol::getOxId(1);
        return $o;
    }
    
    /**
     * 
     * @return type
     */
    static function getPanPanolsParaVisualizarStock(){
        $pan_panols = PanPanol::getPanPanols(null, null, true, array(array('campo' => 'orden', 'orden' => 'asc')));
        return $pan_panols;
    }
    
    /**
     * 
     * @return type
     */
    public function getGralSucursalVinculado(){
        //$gral_sucursal = $this->getGralSucursalXGralSucursalPanPanol(null, null, true);
        $gral_sucursal = $this->getGralSucursalXGralSucursalPanPanol(null, null);
        return $gral_sucursal;
    }
    
    /**
     * 
     */
    public function getRelevanteParaUsuario($pan_panols_autorizados = false){
        $relevante = false;
        
        if($pan_panols_autorizados){
            foreach($pan_panols_autorizados as $pan_panol_autorizado){
                if($this->getId() == $pan_panol_autorizado->getId()){
                    return $relevante = true;
                }
            }
        }
        
        return $relevante;
    }
    
    
}

?>