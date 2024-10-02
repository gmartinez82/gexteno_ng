<?php

require_once "base/BPrvProveedor.php";

class PrvProveedor extends BPrvProveedor {
    /* Control de PrvProveedor */

    public function control() {
        $error = new DbError();

        // ---------------------------------------------------------------------
        // descripcion
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getDescripcion())) {
            if (Ctrl::esMaxCaracteres(100, $this->getDescripcion())) {
                $error->addError(505, 'Descripcion', 'descripcion');
            } else {
                $o = self::getOxDescripcion($this->getDescripcion());
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError(140, 'Descripcion', 'descripcion');
                }
            }
        } else {
            $error->addError(100, 'Descripcion', 'descripcion');
        }

        // ---------------------------------------------------------------------
        // tipo
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getPrvTipoId())) {
            $error->addError(100, 'PrvTipo', 'prv_tipo_id');
        }
        
        // ---------------------------------------------------------------------
        // tipo personeria
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getGralTipoPersoneriaId())) {
            $error->addError(100, 'GralTipoPersoneria', 'gral_tipo_personeria_id');
        }

        // ---------------------------------------------------------------------
        // condiciones iva
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getGralCondicionIvaId())) {
            $error->addError(100, 'GralCondicionIva', 'gral_condicion_iva_id');
        }

        // ---------------------------------------------------------------------
        // razon social
        // ---------------------------------------------------------------------
        if (!Ctrl::esVacio($this->getRazonSocial())) {
            if (Ctrl::esMaxCaracteres(100, $this->getRazonSocial())) {
                $error->addError(505, 'Razon Social', 'razon_social');
            } else {
                $o = self::getOxRazonSocial($this->getRazonSocial());
                if ($o && $o->getId() != $this->getId()) {
                    $error->addError(140, 'Razon Social', 'razon_social');
                }
            }
        } else {
            $error->addError(100, 'Razon Social', 'razon_social');
        }

        // ---------------------------------------------------------------------
        // localidad
        // ---------------------------------------------------------------------
        if (Ctrl::esNull($this->getGeoLocalidadId())) {
            $error->addError(100, 'Localidad', 'geo_localidad_id');
        } else {

            // -----------------------------------------------------------------
            // cuit
            // -----------------------------------------------------------------
            if (!Ctrl::esVacio($this->getCuit())) {
                if (Ctrl::esMaxCaracteres(100, $this->getCuit())) {
                    $error->addError(505, 'CUIT', 'cuit');
                } else {
                    $o = self::getOxCuit($this->getCuit());
                    if ($o && $o->getId() != $this->getId()) {
                        $error->addError('CUIT vinculado a "' . $o->getDescripcion() . '"', 'CUIT', 'cuit');
                    } else {

                        // -----------------------------------------------------
                        // solo para ARGENTINA
                        // -----------------------------------------------------
                        $geo_pais = $this->getGeoLocalidad()->getGeoProvincia()->getGeoPais();
                        if ($geo_pais && $geo_pais->getCodigo() == 'ARGENTINA') {
                            // -------------------------------------------------
                            // se controla formato del CUIT
                            // -------------------------------------------------
                            if (!Ctrl::esCuitValido($this->getCuit())) {
                                $error->addError('Formato de CUIT Invalido', 'CUIT', 'cuit');
                            }
                        }
                    }
                }
            } else {
                $error->addError(100, 'CUIT', 'cuit');
            }
        }

        return $error;
    }

    /**
     * Metodo que retorna el array para mostrar en el ADM
     * @return array
     */
    public function getArrDescripcionExtendidaParaBackend() {
        $array = array();

        $array = array(
            'prv_tipo' => array(
                'label' => 'Tipo',
                'dato' => $this->getPrvTipo()->getDescripcion(),
            ),
            'gral_tipo_personeria' => array(
                'label' => 'Tipo Pers',
                'dato' => $this->getGralTipoPersoneria()->getDescripcion(),
            ),
            'cli_categoria' => array(
                'label' => 'Categoria',
                'dato' => $this->getPrvCategoria()->getDescripcion(),
            ),
            'cli_grupo' => array(
                'label' => 'Grupo',
                'dato' => $this->getPrvGrupo()->getDescripcion(),
            ),
            'razon_social' => array(
                'label' => 'Raz Social',
                'dato' => $this->getRazonSocial(),
            ),
            'email' => array(
                'label' => 'Email',
                'dato' => $this->getEmail(),
            ),
        );

        return $array;
    }

    /**
     * Metodo que sobreescribe el metodo de clase base
     */
    public function saveDesdeBackend() {

        if ($this->getCodigo() == '') {
            $codigo = $this->getDescripcion();
            $codigo = Gral::getStringSaneadoSinCaracteresEspeciales($codigo);
            $this->setCodigo($codigo);
        }

        parent::saveDesdeBackend();
        /*
          if($this->getGeneraUsuario()){
          $this->setGenerarUsuarioParaPdeCentroRecepcion();
          }
         */
    }

    /**
     * Metodo que genera automaticamente un usuario para el proveedor
     */
    public function setGenerarUsuarioParaPdeCentroRecepcion() {
        return;

        $gral_lenguaje = GralLenguaje::getOxCodigo('es');
        $us_grupo_proveedor = UsGrupo::getOxCodigo(UsGrupo::CENTRO_PEDIDO_PROVEEDOR);

        $us_usuario = $this->getUsUsuarioXPrvProveedorUsUsuario();
        if (!$us_usuario) {
            $us_usuario = new UsUsuario();
            $us_usuario->setGralLenguajeId($gral_lenguaje->getId());
            $us_usuario->setApellido($this->getDescripcion());
            $us_usuario->setNombre('Prv');
            $us_usuario->setUsuario($this->getCodigo());
            $us_usuario->setEmail($this->getEmail());
            $us_usuario->setEstado(1);
            $us_usuario->setActivado(1);
            $us_usuario->setAbsoluto(0);
            $us_usuario->saveDesdeBackend();

            // inicializacion de clave, al crear el usuario: clave = usuario.
            $clave_actual = $us_usuario->getClaveActual();
            if (!$clave_actual) {
                $clave = $us_usuario->getUsuario();
                $clave = ucfirst($clave);
                $clave = $clave . rand(0, 999);

                $us_clave = $us_usuario->setNuevaClave($clave);
                $us_clave->setObservacion($clave);
                $us_clave->save();
            }

            // se vincula el usuario con el proveedor
            $prv_proveedor_us_usuario = new PrvProveedorUsUsuario();
            $prv_proveedor_us_usuario->setUsUsuarioId($us_usuario->getId());
            $prv_proveedor_us_usuario->setPrvProveedorId($this->getId());
            $prv_proveedor_us_usuario->save();

            // se vincula el usuario con el grupo
            $us_agrupado = new UsAgrupado();
            $us_agrupado->setUsUsuarioId($us_usuario->getId());
            $us_agrupado->setUsGrupoId($us_grupo_proveedor->getId());
            $us_agrupado->save();
        }
    }

    /**
     * Metodo que retorna la descripcion geo del proveedor
     * @return type
     */
    public function getGeoLocalidadProvinciaPaisDescripcion() {
        $texto = '';
        $texto .= $this->getGeoLocalidad()->getDescripcion() . ', ';
        $texto .= $this->getGeoLocalidad()->getGeoProvincia()->getDescripcion() . ', ';
        $texto .= $this->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion();

        return $texto;
    }

    /**
     * Metodo que retorna el email principal del proveedor
     * @return string
     */
    public function getEmail_OLD() {
        $email = '';
        $prv_email = $this->getPrvEmail();
        if ($prv_email) {
            $email = $this->getPrvEmail()->getDescripcion();
        }

        return $email;
    }

    /**
     * Metodo que retorna el ceular principal del proveedor
     * @return string
     */
    public function getCelular_OLD() {
        $telefono = '';
        $prv_telefono = $this->getPrvTelefono();
        if ($prv_telefono) {
            $telefono = $prv_telefono->getDescripcion();
        }

        return $telefono;
    }

    /**
     * Metodo que retorna el telefono principal del proveedor
     * @return string
     */
    public function getTelefono_OLD() {
        $telefono = '';
        $prv_telefono = $this->getPrvTelefono();
        if ($prv_telefono) {
            $telefono = $prv_telefono->getDescripcion();
        }

        return $telefono;
    }

    /**
     * Metodo que retorna el domicilio principal del proveedor
     * @return string
     */
    public function getDomicilio() {
        $domicilio = '';
        $prv_domicilio = $this->getPrvDomicilio();
        if ($prv_domicilio) {
            $domicilio = $prv_domicilio->getDescripcion();
        }

        return $domicilio;
    }

    /**
     * Metodo que retorna los pedidos realizados al proveedor por un insumo en particular
     * @param type $ins_insumo_id
     * @return type
     */
    public function getPdePedidosDelProveedorXInsInsumo($ins_insumo_id) {
        $c = new Criterio();
        $c->add(PdePedido::GEN_ATTR_INS_INSUMO_ID, $ins_insumo_id, Criterio::IGUAL);
        $c->add(PdePedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PdePedido::GEN_TABLA);
        $c->addRealJoin(PdePedidoPrvProveedor::GEN_TABLA, PdePedidoPrvProveedor::GEN_ATTR_PDE_PEDIDO_ID, PdePedido::GEN_ATTR_ID);
        $c->setCriterios();

        $os = PdePedido::getPdePedidos(null, $c);
        return $os;
    }

    /**
     * Metodo que retorna las cotizaciones realizadas por el proveedor por un insumo en particular
     * @param type $ins_insumo_id
     * @return type
     */
    public function getPdeCotizacionsDelProveedorXInsInsumo($ins_insumo_id) {
        $c = new Criterio();
        $c->add(PdeCotizacion::GEN_ATTR_INS_INSUMO_ID, $ins_insumo_id, Criterio::IGUAL);
        $c->add(PdeCotizacion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PdeCotizacion::GEN_TABLA);
        $c->setCriterios();

        $os = PdeCotizacion::getPdeCotizacions(null, $c);
        return $os;
    }

    /**
     * Metodo que retorna las compras realizadas por el proveedor por un insumo en particular
     * @param type $ins_insumo_id
     * @return type
     */
    public function getPdeOcsDelProveedorXInsInsumo($ins_insumo_id) {
        $c = new Criterio();
        $c->add(PdeOc::GEN_ATTR_INS_INSUMO_ID, $ins_insumo_id, Criterio::IGUAL);
        $c->add(PdeOc::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PdeOc::GEN_TABLA);
        $c->setCriterios();

        $os = PdeOc::getPdeOcs(null, $c);
        return $os;
    }

    /**
     * Metodo que retorna los reclamos de ordenes de compra realizadas por el proveedor por un insumo en particular
     * @param type $ins_insumo_id
     * @return type
     */
    public function getPdeOcReclamosDelProveedorXInsInsumo($ins_insumo_id) {
        $c = new Criterio();
        $c->add(PdeOc::GEN_ATTR_INS_INSUMO_ID, $ins_insumo_id, Criterio::IGUAL);
        $c->add(PdeOcReclamo::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(PdeOcReclamo::GEN_TABLA);
        $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_ID, PdeOcReclamo::GEN_ATTR_PDE_OC_ID);
        $c->setCriterios();

        $os = PdeOcReclamo::getPdeOcReclamos(null, $c);
        return $os;
    }

    static function getPrvProveedorsXPalabra($palabra) {
        $c = new Criterio();
        $c->add(PrvProveedor::GEN_ATTR_DESCRIPCION, $palabra, Criterio::LIKE);
        $c->add(PrvEmail::GEN_ATTR_DESCRIPCION, $palabra, Criterio::LIKE, false, Criterio::_OR);
        $c->addTabla(PrvProveedor::GEN_TABLA);
        $c->addRealJoin(PrvEmail::GEN_TABLA, PrvEmail::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID, 'LEFT JOIN');
        $c->addOrden(PrvProveedor::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $c->setCriterios();

        $prv_proveedors = PrvProveedor::getPrvProveedors(null, $c);
        return $prv_proveedors;
    }

    static function getCuerpoEmailDatosUsuario($prv_proveedor, $us_usuario, $us_clave) {
        $msg = '
        <body>
            <table width="800" border="0" align="center">
              <tr>
                <td>
                        <img src="' . Gral::getPath('path_http_publico') . 'mods/proveedores/mailing/header_MECANO_CDN.jpg" />
                </td>
              </tr>
              <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-size:13px; padding:20px; background-color: #f9f9f9;">

                    <h3>Estimado "' . $prv_proveedor->getDescripcion() . '"</h3>

                    <p><strong>Crucero del Norte (CDN)</strong>, le envía los datos correspondientes a su usuario para ingresar al Sistema de Cotizaciones y Compras a Proveedores.</p>

                    <ul style="margin:5px; padding:5px;">
                        <li>Acceso: <a href="' . Gral::getPath('path_http_publico') . 'mods/proveedores/login.php">' . Gral::getPath('path_http_publico') . 'mods/proveedores/login.php</a></li>
                        <li>Usuario: <strong>' . $us_usuario->getUsuario() . '</strong></li>
                        <li>Clave: <strong>' . $us_clave->getObservacion() . '</strong></li>
                    </ul>

                    <br />
                    <p>Le comentamos que inicialmente esta herramienta se utilizará para cotizaciones y compras vinculadas al área de mantenimiento de las unidades, ampliando paulatinamente hacia los demás rubros de proveedores.</p>
                    <p style="color:#C00"><strong>Importante</strong>: No copie ni reenvíe este correo ya que tiene información sensible sobre su cuenta de usuario.</p>
                    <p>Muchas gracias.</p>
                    <p>Atte.</p>
                    <p><strong>Crucero del Norte SRL</strong></p>

                </td>
              </tr>
                <td>
                    <img src="' . Gral::getPath('path_http_publico') . 'mods/proveedores/mailing/footer_MECANO_CDN.jpg" />
                </td>
            </table>

        </body>        
        ';

        return $msg;
    }

    public function enviarEmailDatosUsuario() {
        $prv_emails = $this->getPrvEmails(null, null, true);

        $us_usuario = $this->getUsUsuarioXPrvProveedorUsUsuario();
        $us_clave = $us_usuario->getClaveActual();

        if ($us_usuario) {
            $msg = self::getCuerpoEmailDatosUsuario($this, $us_usuario, $us_clave);

            //echo $msg;
            //return;

            include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

            if (!Mail::MAIL_ACTIVO)
                return false;

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = Mail::MAIL_SECURE_3;
            $mail->SMTPDebug = 2;
            $mail->CharSet = "UTF-8";

            $mail->Host = Mail::MAIL_SERVIDOR_ENVIO_3;
            $mail->Username = Mail::MAIL_CASILLA_USUARIO_3;
            $mail->Password = Mail::MAIL_PASS_ENVIO_3;
            $mail->Port = Mail::MAIL_PUERTO_ENVIO_3;

            $mail->From = Mail::MAIL_CASILLA_REMITENTE;
            $mail->FromName = 'Mecano Repuestos';

            foreach ($prv_emails as $prv_email) {
                $mail->AddAddress($prv_email->getDescripcion());
            }

            $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO);

            $mail->IsHTML(true);
            $mail->Subject = 'Mecano - Datos de Acceso del Proveedor ' . date('d/m/Y H:i');

            $mail->Body = $msg;
            $exito = $mail->Send();

            return $exito;
        }
    }

    /* Metodo filtrado para select considerando credenciales de usuario */

    static function getPrvProveedorsCmbFxCredencial($paginador = null, $criterio = null) {
        $arr_pde_centro_pedido_ids = PdeCentroPedido::getArrayPdeCentroPedidoIdsXCredencial();
        $string_pde_centro_pedido_ids = '(0)';
        if (is_array($arr_pde_centro_pedido_ids)) {
            $string_pde_centro_pedido_ids = '(' . implode(',', $arr_pde_centro_pedido_ids) . ')';
        }

        $criterio = new Criterio();
        $criterio->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->add(PdeCentroPedido::GEN_ATTR_ID, $string_pde_centro_pedido_ids, Criterio::IN);
        $criterio->addTabla(PrvProveedor::GEN_TABLA);
        $criterio->addRealJoin(PdeCentroPedidoPrvProveedor::GEN_TABLA, PdeCentroPedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
        $criterio->addRealJoin(PdeCentroPedido::GEN_TABLA, PdeCentroPedido::GEN_ATTR_ID, PdeCentroPedidoPrvProveedor::GEN_ATTR_PDE_CENTRO_PEDIDO_ID);
        $criterio->addOrden(PrvProveedor::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->setCriterios();

        $col = PrvProveedor::getPrvProveedors($paginador, $criterio);
        //Gral::prr($col); exit;

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

    static function getArrayPrvProveedorIdsXCredencial($paginador = null, $criterio = null) {
        $arr_pde_centro_pedido_ids = PdeCentroPedido::getArrayPdeCentroPedidoIdsXCredencial();
        $string_pde_centro_pedido_ids = '(0)';
        if (is_array($arr_pde_centro_pedido_ids)) {
            $string_pde_centro_pedido_ids = '(' . implode(',', $arr_pde_centro_pedido_ids) . ')';
        }

        $criterio = new Criterio();
        $criterio->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $criterio->add(PdeCentroPedido::GEN_ATTR_ID, $string_pde_centro_pedido_ids, Criterio::IN);
        $criterio->addTabla(PrvProveedor::GEN_TABLA);
        $criterio->addRealJoin(PdeCentroPedidoPrvProveedor::GEN_TABLA, PdeCentroPedidoPrvProveedor::GEN_ATTR_PRV_PROVEEDOR_ID, PrvProveedor::GEN_ATTR_ID);
        $criterio->addRealJoin(PdeCentroPedido::GEN_TABLA, PdeCentroPedido::GEN_ATTR_ID, PdeCentroPedidoPrvProveedor::GEN_ATTR_PDE_CENTRO_PEDIDO_ID);
        $criterio->addOrden(PrvProveedor::GEN_ATTR_DESCRIPCION, Criterio::_ASC);
        $criterio->setCriterios();

        $col = PrvProveedor::getPrvProveedors($paginador, $criterio);

        $arr = array();
        $user = UsUsuario::autenticado();
        foreach ($col as $o) {
            $arr[] = $o->getId();
        }
        return $arr;
    }

    /*
      Autor: Pablo Rosen
      Fecha: 22/07/2016 11:31 hs.
      Return: UsUsuario

      Metodo que retorna el UsUsuario que corresponde al PrvProveedor
     */

    public function getUsUsuario() {
        $us_usuario = $this->getUsUsuarioXPrvProveedorUsUsuario();
        return $us_usuario;
    }

    public function getPdeOcsActivaFacturas($palabras = '') {
        $c = new Criterio();

        // las recepciones del proveedor
        $c->add(PrvProveedor::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        //$c->add(PdeOcTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
        $c->add(PdeOcTipoEstado::GEN_ATTR_CODIGO, PdeOcTipoEstado::TIPO_ESTADO_ANULADO, Criterio::DISTINTO);

        if (trim($palabras) != '') {
            $arr_palabras = explode(';', $palabras);
            //Gral::prr($arr_palabras);

            if (count($arr_palabras) > 0) {
                $c->addInicioSubconsulta();
                $c->add(PdeOc::GEN_ATTR_ID, 0, Criterio::IGUAL, false, Criterio::_AND);
                foreach ($arr_palabras as $palabra) {
                    if (trim($palabra) != '') {
                        $c->add(InsInsumo::GEN_ATTR_CLAVES, $palabra, Criterio::LIKE, false, Criterio::_OR);
                        $c->add(PrvInsumo::GEN_ATTR_DESCRIPCION, $palabra, Criterio::LIKE, false, Criterio::_OR);
                        $c->add(PrvInsumo::GEN_ATTR_CODIGO_PROVEEDOR, $palabra, Criterio::LIKE, false, Criterio::_OR);
                        $c->add(InsInsumoPrvProveedor::GEN_ATTR_CODIGO, $palabra, Criterio::LIKE, false, Criterio::_OR);
                    }
                }
                $c->addFinSubconsulta();
            }
        }

        $c->addTabla(PdeOc::GEN_TABLA);
        $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, PdeOc::GEN_ATTR_PRV_PROVEEDOR_ID);
        $c->addRealJoin(InsInsumo::GEN_TABLA, InsInsumo::GEN_ATTR_ID, PdeOc::GEN_ATTR_INS_INSUMO_ID, 'LEFT JOIN');
        $c->addRealJoin(PrvInsumo::GEN_TABLA, PrvInsumo::GEN_ATTR_ID, PdeOc::GEN_ATTR_PRV_INSUMO_ID, 'LEFT JOIN');
        $c->addRealJoin(InsInsumoPrvProveedor::GEN_TABLA, InsInsumoPrvProveedor::GEN_ATTR_INS_INSUMO_ID, InsInsumo::GEN_ATTR_ID, 'LEFT JOIN');

        $c->addRealJoin(PdeOcTipoEstado::GEN_TABLA, PdeOcTipoEstado::GEN_ATTR_ID, PdeOc::GEN_ATTR_PDE_OC_TIPO_ESTADO_ID);

        $c->addOrden(PdeOc::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        //$p = new Paginador(40, 1);
        $p = null;

        $pde_ocs = PdeOc::getPdeOcs($p, $c);
        return $pde_ocs;
    }

    public function getPdeRecepcionsActivaFacturas() {
        $c = new Criterio();

        // las recepciones del proveedor
        $c->add(PrvProveedor::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);

        $c->addTabla(PdeRecepcion::GEN_TABLA);
        $c->addRealJoin(PdeOc::GEN_TABLA, PdeOc::GEN_ATTR_ID, PdeRecepcion::GEN_ATTR_PDE_OC_ID);
        $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, PdeOc::GEN_ATTR_PRV_PROVEEDOR_ID);

        $c->addOrden(PdeRecepcion::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $pde_recepcions = PdeRecepcion::getPdeRecepcions(null, $c);
        return $pde_recepcions;
    }

    public function getPdeComprobantesActivaOrdenPagos() {

        // ---------------------------------------------------------------------
        // las facturas del proveedor
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(PrvProveedor::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeFacturaTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);

        $c->addTabla(PdeFactura::GEN_TABLA);
        $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, PdeFactura::GEN_ATTR_PRV_PROVEEDOR_ID);

        $c->addRealJoin(PdeFacturaTipoEstado::GEN_TABLA, PdeFacturaTipoEstado::GEN_ATTR_ID, PdeFactura::GEN_ATTR_PDE_FACTURA_TIPO_ESTADO_ID);

        $c->addOrden(PdeFactura::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $pde_facturas = PdeFactura::getPdeFacturas(null, $c);
        //Gral::prr($pde_facturas);
        // ---------------------------------------------------------------------
        // las notas de debito del proveedor
        // ---------------------------------------------------------------------
        $c = new Criterio();
        $c->add(PrvProveedor::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeNotaDebitoTipoEstado::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);

        $c->addTabla(PdeNotaDebito::GEN_TABLA);
        $c->addRealJoin(PrvProveedor::GEN_TABLA, PrvProveedor::GEN_ATTR_ID, PdeNotaDebito::GEN_ATTR_PRV_PROVEEDOR_ID);

        $c->addRealJoin(PdeNotaDebitoTipoEstado::GEN_TABLA, PdeNotaDebitoTipoEstado::GEN_ATTR_ID, PdeNotaDebito::GEN_ATTR_PDE_NOTA_DEBITO_TIPO_ESTADO_ID);

        $c->addOrden(PdeNotaDebito::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();

        $pde_nota_debitos = PdeNotaDebito::getPdeNotaDebitos(null, $c);
        //Gral::prr($pde_nota_debitos);

        $pde_comprobantes = array_merge($pde_facturas, $pde_nota_debitos);
        //Gral::prr($pde_comprobantes);

        return $pde_comprobantes;
    }

    static function getPrvProveedorsCmbXPrvGrupo($prv_proveedor, $estado = true) {
        //$prv_grupo_id = $prv_proveedor->getPrvGrupoId();
        $criterio = new Criterio();

        if ($estado) {
            //$criterio->add(PrvProveedor::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        }

        //$criterio->add(PrvProveedor::GEN_ATTR_CLI_GRUPO_ID, $prv_grupo_id, Criterio::IGUAL);
        $criterio->add(PrvProveedor::GEN_ATTR_ID, $prv_proveedor->getId(), Criterio::IGUAL, false, Criterio::_OR);
        $criterio->addTabla(PrvProveedor::GEN_TABLA);
        $criterio->setCriterios();

        $arr = self::getPrvProveedorsCmbF(null, $criterio);

        return $arr;
    }

    public function getSaldoDeCuentaEnFecha($gral_empresa_id, $fecha, $pde_comprobantes = false) {
        $fecha_desde = '2018-01-01';
        $fecha_hasta = $fecha;
        $gral_mes_id = false;
        $anio = false;
        $prv_proveedor_id = $this->getId();
        $incluir_recibos = true;

        if (!$pde_comprobantes) {
            $pde_comprobantes = PdeComprobante::getPdeComprobantes($gral_empresa_id, $fecha_desde, $fecha_hasta, $gral_mes_id, $anio, $prv_proveedor_id, $incluir_recibos);
        }

        foreach ($pde_comprobantes as $pde_comprobante) {
            $class = get_class($pde_comprobante);
            switch ($class) {
                case 'PdeFactura': $pde_facturas[] = $pde_comprobante;
                    break;
                case 'PdeNotaDebito': $pde_nota_debitos[] = $pde_comprobante;
                    break;
                case 'PdeNotaCredito': $pde_nota_creditos[] = $pde_comprobante;
                    break;
                case 'PdeRecibo': $pde_recibos[] = $pde_comprobante;
                    break;
            }
        }

        $arr_comprobante_totales = PdeComprobante::getArrTotales($pde_facturas, $pde_nota_debitos, $pde_nota_creditos, $pde_recibos);
        //Gral::prr($arr_comprobante_totales);
        return $arr_comprobante_totales;
    }

    public function getSaldoDeCuentaEnFechaImporte($gral_empresa_id, $fecha, $pde_comprobantes = false) {
        $importe_total_saldo_inicial_en_fecha = 0;

        $arr_comprobante_totales_saldo_a_fecha = $this->getSaldoDeCuentaEnFecha($gral_empresa_id, $fecha, $pde_comprobantes);
        //Gral::prr($arr_comprobante_totales_saldo_a_fecha);

        $importe_total_debe_saldo_en_fecha = $arr_comprobante_totales_saldo_a_fecha['RESUMEN']['IMPORTE_SALDO_DEBE'];
        $importe_total_haber_saldo_en_fecha = $arr_comprobante_totales_saldo_a_fecha['RESUMEN']['IMPORTE_SALDO_HABER'];

        if ($importe_total_debe_saldo_en_fecha != 0) {
            $importe_total_saldo_inicial_en_fecha = ($importe_total_debe_saldo_en_fecha);
        } elseif ($importe_total_haber_saldo_en_fecha != 0) {
            $importe_total_saldo_inicial_en_fecha = ($importe_total_haber_saldo_en_fecha) * (-1);
        }

        return $importe_total_saldo_inicial_en_fecha;
    }

    /**
     * Autor: Pablo Rosen
     * Creado: 03/06/2021 20:21
     * Metodo que retorna un booleano si el proveedor tiene una exencion activa para el tributo indicado
     * @param type $pde_tributo
     * @return boolean
     */
    public function getPdeTributoExencionActiva($pde_tributo) {
        $c = new Criterio();
        $c->add(PdeTributoExencion::GEN_ATTR_PRV_PROVEEDOR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeTributoExencion::GEN_ATTR_PDE_TRIBUTO_ID, $pde_tributo->getId(), Criterio::IGUAL);
        $c->add(PdeTributoExencion::GEN_ATTR_FECHA_INICIO, date('Y-m-d'), Criterio::MENORIGUAL);
        $c->add(PdeTributoExencion::GEN_ATTR_FECHA_FIN, date('Y-m-d'), Criterio::MAYORIGUAL);
        $c->add(PdeTributoExencion::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(PdeTributoExencion::GEN_TABLA);
        $c->addOrden(PdeTributoExencion::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $pde_tributo_exencions = PdeTributoExencion::getPdeTributoExencions($p, $c);
        foreach ($pde_tributo_exencions as $pde_tributo_exencion) {
            return $pde_tributo_exencion;
        }
        return false;
    }

    static function getInfoBtnVolver($indice = false) {
        $array = array(
            'url' => 'prv_proveedor_gestion.php',
            'label' => 'Volver al Listado',
        );

        return ($indice) ? $array[$indice] : $array;
    }


}

?>