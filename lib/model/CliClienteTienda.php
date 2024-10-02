<?php
require_once "base/BCliClienteTienda.php";

class CliClienteTienda extends BCliClienteTienda {

    const PREFIJO_CLIENTE          = 'CLI-TIE-';
    const CLIENTE_CONSUMIDOR_FINAL = 'CONSUMIDOR_FINAL';

    public function getDescripcion_OLD() {
        $descripcion = '';
        if ($this->getNombre() != '') {
            $descripcion = $this->getNombre() . ' ' . $this->getApellido();
        }
        else {
            $descripcion = $this->getApellido();
        }
        return $descripcion;
    }
    
    /**
    * Metodo que retorna el array para mostrar en el ADM
    * @return array
    */
    public function getArrDescripcionExtendidaParaBackend() {
        $array = array();

        $array = array(
            'gral_tipo_personeria' => array(
                'label' => 'Tipo Pers',
                'dato' => $this->getGralTipoPersoneria()->getDescripcion(),
            ),
            'razon_social' => array(
                'label' => 'Raz Social',
                'dato' => $this->getRazonSocial(),
            ),
            'geo_localidad' => array(
                'label' => 'Localidad',
                'dato' => $this->getGeoLocalidad()->getDescripcionFull(),
            ),
            'observacion' => array(
                'label' => 'Obs',
                'dato' => $this->getObservacion(),
            ),
        );

        return $array;
    }    

    public function setNuevaClave($clave) {
        $ejec = new Ejecucion();
        $sql  = 'UPDATE cli_cliente_tienda_clave SET estado = 0 WHERE cli_cliente_tienda_id = ' . $this->getId();
        $ejec->setSql($sql);
        $ejec->execute();

        $clave_codificada = md5($clave);

        $cli_cliente_tienda_clave = new CliClienteTiendaClave();
        $cli_cliente_tienda_clave->setCliClienteTiendaId($this->getId());
        $cli_cliente_tienda_clave->setClave($clave_codificada);
        $cli_cliente_tienda_clave->setEstado(1);
        $cli_cliente_tienda_clave->save();

        return $cli_cliente_tienda_clave;
    }

    public function getClaveActual() {
        $c      = new Criterio();
        $c->add(CliClienteTiendaClave::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(CliClienteTiendaClave::GEN_TABLA);
        $c->setCriterios();
        $claves = $this->getCliClienteTiendaClaves(null, $c);

        foreach ($claves as $clave) {
            return $clave;
        }
        return false;
    }

    public function getInsTipoListaPrecioParaClienteTienda() {
        $ins_tipo_lista_precio_cliente = InsTipoListaPrecio::getOxCodigo(InsTipoListaPrecio::TIPO_PRECIO_VENTA_ONLINE);
        if ($this->getCliClienteId() != 'null') {

            // ------------------------------------------------------------------
            // si tiene lista de precio directa por cliente
            // ------------------------------------------------------------------
            $ins_tipo_lista_precio_cliente = $this->getCliCliente()->getInsTipoListaPrecioXCliClienteInsTipoListaPrecio();
            if ($ins_tipo_lista_precio_cliente) {
                return $ins_tipo_lista_precio_cliente;
            }
            
            // ------------------------------------------------------------------
            // si tiene lista de precio heredada por categoria
            // ------------------------------------------------------------------
            $cli_categoria = $this->getCliCliente()->getCliCategoria();
            $ins_tipo_lista_precio_cliente = $cli_categoria->getInsTipoListaPrecioXCliCategoriaInsTipoListaPrecio();
            if ($ins_tipo_lista_precio_cliente) {
                return $ins_tipo_lista_precio_cliente;
            }
            
        }
        return $ins_tipo_lista_precio_cliente;
    }

    /**
     * [setRegistrarClienteTiendaNuevoDesdeSitio description]
     * @param [type] $nombre                  [description]
     * @param [type] $apellido                [description]
     * @param [type] $razon_social            [description]
     * @param [type] $cuit                    [description]
     * @param [type] $email                   [description]
     * @param [type] $clave                   [description]
     * @param [type] $telefono                [description]
     * @param [type] $gral_tipo_personeria_id [description]
     * @param [type] $gral_condicion_iva_id   [description]
     * @param [type] $geo_localidad_id        [description]
     * @param [type] $observacion             [description]
     */
    static function setRegistrarClienteTiendaNuevoDesdeSitio($txt_descripcion, $razon_social, $gral_tipo_documento_id, $cuit, $email, $clave, $telefono, $telefono_whatsapp, $gral_tipo_personeria_id, $gral_condicion_iva_id, $geo_localidad_id, $domicilio, $observacion) {

        // ----------------------------------------------------------------------
        //registrar cli_cliente_tienda
        // ----------------------------------------------------------------------
        $cli_cliente_tienda = new CliClienteTienda();
        $cli_cliente_tienda->setDescripcion($txt_descripcion);
        //$cli_cliente_tienda->setNombre($nombre);
        //$cli_cliente_tienda->setApellido($apellido);
        $cli_cliente_tienda->setRazonSocial($razon_social);
        $cli_cliente_tienda->setGralTipoDocumentoId($gral_tipo_documento_id);
        $cli_cliente_tienda->setCuit($cuit);
        $cli_cliente_tienda->setEmail($email);
        $cli_cliente_tienda->setTelefono($telefono);
        $cli_cliente_tienda->setTelefonoWhatsapp($telefono_whatsapp);
        $cli_cliente_tienda->setDomicilioLegal($domicilio);
        $cli_cliente_tienda->setGralTipoPersoneriaId($gral_tipo_personeria_id);
        $cli_cliente_tienda->setGralCondicionIvaId($gral_condicion_iva_id);
        $cli_cliente_tienda->setGeoLocalidadId($geo_localidad_id);
        $cli_cliente_tienda->setObservacion($observacion);
        $cli_cliente_tienda->setEstado(1);
        $cli_cliente_tienda->setUsuario(strtolower($email));
        $cli_cliente_tienda->save();

        $cli_cliente_tienda->setCodigo(self::PREFIJO_CLIENTE . str_pad($cli_cliente_tienda->getId(), 8, 0, STR_PAD_LEFT));
        $cli_cliente_tienda->save();

        // ---------------------------------------------------------------------
        // se inicializa clave
        // ---------------------------------------------------------------------
        $cli_cliente_tienda->setNuevaClave($clave);

        // ---------------------------------------------------------------------
        // se envia correo de registro a empresa
        // ---------------------------------------------------------------------
        $cli_cliente_tienda->enviarCorreoRegistroAEmpresa();
        // ---------------------------------------------------------------------
        // se envia correo de registro a cliente
        // ---------------------------------------------------------------------
        $cli_cliente_tienda->enviarCorreoRegistroACliente();


        return $cli_cliente_tienda;
    }

    /**
     * setEditarClienteTiendaDesdeSitio Edita datos de un CliClienteTienda
     * @param string $descripcion             [description]
     * @param string $razon_social            [description]
     * @param string $cuit                    [description]
     * @param string $email                   [description]
     * @param string $telefono                [description]
     * @param string $telefono_whatsapp       [description]
     * @param int $gral_tipo_personeria_id    [description]
     * @param int $gral_condicion_iva_id      [description]
     * @param int $geo_localidad_id           [description]
     * @param string $domicilio               [description]
     * @param string $observacion             [description]
     * @return object CliClienteTienda El objeto CliClienteTienda editado
     */
    public function setEditarClienteTiendaDesdeSitio($descripcion, $razon_social, $gral_tipo_documento_id, $cuit, $email, $telefono, $telefono_whatsapp, $gral_tipo_personeria_id, $gral_condicion_iva_id, $geo_localidad_id, $domicilio, $observacion) {
        $this->setDescripcion($descripcion);
        //$this->setNombre($nombre);
        //$this->setApellido($apellido);
        $this->setRazonSocial($razon_social);
        $this->setGralTipoDocumentoId($gral_tipo_documento_id);
        $this->setCuit($cuit);
        $this->setEmail(strtolower($email));
        $this->setTelefono($telefono);
        $this->setTelefonoWhatsapp($telefono_whatsapp);
        $this->setDomicilioLegal($domicilio);
        $this->setGralTipoPersoneriaId($gral_tipo_personeria_id);
        $this->setGralCondicionIvaId($gral_condicion_iva_id);
        $this->setGeoLocalidadId($geo_localidad_id);
        $this->setObservacion($observacion);

        $this->setUsuario(strtolower($email));
        $this->setVerificar(1);
        $this->save();

        // ---------------------------------------------------------------------
        // se envia correo de registro a empresa
        // ---------------------------------------------------------------------
        //$cli_cliente_tienda->enviarCorreoRegistroAEmpresa();
        // ---------------------------------------------------------------------
        // se envia correo de registro a cliente
        // ---------------------------------------------------------------------
        //$cli_cliente_tienda->enviarCorreoRegistroACliente();


        return $this;
    }

    /**
     * [setEditarClienteTiendaClaveDesdeSitio description]
     * @param [type] $clave [description]
     */
    public function setEditarClienteTiendaClaveDesdeSitio($clave) {
        $this->setNuevaClave($clave);

        // ---------------------------------------------------------------------
        // se envia correo de registro a empresa
        // ---------------------------------------------------------------------
        //$cli_cliente_tienda->enviarCorreoRegistroAEmpresa();
        // ---------------------------------------------------------------------
        // se envia correo de registro a cliente
        // ---------------------------------------------------------------------
        //$cli_cliente_tienda->enviarCorreoRegistroACliente();

        return $this;
    }

    
    /**
     * setCliClienteDesdeCliClienteTienda Crea un CLiCliente a partir de un CliClienteTienda
     *
     * @param int $cli_categoria_id
     * @return object $cli_cliente El objeto CliCliente creado
     */
    public function setCliClienteDesdeCliClienteTienda($cli_categoria_id)
    {
        $descripcion = $this->getDescripcion();
        $nombre = $this->getNombre();
        $apellido = $this->getApellido();
        $razon_social = $this->getRazonSocial();
        $gral_tipo_personeria_id = $this->getGralTipoPersoneriaId();
        $gral_condicion_iva_id = $this->getGralCondicionIvaId();
        $cuit = $this->getCuit();
        $email = $this->getEmail();
        $telefono = $this->getTelefono();
        $domicilio = $this->getDomicilioLegal();
        $geo_localidad_id = $this->getGeoLocalidadId();
        $codigo_postal = $this->getCodigoPostal();
        $gral_tipo_documento_id =  $this->getGralTipoDocumentoId();

        $cli_cliente = new CliCliente();
        $cli_cliente->setDescripcion($descripcion);
        $cli_cliente->setRazonSocial($razon_social);
        $cli_cliente->setCuit($cuit);
        $cli_cliente->setEmail($email);
        $cli_cliente->setTelefono($telefono);
        $cli_cliente->setDomicilioLegal($domicilio);
        $cli_cliente->setGralTipoPersoneriaId($gral_tipo_personeria_id);
        $cli_cliente->setGralCondicionIvaId($gral_condicion_iva_id);
        $cli_cliente->setGralTipoDocumentoId($gral_tipo_documento_id);
        $cli_cliente->setGeoLocalidadId($geo_localidad_id);
        $cli_cliente->setCodigoPostal($codigo_postal);
        $cli_cliente->setCliCategoriaId($cli_categoria_id);
        
        $cli_cliente->setEstado(1);
        $cli_cliente->save();
        
        $cli_cliente->setCodigo(self::PREFIJO_CLIENTE . str_pad($cli_cliente->getId(), 8, 0, STR_PAD_LEFT));
        $this->setCliClienteId($cli_cliente->getId());
        $cli_cliente->saveDesdeBackend();

        // ---------------------------------------------------------------------
        // se envia correo de registro a cliente
        // ---------------------------------------------------------------------
        //$cli_cliente_tienda->enviarCorreoRegistroACliente();


        return $cli_cliente;
    }
    
    public function setVincularCliClienteTiendaConCliCliente($cli_cliente_id)
    {
        if($cli_cliente_id)
        {
            $cli_cliente = CliCliente::getOxId($cli_cliente_id);
            if($cli_cliente){
                $cli_centro_pedido = $cli_cliente->getCliCentroPedido();

                $this->setCliClienteId($cli_cliente_id);
                
                if($cli_centro_pedido){
                    $this->setCliCentroPedidoId($cli_centro_pedido->getId());
                }

                $this->save();
            }
        }
    }

    public function getVtaPresupuestosParaTienda() {
        $vta_presupuestos = array();
        $cli_cliente      = $this->getCliCliente();
        if ($cli_cliente->getId() != 'null') {
            $c = new Criterio();
            //$c->add(VtaPresupuestoTipoOrigen::GEN_ATTR_CODIGO, VtaPresupuestoTipoOrigen::TIPO_TIENDA, Criterio::IGUAL);
            //$c->add(VtaPresupuestoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
            $c->addTabla(VtaPresupuesto::GEN_TABLA);
            $c->addRealJoin(VtaPresupuestoTipoOrigen::GEN_TABLA, VtaPresupuestoTipoOrigen::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ORIGEN_ID);
            $c->addRealJoin(VtaPresupuestoTipoEstado::GEN_TABLA, VtaPresupuestoTipoEstado::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID);
            $c->addOrden(VtaPresupuesto::GEN_ATTR_ID, Criterio::_DESC);
            $c->setCriterios();

            $p = new Paginador(10, 1);
            $p = null;

            $vta_presupuestos = $cli_cliente->getVtaPresupuestos($p, $c);
        }
        else {
            $vta_presupuestos = $this->getVtaPresupuestosXVtaPresupuestoCliClienteTienda();
        }
        return $vta_presupuestos;
    }
    
    public function getVtaRemitosParaTienda() {
        $vta_remitos = array();
        $cli_cliente      = $this->getCliCliente();
        if ($cli_cliente->getId() != 'null') {

            $c = new Criterio();
            //$c->add(VtaRemitoTipoEstado::GEN_ATTR_ACTIVO, 1, Criterio::IGUAL);
            $c->addTabla(VtaRemito::GEN_TABLA);
            $c->addRealJoin(VtaRemitoTipoEstado::GEN_TABLA, VtaRemitoTipoEstado::GEN_ATTR_ID, VtaRemito::GEN_ATTR_VTA_REMITO_TIPO_ESTADO_ID);
            $c->addOrden(VtaRemito::GEN_ATTR_ID, Criterio::_DESC);
            $c->setCriterios();

            $p = new Paginador(10, 1);
            //$p = null;

            $vta_remitos = $cli_cliente->getVtaRemitos($p, $c);
        }
        return $vta_remitos;
    }
    
    public function getVtaFacturasParaTienda(){
        $cli_cliente = $this->getCliCliente();
        return $cli_cliente->getVtaFacturas();
    }

    public function getVtaNotaCreditosParaTienda(){
        $cli_cliente = $this->getCliCliente();
        return $cli_cliente->getVtaNotaCreditos();
    }

    public function getVtaNotaDebitosParaTienda(){
        $cli_cliente = $this->getCliCliente();
        return $cli_cliente->getVtaNotaDebitos();
    }

    public function getVtaRecibosParaTienda(){
        $cli_cliente = $this->getCliCliente();
        return $cli_cliente->getVtaRecibos();
    }


    /**
     * Envia correo de registro nuevo a empresa
     */
    public function enviarCorreoRegistroAEmpresa($enviar = true) {
        if (!Mail::MAIL_ACTIVO) {
            return false;
        }

        $mail_asunto = 'Nuevo Cliente Registrado en la Tienda ' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios     = str_replace(' ', '', $destinatarios);
        $destinatarios     = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param   = array(
            'cli_cliente_tienda_id' => $this->getId(),
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/TIENDA/index_cliente_registro_empresa.php";
        $msg     = Gral::get_include_contents($archivo, $param);

        if (!$enviar) {
            echo $msg;
            return;
        }

        $mail = new PHPMailer();

        try {
            //$mail->SetLanguage('es', 'language/');
            $mail->IsSMTP(); //indico a la clase que use SMTP
            $mail->SMTPAuth  = true;
            $mail->SMTPDebug = 0;
            if (Mail::MAIL_SECURE != '') {
                $mail->SMTPSecure = Mail::MAIL_SECURE;
            }
            $mail->CharSet = 'UTF-8';

            $mail->Host     = Mail::MAIL_SERVIDOR_ENVIO; // SMTP server
            $mail->Username = Mail::MAIL_CASILLA_USUARIO;
            $mail->Password = Mail::MAIL_PASS_ENVIO;
            $mail->Port     = Mail::MAIL_PUERTO_ENVIO;

            $mail->From     = Mail::MAIL_CASILLA_ENVIO;
            $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;
            $mail->AddReplyTo($this->getEmail());

            $mail->IsHTML(true);
            $mail->Subject = $mail_asunto;

            $mail->Body = $msg;

            $mail->AddAddress(Mail::MAIL_CASILLA_ALTAS_TIENDA);

            if (Mail::MAIL_CASILLA_AUDITORIA_ADMIN != '') {
                $mail->AddBCC(Mail::MAIL_CASILLA_AUDITORIA_ADMIN);
            }

            $mail->Timeout = 20;

            $envio_ok = $mail->Send();

            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    /**
     * Envia correo de registro nuevo a cliente
     */
    public function enviarCorreoRegistroACliente($enviar = true) {
        if (!Mail::MAIL_ACTIVO) {
            return false;
        }

        $mail_asunto = 'Hemos registrado tu cuenta de cliente tienda con el codigo ' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios     = str_replace(' ', '', $destinatarios);
        $destinatarios     = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param   = array(
            'cli_cliente_tienda_id' => $this->getId(),
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/TIENDA/index_cliente_registro_cliente.php";
        $msg     = Gral::get_include_contents($archivo, $param);

        if (!$enviar) {
            echo $msg;
            return;
        }

        $mail = new PHPMailer();

        try {
            //$mail->SetLanguage('es', 'language/');
            $mail->IsSMTP(); //indico a la clase que use SMTP
            $mail->SMTPAuth  = true;
            $mail->SMTPDebug = 0;
            if (Mail::MAIL_SECURE != '') {
                $mail->SMTPSecure = Mail::MAIL_SECURE;
            }
            $mail->CharSet = 'UTF-8';

            $mail->Host     = Mail::MAIL_SERVIDOR_ENVIO; // SMTP server
            $mail->Username = Mail::MAIL_CASILLA_USUARIO;
            $mail->Password = Mail::MAIL_PASS_ENVIO;
            $mail->Port     = Mail::MAIL_PUERTO_ENVIO;

            $mail->From     = Mail::MAIL_CASILLA_ENVIO;
            $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;
            $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO_TIENDA);

            $mail->IsHTML(true);
            $mail->Subject = $mail_asunto;

            $mail->Body = $msg;

            $mail->AddAddress($this->getEmail());

            if (Mail::MAIL_CASILLA_AUDITORIA_ADMIN != '') {
                $mail->AddBCC(Mail::MAIL_CASILLA_AUDITORIA_ADMIN);
            }

            $mail->Timeout = 20;

            $envio_ok = $mail->Send();

            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    /**
     * Envia correo de registro nuevo a cliente
     */
    public function enviarCorreoCreacionCuentaACliente($enviar = true, $password) {
        if (!Mail::MAIL_ACTIVO) {
            return false;
        }

        $mail_asunto = 'Hemos habilitado tu cuenta de cliente tienda con el codigo ' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios     = str_replace(' ', '', $destinatarios);
        $destinatarios     = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param   = array(
            'cli_cliente_tienda_id' => $this->getId(),
            'password' => $password,
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/TIENDA/index_cliente_cuenta_habilitada.php";
        $msg     = Gral::get_include_contents($archivo, $param);

        if (!$enviar) {
            echo $msg;
            return;
        }

        $mail = new PHPMailer();

        try {
            //$mail->SetLanguage('es', 'language/');
            $mail->IsSMTP(); //indico a la clase que use SMTP
            $mail->SMTPAuth  = true;
            $mail->SMTPDebug = 0;
            if (Mail::MAIL_SECURE != '') {
                $mail->SMTPSecure = Mail::MAIL_SECURE;
            }
            $mail->CharSet = 'UTF-8';

            $mail->Host     = Mail::MAIL_SERVIDOR_ENVIO; // SMTP server
            $mail->Username = Mail::MAIL_CASILLA_USUARIO;
            $mail->Password = Mail::MAIL_PASS_ENVIO;
            $mail->Port     = Mail::MAIL_PUERTO_ENVIO;

            $mail->From     = Mail::MAIL_CASILLA_ENVIO;
            $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;
            $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO_TIENDA);

            $mail->IsHTML(true);
            $mail->Subject = $mail_asunto;

            $mail->Body = $msg;

            $mail->AddAddress($this->getEmail());

            if (Mail::MAIL_CASILLA_AUDITORIA_ADMIN != '') {
                $mail->AddBCC(Mail::MAIL_CASILLA_AUDITORIA_ADMIN);
            }

            $mail->Timeout = 20;

            $envio_ok = $mail->Send();

            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    /**
     * 
     * @creado_por Pablo Rosen
     * @creado 24/09/2019 18:07
     */
    public function setEnviarMailRecuperarClave() {

        // ---------------------------------------------------------------------
        // se envia correo de registro a cliente
        // ---------------------------------------------------------------------
        $this->enviarCorreoRecuperarACliente();

        return true;
    }

    /**
     * Envia correo de registro nuevo a cliente
     */
    public function enviarCorreoRecuperarACliente($enviar = true) {
        if (!Mail::MAIL_ACTIVO) {
            return false;
        }

        $mail_asunto = 'Recuperar Clave de Cliente en Tienda ' . $this->getCodigo() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $destinatarios     = str_replace(' ', '', $destinatarios);
        $destinatarios     = str_replace(',', ';', $destinatarios);
        $arr_destinatarios = explode(";", $destinatarios);

        $param   = array(
            'cli_cliente_tienda_id' => $this->getId(),
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/TIENDA/index_cliente_recuperar_clave.php";
        $msg     = Gral::get_include_contents($archivo, $param);

        if (!$enviar) {
            echo $msg;
            return;
        }

        $mail = new PHPMailer();

        try {
            //$mail->SetLanguage('es', 'language/');
            $mail->IsSMTP(); //indico a la clase que use SMTP
            $mail->SMTPAuth  = true;
            $mail->SMTPDebug = 0;
            if (Mail::MAIL_SECURE != '') {
                $mail->SMTPSecure = Mail::MAIL_SECURE;
            }
            $mail->CharSet = 'UTF-8';

            $mail->Host     = Mail::MAIL_SERVIDOR_ENVIO; // SMTP server
            $mail->Username = Mail::MAIL_CASILLA_USUARIO;
            $mail->Password = Mail::MAIL_PASS_ENVIO;
            $mail->Port     = Mail::MAIL_PUERTO_ENVIO;

            $mail->From     = Mail::MAIL_CASILLA_ENVIO;
            $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;
            $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO_TIENDA);

            $mail->IsHTML(true);
            $mail->Subject = $mail_asunto;

            $mail->Body = $msg;

            $mail->AddAddress($this->getEmail());

            if (Mail::MAIL_CASILLA_AUDITORIA_ADMIN != '') {
                $mail->AddBCC(Mail::MAIL_CASILLA_AUDITORIA_ADMIN);
            }

            $mail->Timeout = 20;

            $envio_ok = $mail->Send();

            return $envio_ok;
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }

        return false;
    }

    public function getEnlaceRecuperarClave() {
        $enlace = Gral::getPathHttpTienda() . 'mods/clientes/recuperar_clave.php?cid=' . $this->getId() . '&hash=' . $this->getHash();
        return $enlace;
    }

    public function getHash() {
        return md5($this->getCreado());
    }

    public function getUltimaConexionTienda() {

        $string_ultima_conection = 'No Ingreso';

        $c = new Criterio();
        $c->add(CliClienteTienda::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(CliClienteTiendaNavegacion::GEN_TABLA);
        $c->addRealJoin(CliClienteTienda::GEN_TABLA, CliClienteTienda::GEN_ATTR_ID, CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID);
        $c->addOrden(CliClienteTiendaNavegacion::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $cli_cliente_tienda_navegacions = CliClienteTiendaNavegacion::getCliClienteTiendaNavegacions($p, $c);
        foreach ($cli_cliente_tienda_navegacions as $cli_cliente_tienda_navegacion) {
            $diferencia_tiempo       = Date::getDiferenciaTiempo($caso                    = 'd', substr($cli_cliente_tienda_navegacion->getCreado(), 0, 10), date('Y-m-d'));
            if($diferencia_tiempo > 0){
                $string_ultima_conection = Gral::getFechaHoraToWEB($cli_cliente_tienda_navegacion->getCreado()) . " (hace " . $diferencia_tiempo . " dias)";
            }else{
                $string_ultima_conection = Gral::getFechaHoraToWEB($cli_cliente_tienda_navegacion->getCreado()) . " (hoy)";
            }
        }

        return $string_ultima_conection;
    }
    
    public function getFechaUltimaConexionTienda() {

        $fecha_ultima_conexion = false;

        $c = new Criterio();
        $c->add(CliClienteTienda::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->addTabla(CliClienteTiendaNavegacion::GEN_TABLA);
        $c->addRealJoin(CliClienteTienda::GEN_TABLA, CliClienteTienda::GEN_ATTR_ID, CliClienteTiendaNavegacion::GEN_ATTR_CLI_CLIENTE_TIENDA_ID);
        $c->addOrden(CliClienteTiendaNavegacion::GEN_ATTR_ID, Criterio::_DESC);
        $c->setCriterios();

        $p = new Paginador(1, 1);

        $cli_cliente_tienda_navegacions = CliClienteTiendaNavegacion::getCliClienteTiendaNavegacions($p, $c);
        foreach ($cli_cliente_tienda_navegacions as $cli_cliente_tienda_navegacion) {
            $fecha_ultima_conexion = $cli_cliente_tienda_navegacion->getCreado();
        }

        return $fecha_ultima_conexion;
    }
    
    public function getVtaPresupuestoEnProceso(){
        $c = new Criterio();
        $c->add(CliClienteTienda::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(VtaPresupuestoTipoEstado::GEN_ATTR_CODIGO, VtaPresupuestoTipoEstado::TIPO_EN_PROCESO_TIENDA, Criterio::IGUAL);
        $c->addTabla(VtaPresupuesto::GEN_TABLA);
        $c->addRealJoin(VtaPresupuestoTipoEstado::GEN_TABLA, VtaPresupuestoTipoEstado::GEN_ATTR_ID, VtaPresupuesto::GEN_ATTR_VTA_PRESUPUESTO_TIPO_ESTADO_ID);
        $c->addRealJoin(VtaPresupuestoCliClienteTienda::GEN_TABLA, VtaPresupuestoCliClienteTienda::GEN_ATTR_VTA_PRESUPUESTO_ID, VtaPresupuesto::GEN_ATTR_ID);
        $c->addRealJoin(CliClienteTienda::GEN_TABLA, CliClienteTienda::GEN_ATTR_ID, VtaPresupuestoCliClienteTienda::GEN_ATTR_CLI_CLIENTE_TIENDA_ID);
        $c->setCriterios();
        
        $vta_presupuestos = VtaPresupuesto::getVtaPresupuestos(null, $c);
        foreach($vta_presupuestos as $vta_presupuesto){
            return $vta_presupuesto;
        }
        return false;
    }

    /**
     * Arma un array con datos de Cliente y ClienteTienda para poder corroborar diferencias en los datos
     *
     * @return array $arr_campos Array armado para verificar datos
     */
    public function getArrayParaVerificarCliente()
    {
        $cli_cliente = CliCliente::getOxId($this->getCliClienteId());
        $cli_cliente_id = $cli_cliente->getId();

        $arr_campos[] = array('campo' => 'descripcion', 'nombre' => 'Descripcion', 'cli_cliente' => $cli_cliente->getDescripcion(), 'cli_cliente_tienda' => $this->getDescripcion(), 'diferencia' => (trim($cli_cliente->getDescripcion()) != trim($this->getDescripcion()) ? true : false));
        $arr_campos[] = array('campo' => 'gral_tipo_personeria_id', 'nombre' => 'Personeria', 'cli_cliente' => $cli_cliente->getGralTipoPersoneria()->getDescripcion(), 'cli_cliente_tienda' => $this->getGralTipoPersoneria()->getDescripcion(), 'diferencia' => (trim($cli_cliente->getGralTipoPersoneria()->getDescripcion()) != trim($this->getGralTipoPersoneria()->getDescripcion()) ? true : false) );
        $arr_campos[] = array('campo' => 'gral_condicion_iva_id', 'nombre' => 'Condicion IVA', 'cli_cliente' => $cli_cliente->getGralCondicionIva()->getDescripcion(), 'cli_cliente_tienda' => $this->getGralCondicionIva()->getDescripcion(), 'diferencia' => (trim($cli_cliente->getGralCondicionIva()->getDescripcion()) != trim($this->getGralCondicionIva()->getDescripcion()) ? true : false) );
        $arr_campos[] = array('campo' => 'razon_social', 'nombre' => 'Razon Social', 'cli_cliente' => $cli_cliente->getRazonSocial(), 'cli_cliente_tienda' => $this->getRazonSocial(), 'diferencia' => (trim($cli_cliente->getRazonSocial()) != trim($this->getRazonSocial()) ? true : false) );
        $arr_campos[] = array('campo' => 'cuit', 'nombre' => 'Cuit', 'cli_cliente' => $cli_cliente->getCuit(), 'cli_cliente_tienda' => $this->getCuit(), 'diferencia' => ($cli_cliente->getCuit() != $this->getCuit() ? true : false) );
        $arr_campos[] = array('campo' => 'domicilio_legal', 'nombre' => 'Domicilio', 'cli_cliente' => $cli_cliente->getDomicilioLegal(), 'cli_cliente_tienda' => $this->getDomicilioLegal(), 'diferencia' => (trim($cli_cliente->getDomicilioLegal()) != trim($this->getDomicilioLegal()) ? true : false) );
        $arr_campos[] = array('campo' => 'telefono', 'nombre' => 'Telefono', 'cli_cliente' => $cli_cliente->getTelefono(), 'cli_cliente_tienda' => $this->getTelefono(), 'diferencia' => (trim($cli_cliente->getTelefono()) != trim($this->getTelefono()) ? true : false) );
        $arr_campos[] = array('campo' => 'telefono_whatsapp', 'nombre' => 'Telefono Whatsapp', 'cli_cliente' => $cli_cliente->getTelefonoWhatsapp(), 'cli_cliente_tienda' => $this->getTelefonoWhatsapp(), 'diferencia' => (trim($cli_cliente->getTelefonoWhatsapp()) != trim($this->getTelefonoWhatsapp()) ? true : false) );
        $arr_campos[] = array('campo' => 'email', 'nombre' => 'Email', 'cli_cliente' => $cli_cliente->getEmail(), 'cli_cliente_tienda' => $this->getEmail(), 'diferencia' => (trim($cli_cliente->getEmail()) != trim($this->getEmail()) ? true : false) );
        $arr_campos[] = array('campo' => 'codigo_postal', 'nombre' => 'Codigo Postal', 'cli_cliente' => $cli_cliente->getCodigoPostal(), 'cli_cliente_tienda' => $this->getCodigoPostal(), 'diferencia' => (trim($cli_cliente->getCodigoPostal()) != trim($this->getCodigoPostal()) ? true : false) );
        $arr_campos[] = array('campo' => 'geo_localidad_id', 'nombre' => 'Localidad', 'cli_cliente' => $cli_cliente->getGeoLocalidad()->getDescripcion(), 'cli_cliente_tienda' => $this->getGeoLocalidad()->getDescripcion(), 'diferencia' => (trim($cli_cliente->getGeoLocalidad()->getDescripcion()) != trim($this->getGeoLocalidad()->getDescripcion()) ? true : false) );

        return $arr_campos;
    }
    
    
    /**
     * Registra los datos desde un Cliente a ClienteTienda o viceversa
     * Recorre el array armado para verificar, determina el campo a modificar y donde se debe copiar
     * Al final controla si aun hay diferencias entre Cliente y ClienteTienda, y si no las hay marca el registro de ClienteTienda como ya verificado
     *
     * @param array $arr_chk_cliente Array con los checks de datos a verificar
     * @param string $copiar_destino string para saber donde copiar; si a Cliente o ClienteTienda
     * @return void
     */
    public function setVerificarCliClienteTienda($arr_chk_cliente, $copiar_destino)
    {
        if($this){
            $cli_cliente = CliCliente::getOxId($this->getCliClienteId());
        }
        
        $arr_campos = $this->getArrayParaVerificarCliente();
        
        foreach($arr_chk_cliente as $indice => $arr_valor)
        {
            $campo = $arr_campos[$arr_valor]['campo'];
            $campo_camel = Gral::getCamelCase($campo);
            
            if(strtolower($copiar_destino) == 'cliente')
            {
                $valor_a_copiar = eval('return $this->get'.$campo_camel.'();');
                eval('$cli_cliente->set'.$campo_camel.'($valor_a_copiar);');
            }
            
            if(strtolower($copiar_destino) == 'cliente_tienda')
            {
                $valor_a_copiar = eval('return $cli_cliente->get'.$campo_camel.'();');
                eval('$this->set'.$campo_camel.'($valor_a_copiar);');
            }
        }
        
        if($copiar_destino == 'cliente'){
            $cli_cliente->save();
        }
        
        if($copiar_destino == 'cliente_tienda'){
            $this->save();
        }
        
        if(!$this->getHayDiferenciasEnClientes())
        {
            $this->setVerificar(0);
            $this->save();
        }
    }
    
    
    /**
     * Corrobora si hay diferencias entre los datos de Cliente y ClienteTienda
     *
     * @return boolean $hay_diferencia Para saber si hay diferencia entre datos de Cliente y ClienteTienda
     */
    public function getHayDiferenciasEnClientes()
    {
        $arr_campos = array();
        $hay_diferencia = false;
        $arr_campos = $this->getArrayParaVerificarCliente();
        foreach($arr_campos as $arr_campo)
        {
            if($arr_campo['diferencia'])
            {
                $hay_diferencia = true;
                break;
            }
        }
        
        return $hay_diferencia;
    }
    
}

?>
