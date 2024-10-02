<?php

require_once "base/BFndCajero.php";

class FndCajero extends BFndCajero {

    const PREFIJO_USUARIO = 'caj-';

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

    public function getDescripcion() {
        $texto = $this->getApellido() . ', ' . $this->getNombre();
        return $texto;
    }

    public function saveDesdeBackend() {

        if ($this->getId() != '') {
            $o = self::getOxId($this->getId());
        }

        parent::saveDesdeBackend();

        // se inicializa el cajero
        $this->setInicializarCajero();

        $us_grupo_codigo = UsGrupo::GRUPO_CAJERO;

        $gral_lenguaje = GralLenguaje::getOxCodigo('es');
        $us_grupo_vendedor = UsGrupo::getOxCodigo($us_grupo_codigo);

        if (trim($this->getCodigo()) != "") {
            $us_usuario = $this->getUsUsuarioXFndCajeroUsUsuario();
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

                // se vincula el usuario con el chofer
                $fnd_cajero_us_usuario = new FndCajeroUsUsuario();
                $fnd_cajero_us_usuario->setUsUsuarioId($us_usuario->getId());
                $fnd_cajero_us_usuario->setFndCajeroId($this->getId());
                $fnd_cajero_us_usuario->save();

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

    public function setInicializarCajero() {
        
    }

    public function getFndCajaAbierta() {
        $c = new Criterio();
        $c->add(FndCajero::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(FndCajaTipoEstado::GEN_ATTR_CODIGO, FndCajaTipoEstado::TIPO_ABIERTA, Criterio::IGUAL);
        $c->addTabla(FndCaja::GEN_TABLA);
        $c->addRealJoin(FndCajaTipoEstado::GEN_TABLA, FndCajaTipoEstado::GEN_ATTR_ID, FndCaja::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID);
        $c->addRealJoin(FndCajero::GEN_TABLA, FndCajero::GEN_ATTR_ID, FndCaja::GEN_ATTR_FND_CAJERO_ID);
        $c->setCriterios();

        $fnd_cajas = FndCaja::getFndCajas(null, $c);
        foreach ($fnd_cajas as $fnd_caja) {
            return $fnd_caja;
        }
        return false;
    }

    public function getFndCajasAbiertas() {
        $fnd_cajas = array();
        
        // ---------------------------------------------------------------------
        // Se determinan las cajas abiertas del cajero
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(FndCajero::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(FndCajaTipoEstado::GEN_ATTR_CODIGO, FndCajaTipoEstado::TIPO_ABIERTA, Criterio::IGUAL);
        $c->addTabla(FndCaja::GEN_TABLA);
        $c->addRealJoin(FndCajaTipoEstado::GEN_TABLA, FndCajaTipoEstado::GEN_ATTR_ID, FndCaja::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID);
        $c->addRealJoin(FndCajero::GEN_TABLA, FndCajero::GEN_ATTR_ID, FndCaja::GEN_ATTR_FND_CAJERO_ID);
        $c->setCriterios();

        $fnd_cajas_del_cajero = FndCaja::getFndCajas(null, $c);
        foreach ($fnd_cajas_del_cajero as $fnd_caja_del_cajero) {
            $fnd_cajas[$fnd_caja_del_cajero->getId()] = $fnd_caja_del_cajero;
        }
        
        // ---------------------------------------------------------------------
        // Se determinan las cajas abiertas opcionales del cajero
        // ---------------------------------------------------------------------
        $us_usuario = $this->getUsUsuarioXFndCajeroUsUsuario();
        $vta_vendedor = $us_usuario->getVtaVendedor();
        if ($vta_vendedor) {
            $gral_sucursal = $vta_vendedor->getGralSucursal();
            $vta_vendedors_de_sucursal = $gral_sucursal->getVtaVendedors();

            foreach ($vta_vendedors_de_sucursal as $vta_vendedor_de_sucursal) {
                
                if($vta_vendedor_de_sucursal->getId() == $vta_vendedor->getId()){
                    continue;
                }

                $vta_tipo_vendedor_de_sucursal = $vta_vendedor_de_sucursal->getVtaTipoVendedor();
                if ($vta_tipo_vendedor_de_sucursal && $vta_tipo_vendedor_de_sucursal->getCodigo() == VtaTipoVendedor::TIPO_SUCURSAL) {
                    $us_usuario_del_vendedor = $vta_vendedor_de_sucursal->getUsUsuarioXVtaVendedorUsUsuario();
                    if ($us_usuario_del_vendedor) {
                        $fnd_cajero_de_sucursal = $us_usuario_del_vendedor->getFndCajero();
                        if ($fnd_cajero_de_sucursal) {
                            $c = new Criterio();
                            $c->add(FndCajero::GEN_ATTR_ID, $fnd_cajero_de_sucursal->getId(), Criterio::IGUAL);
                            $c->add(FndCajaTipoEstado::GEN_ATTR_CODIGO, FndCajaTipoEstado::TIPO_ABIERTA, Criterio::IGUAL);
                            $c->addTabla(FndCaja::GEN_TABLA);
                            $c->addRealJoin(FndCajaTipoEstado::GEN_TABLA, FndCajaTipoEstado::GEN_ATTR_ID, FndCaja::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID);
                            $c->addRealJoin(FndCajero::GEN_TABLA, FndCajero::GEN_ATTR_ID, FndCaja::GEN_ATTR_FND_CAJERO_ID);
                            $c->addRealJoin(GralCaja::GEN_TABLA, GralCaja::GEN_ATTR_ID, FndCaja::GEN_ATTR_GRAL_CAJA_ID);
                            $c->addRealJoin(GralSucursalGralCaja::GEN_TABLA, GralSucursalGralCaja::GEN_ATTR_GRAL_CAJA_ID, GralCaja::GEN_ATTR_ID);
                            $c->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, GralSucursalGralCaja::GEN_ATTR_GRAL_SUCURSAL_ID);
                            $c->setCriterios();

                            $fnd_cajas_opcionales_del_cajero = FndCaja::getFndCajas(null, $c);                            
                            foreach ($fnd_cajas_opcionales_del_cajero as $fnd_caja_opcional_del_cajero) {
                                //$fnd_cajas[$fnd_caja_opcional_del_cajero->getId()] = $fnd_caja_opcional_del_cajero;
                            }
                        }
                    }
                }
            }
        }


        return $fnd_cajas;
    }

    public function getFndCajaAbiertaCmb() {

        $fnd_cajas_abiertas = $this->getFndCajasAbiertas();

        $cont = 0;
        $arr = array();
        foreach ($fnd_cajas_abiertas as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();
        }
        return $arr;
    }

    public function getGralCajasAlcanzables() {
        // ---------------------------------------------------------------------
        // Se determinan las cajas que puede administrar la sucursal del vendedor
        // ---------------------------------------------------------------------
        $us_usuario = $this->getUsUsuarioXFndCajeroUsUsuario();
        if ($us_usuario) {
            $vta_vendedor = $us_usuario->getVtaVendedor();
            if ($vta_vendedor) {
                $gral_sucursal = $vta_vendedor->getGralSucursal();
                if ($gral_sucursal) {

                    $c = new Criterio();
                    $c->add(GralCaja::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
                    $c->add(GralSucursal::GEN_ATTR_ID, $gral_sucursal->getId(), Criterio::IGUAL);
                    $c->addTabla(GralCaja::GEN_TABLA);
                    $c->addRealJoin(GralSucursalGralCaja::GEN_TABLA, GralSucursalGralCaja::GEN_ATTR_GRAL_CAJA_ID, GralCaja::GEN_ATTR_ID);
                    $c->addRealJoin(GralSucursal::GEN_TABLA, GralSucursal::GEN_ATTR_ID, GralSucursalGralCaja::GEN_ATTR_GRAL_SUCURSAL_ID);
                    $c->setCriterios();

                    $gral_cajas_x_sucursal = GralCaja::getGralCajas(null, $c);
                }
            }
        }

        // ---------------------------------------------------------------------
        // Se determinan las cajas que puede administrar el vendedor
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(GralCaja::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->add(FndCajero::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(GralCaja::GEN_TABLA);
        $c->addRealJoin(FndCajeroGralCaja::GEN_TABLA, FndCajeroGralCaja::GEN_ATTR_GRAL_CAJA_ID, GralCaja::GEN_ATTR_ID);
        $c->addRealJoin(FndCajero::GEN_TABLA, FndCajero::GEN_ATTR_ID, FndCajeroGralCaja::GEN_ATTR_FND_CAJERO_ID);
        $c->setCriterios();

        $gral_cajas_x_cajero = GralCaja::getGralCajas(null, $c);

        //$gral_cajas = array_merge($gral_cajas_x_sucursal, $gral_cajas_x_cajero);
        $gral_cajas = array();

        // ---------------------------------------------------------------------
        // Se agregan cajas por sucursal
        // ---------------------------------------------------------------------
        foreach ($gral_cajas_x_sucursal as $gral_caja_x_sucursal) {
            $gral_cajas[$gral_caja_x_sucursal->getId()] = $gral_caja_x_sucursal;
        }

        // ---------------------------------------------------------------------
        // Se agregan cajas por vinculo directo del cajero
        // ---------------------------------------------------------------------
        foreach ($gral_cajas_x_cajero as $gral_caja_x_cajero) {
            $gral_cajas[$gral_caja_x_cajero->getId()] = $gral_caja_x_cajero;
        }

        return $gral_cajas;
    }

    public function getGralCajasAlcanzablesCmb() {
        $col = $this->getGralCajasAlcanzables();

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcionParaSelect();
        }
        return $arr;
    }

    /**
     * Metodo que retorna las cajas que un cajero podria abrir
     * @return type
     */
    public function getGralCajaDisponiblesParaAbrirCmb() {

        $gral_cajas = $this->getGralCajasAlcanzables();

        $arr = array();
        foreach ($gral_cajas as $gral_caja) {
            $c = new Criterio();
            $c->add(GralCaja::GEN_ATTR_ID, $gral_caja->getId(), Criterio::IGUAL);
            $c->add(FndCajaTipoEstado::GEN_ATTR_CODIGO, FndCajaTipoEstado::TIPO_ABIERTA, Criterio::IGUAL);
            $c->addTabla(FndCaja::GEN_TABLA);
            $c->addRealJoin(GralCaja::GEN_TABLA, GralCaja::GEN_ATTR_ID, FndCaja::GEN_ATTR_GRAL_CAJA_ID);
            $c->addRealJoin(FndCajaTipoEstado::GEN_TABLA, FndCajaTipoEstado::GEN_ATTR_ID, FndCaja::GEN_ATTR_FND_CAJA_TIPO_ESTADO_ID);
            $c->setCriterios();

            $fnd_cajas = FndCaja::getFndCajasCmbF(null, $c);

            $cont = 0;
            if (count($fnd_cajas) == 0) {
                $cont++;
                $arr[$cont]['cod'] = $gral_caja->getId();
                $arr[$cont]['descripcion'] = $gral_caja->getDescripcionParaSelect();
            }
        }

        return $arr;
    }

}

?>