<?php 
require_once "base/BPdeCotizacion.php"; 
class PdeCotizacion extends BPdeCotizacion
{
    const PREFIJO_CODIGO = "COT";
    
    public function getCodigoConCeros(){
        $codigo = self::PREFIJO_CODIGO;
        $codigo.= str_pad($this->getId(), 8, "0", STR_PAD_LEFT);
        
        return $codigo;
    }
    
    public function getDescripcion(){
        $texto = $this->getCodigo();
        $texto.= " - ";
        $texto.= Gral::getFechaToWeb($this->getCreado());
        return $texto;
    }    

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/06/2013 19:51 hs.
     * Metodo que registra los destinatarios de la cotizacion
     */
    public function setPdeCotizacionDestinatarios(){
        $user = UsUsuario::autenticado();
        
        foreach($this->getPdeCotizacionDestinatarios() as $pde_cotizacion_destinatario){
            $pde_cotizacion_destinatario->setEstado(0);
            $pde_cotizacion_destinatario->save();
        }
            
        $us_usuarios_destinatarios = array();

        // se recuperan usuario internos destinatarios de la cotizacion
        foreach($this->getPdeCotizacionDestinatariosUsUsuariosCdn() as $us_usuario){
            $us_usuarios_destinatarios[] = $us_usuario;
        }
        // se recuperan usuario externos destinatarios de la cotizacion
        foreach($this->getPdeCotizacionDestinatariosUsUsuariosProveedor() as $us_usuario){
            $us_usuarios_destinatarios[] = $us_usuario;
        }

        foreach($us_usuarios_destinatarios as $us_usuario){
            $leido = 0;
            $observado = 0;
            if($us_usuario->getId() == $user->getId()){
                $leido = 1;
                $observado = 1;
            }
            
            $array = array(
                array('campo' => PdeCotizacionDestinatario::GEN_ATTR_PDE_COTIZACION_ID, 'valor' => $this->getId()),
                array('campo' => PdeCotizacionDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
            );
            $pde_cotizacion_destinatario = PdeCotizacionDestinatario::getOxArray($array);
            if(!$pde_cotizacion_destinatario){            
                $pde_cotizacion_destinatario = new PdeCotizacionDestinatario();
            }
            
            // se controla que el usuario no sea proveedor, ya que no se envia email de cotizacion al proveedor
            $aviso_email = 0;
            $prv_proveedor = $us_usuario->getPrvProveedorUsUsuario();
            if($prv_proveedor){
                $aviso_email = 1;
            }
            
            $pde_cotizacion_destinatario->setPdeCotizacionId($this->getId());
            $pde_cotizacion_destinatario->setUsUsuarioId($us_usuario->getId());
            $pde_cotizacion_destinatario->setLeido($leido);
            $pde_cotizacion_destinatario->setObservado($observado);
            $pde_cotizacion_destinatario->setAvisoEmail($aviso_email);
            //$pde_cotizacion_destinatario->setDestacado(0);
            $pde_cotizacion_destinatario->setEstado(1);
            $pde_cotizacion_destinatario->save();
        }
        return true;
    }
    
    /**
     * Metodo que retorna los usuarios destinatarios de cotizacion internos
     * @return type
     */
    public function getPdeCotizacionDestinatariosUsUsuariosCdn(){
        $us_usuarios_destinatarios = array();
        
        $pde_centro_pedido = $this->getPdePedido()->getPdeCentroPedido();

        // se obtienen responsables de pedido
        $us_grupo_responsable_panol = UsGrupo::getOxCodigo(UsGrupo::CENTRO_PEDIDO_RESPONSABLE);
        $us_usuarios_responsables_panol = $us_grupo_responsable_panol->getUsUsuariosXUsAgrupado();
        foreach($us_usuarios_responsables_panol as $us_usuario_responsables_panol){
            
            // se verifica que el usuario tiene asignado el centro de pedido en cuestion
            $codigo = PdeCentroPedido::PREFIJO_CREDENCIAL.$pde_centro_pedido->getCodigo();
            //if(Login::esAutorizado($us_usuario_responsables_panol, $codigo)){
            if(UsCredencial::getEsAcreditado($codigo, $us_usuario_responsables_panol->getId())){
                $us_usuarios_destinatarios[] = $us_usuario_responsables_panol;
            }
        }
        
        // se obtienen auditores de pedidos
        $us_grupo_responsable_panol = UsGrupo::getOxCodigo(UsGrupo::CENTRO_PEDIDO_CONSULTA);
        $us_usuarios_responsables_panol = $us_grupo_responsable_panol->getUsUsuariosXUsAgrupado();
        foreach($us_usuarios_responsables_panol as $us_usuario_responsables_panol){
            
            // se verifica que el usuario tiene asignado el centro de pedido en cuestion
            $codigo = PdeCentroPedido::PREFIJO_CREDENCIAL.$pde_centro_pedido->getCodigo();
            //if(Login::esAutorizado($us_usuario_responsables_panol, $codigo)){
            if(UsCredencial::getEsAcreditado($codigo, $us_usuario_responsables_panol->getId())){
                $us_usuarios_destinatarios[] = $us_usuario_responsables_panol;
            }
        }
        
        return $us_usuarios_destinatarios;
    }

    /**
     * Metodo que retorna los usuarios destinatarios de cotizacion externos
     * @return type
     */    
    public function getPdeCotizacionDestinatariosUsUsuariosProveedor(){
        
        $us_usuarios_destinatarios = array();
        return $us_usuarios_destinatarios;
        
        /*
        $prv_proveedor = $this->getPrvProveedor();
        
        $c = new Criterio();
        $c->add(UsGrupo::GEN_ATTR_CODIGO, UsGrupo::CENTRO_PEDIDO_PROVEEDOR, Criterio::IGUAL);
        $c->add(PrvProveedorUsUsuario::GEN_ATTR_PRV_PROVEEDOR_ID, $prv_proveedor->getId(), Criterio::IGUAL);
        $c->addTabla(UsUsuario::GEN_TABLA);
        $c->addRealJoin(PrvProveedorUsUsuario::GEN_TABLA, PrvProveedorUsUsuario::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
        $c->addRealJoin(UsAgrupado::GEN_TABLA, UsAgrupado::GEN_ATTR_US_USUARIO_ID, UsUsuario::GEN_ATTR_ID);
        $c->addRealJoin(UsGrupo::GEN_TABLA, UsGrupo::GEN_ATTR_ID, UsAgrupado::GEN_ATTR_US_GRUPO_ID);
        $c->setCriterios();

        $us_usuario_proveedores_cotizacions = UsUsuario::getUsUsuarios(null, $c);
        foreach($us_usuario_proveedores_cotizacions as $us_usuario_proveedor_cotizacion){
            $us_usuarios_destinatarios[] = $us_usuario_proveedor_cotizacion;
        }

        return $us_usuarios_destinatarios;     
        */   
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/06/2013 19:55 hs.
     * Metodo que actualiza los destinatarios de la cotizacion, para remarcar como no leido y no observado
     */
    public function setPdeCotizacionDestinatariosAviso(){
        $user = UsUsuario::autenticado();
        
        foreach($this->getPdeCotizacionDestinatarios() as $pde_cotizacion_destinatario){
            $leido = 0;
            $observado = 0;
            if($pde_cotizacion_destinatario->getUsUsuario()->getId() == $user->getId()){
                $leido = 1;
                $observado = 1;
            }
            //$pde_cotizacion_destinatario->setPdeCotizacionId($this->getId());
            //$pde_cotizacion_destinatario->setUsUsuarioId($user->getId());
            $pde_cotizacion_destinatario->setLeido($leido);
            $pde_cotizacion_destinatario->setObservado($observado);
            //$pde_cotizacion_destinatario->setEstado(1);
            $pde_cotizacion_destinatario->save();
        }
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 30/05/2013 16:00 hs.
     * Metodo que retorna los destinatarios del pedido
     */
    public function getPdeCotizacionDestinatarioUsUsuario($us_usuario = false){
        if(!$us_usuario){            
            $us_usuario = UsUsuario::autenticado();
        }
        $leido = true;
        $array = array(
            array('campo' => PdeCotizacionDestinatario::GEN_ATTR_PDE_COTIZACION_ID, 'valor' => $this->getId()),
            array('campo' => PdeCotizacionDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
        );
        $pde_cotizacion_destinatario = PdeCotizacionDestinatario::getOxArray($array);
        return $pde_cotizacion_destinatario;
    }    
    public function esPdeCotizacionLeido($us_usuario = false){
        $leido = true;
        $pde_cotizacion_destinatario = $this->getPdeCotizacionDestinatarioUsUsuario($us_usuario);
        if($pde_cotizacion_destinatario){
            if(!$pde_cotizacion_destinatario->getLeido()){
                $leido = false;
            }
        }
        return $leido;
    }
    
    public function setPdeCotizacionLeido($us_usuario = false){
        $pde_cotizacion_destinatario = $this->getPdeCotizacionDestinatarioUsUsuario($us_usuario);
        if($pde_cotizacion_destinatario){
            $pde_cotizacion_destinatario->setLeido(1);
            $pde_cotizacion_destinatario->setObservado(1);
            $pde_cotizacion_destinatario->save();
        }
        return true;
    }    

    
    public function esPdeCotizacionDestacado($us_usuario = false){
        $destacado = false;
        $pde_cotizacion_destinatario = $this->getPdeCotizacionDestinatarioUsUsuario($us_usuario);
        if($pde_cotizacion_destinatario){
            if($pde_cotizacion_destinatario->getDestacado()){
                $destacado = true;
            }
        }
        return $destacado;
    }
    
    public function setPdeCotizacionDestacado($us_usuario = false){
        $pde_cotizacion_destinatario = $this->getPdeCotizacionDestinatarioUsUsuario($us_usuario);
        if($pde_cotizacion_destinatario){
            if($pde_cotizacion_destinatario->getDestacado()){
                $pde_cotizacion_destinatario->setDestacado(0);
            }else{
                $pde_cotizacion_destinatario->setDestacado(1);
            }            
            $pde_cotizacion_destinatario->save();
        }
        return true;
    }
    
    /* --------------------------------- */
    /* Inicia Oc de PdeCotizacion */
    /* --------------------------------- */
    
    
    public function addPdeOc($pde_centro_recepcion_id, $vencimiento = false, $observaciones = ''){
        /*
        $cotizacion_respecto_peso = 0;
        $gral_moneda = $this->getGralMoneda();
        if($gral_moneda){
            $cotizacion_respecto_peso = $gral_moneda->getCotizacionRespectoPeso();
        }
        */
        
        $pde_oc_tipo_origen = PdeOcTipoOrigen::getOxCodigo(PdeOcTipoOrigen::TIPO_COMPULSA);
        
        $pde_pedido = $this->getPdePedido();
        $pde_centro_pedido = $pde_pedido->getPdeCentroPedido();
        
        // registrar la PdeOc
        $pde_oc = new PdeOc();
        
        $pde_oc->setPdeOcTipoOrigenId($pde_oc_tipo_origen->getId()); // origen
        $pde_oc->setPdeCentroPedidoId($pde_centro_pedido->getId());
        
        $pde_oc->setPdeCotizacionId($this->getId());
        $pde_oc->setPdePedidoId($this->getPdePedidoId());
        $pde_oc->setPrvProveedorId($this->getPrvProveedorId());
        $pde_oc->setInsInsumoId($this->getInsInsumoId());
        $pde_oc->setPdeCentroRecepcionId($pde_centro_recepcion_id);
        $pde_oc->setCantidad($this->getCantidad());
        $pde_oc->setFechaEntrega($this->getFechaEntrega());
        if($vencimiento){
            $pde_oc->setVencimiento($vencimiento);
        }else{
            $pde_oc->setVencimiento($this->getFechaEntrega());
        }
        $pde_oc->setImporteUnidad($this->getImporteUnidad());
        $pde_oc->setImporteTotal($this->getImporteTotal());
        $pde_oc->setEstado(1);
        $pde_oc->save();
        
        // se setea codigo de PdeOc
        $pde_oc->setCodigo($pde_oc->getCodigoConCeros());
        $pde_oc->save();
        
        // registrar estado inicial de PdeOc
        $pde_oc_estado = $pde_oc->setPdeOcEstado(
            PdeOcTipoEstado::TIPO_ESTADO_APROBADO,
            $observaciones
        );
        
        // se registra el estado de recepcion inicial de PdeOc
        $pde_oc_estado_recepcion = $pde_oc->setPdeOcEstadoRecepcion(
                PdeOcTipoEstadoRecepcion::TIPO_ESTADO_NO_RECIBIDO, $observaciones
        );

        // se registra el estado de facturacion inicial de PdeOc
        $pde_oc_estado_facturacion = $pde_oc->setPdeOcEstadoFacturacion(
                PdeOcTipoEstadoFacturacion::TIPO_ESTADO_NO_FACTURADO, $observaciones
        );        
        
        // registrar destinatarios de PdeOc
        $pde_oc->setPdeOcDestinatarios();
        
        // registrar nuevo estado de PdePedido: Finalizado
        $pde_pedido = $this->getPdePedido();
        $pde_estado = $pde_pedido->setPdePedidoEstado(
            PdeTipoEstado::TIPO_ESTADO_COMPRADO,
            $observaciones
        );
        
        return $pde_oc;        
    }

    public function enviarAvisos($asunto = ''){
        // nueva forma, mails en 2do plano
        $pde_cotizacion_destinatarios = $this->getPdeCotizacionDestinatarios();
        foreach($pde_cotizacion_destinatarios as $pde_cotizacion_destinatario){
            $pde_cotizacion_destinatario->setDescripcion($asunto);
            $pde_cotizacion_destinatario->setAvisoEmail(0);
            $pde_cotizacion_destinatario->save();
        }
        
        return;
        
        // manera original, mails al instante
        $pde_cotizacion_destinatarios = $this->getPdeCotizacionDestinatarios();
        foreach($pde_cotizacion_destinatarios as $pde_cotizacion_destinatario){
            $us_usuario_destinatario = $pde_cotizacion_destinatario->getUsUsuario();
            $user = UsUsuario::autenticado();
            if($user->getId() != $us_usuario_destinatario->getId()){
                // aviso por email
                $estado_envio_mail = $this->enviarEmailAviso($asunto, $us_usuario_destinatario);
                if($estado_envio_mail){
                    $pde_cotizacion_destinatario->setAvisoEmail(1);
                    $pde_cotizacion_destinatario->save();
                }
            }
        }
    }
    
    public function enviarEmailAviso($asunto, $us_usuario){
        // control de envio de email activado
        if(!Mail::MAIL_ACTIVO) return false;
        
        $pde_centro_pedido = $this->getPdePedido()->getPdeCentroPedido();

        // se cargan todos los emails del proveedor, en el caso de que el usuario destinatario sea proveedor
        $arr_emails = false;
        $prv_proveedor = $us_usuario->getPrvProveedorXPrvProveedorUsUsuario();
        if($prv_proveedor){
            $prv_emails = $prv_proveedor->getPrvEmails(null, null, true); // solo emails activos
            foreach($prv_emails as $prv_email){
                $email_descripcion = $prv_email->getDescripcion();
                
                // se controla de que el formato del email sea correcto, cuando si es proveedor
                if(Ctrl::esEmail($email_descripcion)){
                    $arr_emails[] = $email_descripcion;
                }
            }
        }else{
            // se controla de que el formato del email sea correcto, cuando no es proveedor
            if(!Ctrl::esEmail($us_usuario->getEmail())){
                return false;
            }            
        }
        
        Gral::setSes('MECANO_PDE_COTIZACION_ID', $this->getId());
        Gral::setSes('MECANO_US_USUARIO_ID', $us_usuario->getId());

        include_once Gral::getPathAbs()."comps/phpmailer/class.phpmailer.php";

        $archivo = Gral::getPathAbs()."mailing/plantillas/MECANO/index_pde_cotizacion.php";
        $msg = Gral::get_include_contents($archivo);

        //echo $msg;
        //return;
        
        $mail = new PHPMailer();
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = Mail::MAIL_SECURE_3;
        //$mail->SMTPDebug = 2;
        $mail->CharSet = "UTF-8";

        $mail->Host = Mail::MAIL_SERVIDOR_ENVIO_3;
        $mail->Username = Mail::MAIL_CASILLA_USUARIO_3;
        $mail->Password = Mail::MAIL_PASS_ENVIO_3;
        $mail->Port = Mail::MAIL_PUERTO_ENVIO_3;
        
        // excepcion para CP Asuncion
        if($pde_centro_pedido->getCodigo() == 'ASUNCION'){
            $mail->Username = Mail::MAIL_CASILLA_ENVIO_SOL;
            $mail->Password = Mail::MAIL_PASS_ENVIO_SOL;
        }        
        // excepcion para CP Formosa
        if($pde_centro_pedido->getCodigo() == 'FORMOSA'){
            $mail->Username = Mail::MAIL_CASILLA_ENVIO_CDS;
            $mail->Password = Mail::MAIL_PASS_ENVIO_CDS;
        }
        // excepcion para CP Test
        if($pde_centro_pedido->getCodigo() == 'TEST'){
            $mail->Username = Mail::MAIL_CASILLA_ENVIO_CDS;
            $mail->Password = Mail::MAIL_PASS_ENVIO_CDS;
        }

        $mail->From = Mail::MAIL_CASILLA_REMITENTE;
        $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;
        $mail->FromName = $pde_centro_pedido->getEmailPrefijo();

        if($arr_emails){
            foreach($arr_emails as $arr_email){
                $mail->AddAddress($arr_email);
            }
        }else{
            $mail->AddAddress($us_usuario->getEmail());
        }
        $mail->AddBCC(Mail::MAIL_CASILLA_AUDITORIA_ADMIN);

        //$mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO);
        //$mail->AddReplyTo(Mail::MAIL_CASILLA_RESPONSABLE_PDE_PEDIDO);
        
        $pde_centro_pedido = $this->getPdePedido()->getPdeCentroPedido();
        $pde_centro_pedido_emails = $pde_centro_pedido->getPdeCentroPedidoEmails();
        foreach($pde_centro_pedido_emails as $pde_centro_pedido_email){
            $email_centro_pedido_responsable = $pde_centro_pedido_email->getDescripcion();
            if(Ctrl::esEmail($email_centro_pedido_responsable)){
                $mail->AddReplyTo($email_centro_pedido_responsable);
            }
        }

        $mail->IsHTML(true);
        $mail->Subject = $asunto;

        $mail->Body = $msg;
        //Gral::prr($mail);
        $exito = $mail->Send();
        return $exito;
    }
    
    public function getPdeCondicionPagosOrdenados(){
        $c = new Criterio();
        $c->add(PdeCotizacion::GEN_ATTR_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeCondicionPago::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
        $c->addTabla(PdeCondicionPago::GEN_TABLA);
        $c->addRealJoin(PdeCotizacionPdeCondicionPago::GEN_TABLA, PdeCotizacionPdeCondicionPago::GEN_ATTR_PDE_CONDICION_PAGO_ID, PdeCondicionPago::GEN_ATTR_ID);
        $c->addRealJoin(PdeCotizacion::GEN_TABLA, PdeCotizacion::GEN_ATTR_ID, PdeCotizacionPdeCondicionPago::GEN_ATTR_PDE_COTIZACION_ID);
        $c->addOrden(PdeCondicionPago::GEN_ATTR_ORDEN, Criterio::_ASC);
        $c->setCriterios();
        
        $os = PdeCondicionPago::getPdeCondicionPagos(null, $c);
        return $os;
    }
    
    public function getArrayCondicionPagos(){
        $os = $this->getPdeCondicionPagosOrdenados();
        $arr = array();
        foreach($os as $o){
            $arr[$o->getId()] = $o->getId();
        }
        return $arr;
    }
    
}
?>