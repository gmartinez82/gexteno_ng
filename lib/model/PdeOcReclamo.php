<?php 
require_once "base/BPdeOcReclamo.php"; 
class PdeOcReclamo extends BPdeOcReclamo
{
    const PREFIJO_CODIGO = "RCL";
    
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
    
    public function getDescripcionFull(){
        $texto = $this->getCodigo();
        $texto.= " - ";
        $texto.= Gral::getFechaToWeb($this->getCreado());
        $texto.= " - ";
        $texto.= $this->getCreadoPorDescripcion();
        $texto.= " - ";
        $texto.= $this->getPdeOcReclamoMotivo()->getDescripcion();
        $texto.= " - ";
        $texto.= $this->getObservacion();
        return $texto;
    }    
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 02/06/2013 20:27 hs.
     * Metodo que retorna todos los reclamos no observadas aun por el usuario indicado
     * @return type
     */
    static function getPdeOcReclamosNoObservados($us_usuario = false){
        if(!$us_usuario){            
            $us_usuario = UsUsuario::autenticado();
        }
        $c = new Criterio();
        $c->add(PdeOcReclamoDestinatario::GEN_ATTR_OBSERVADO, 0, Criterio::IGUAL);
        $c->add(PdeOcReclamoDestinatario::GEN_ATTR_US_USUARIO_ID, $us_usuario->getId(), Criterio::IGUAL);
        $c->addTabla(PdeOcReclamo::GEN_TABLA);
        $c->addRealJoin(PdeOcReclamoDestinatario::GEN_TABLA, PdeOcReclamoDestinatario::GEN_ATTR_PDE_OC_RECLAMO_ID, PdeOcReclamo::GEN_ATTR_ID);
        $c->setCriterios();
        
        $pde_oc_reclamos = PdeOcReclamo::getPdeOcReclamos(null, $c);
        return $pde_oc_reclamos;
    }
    static function tienePdeOcsNoObservados($us_usuario = false){
        $pde_oc_reclamos = self::getPdeOcReclamosNoObservados();
        if(count($pde_oc_reclamos) > 0) return true;
        return false;
    }
    

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/06/2013 19:51 hs.
     * Metodo que registra los destinatarios del Reclamo
     */
    public function setPdeOcReclamoDestinatarios(){
        $user = UsUsuario::autenticado();
        
        foreach($this->getPdeOcReclamoDestinatarios() as $pde_oc_reclamo_destinatario){
            $pde_oc_reclamo_destinatario->setEstado(0);
            $pde_oc_reclamo_destinatario->save();
        }
            
        $us_usuarios_destinatarios = array();
        // se obtienen los destinatarios del pedido
        $us_usuarios_destinatarios = $this->getPdeOc()->getUsUsuariosXPdeOcDestinatario();

        foreach($us_usuarios_destinatarios as $us_usuario){
            $leido = 0;
            $observado = 0;
            if($us_usuario->getId() == $user->getId()){
                $leido = 1;
                $observado = 1;
            }
            
            $array = array(
                array('campo' => PdeOcReclamoDestinatario::GEN_ATTR_PDE_OC_RECLAMO_ID, 'valor' => $this->getId()),
                array('campo' => PdeOcReclamoDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
            );
            $pde_oc_reclamo_destinatario = PdeOcReclamoDestinatario::getOxArray($array);
            if(!$pde_oc_reclamo_destinatario){            
                $pde_oc_reclamo_destinatario = new PdeOcReclamoDestinatario();
            }
            $pde_oc_reclamo_destinatario->setPdeOcReclamoId($this->getId());
            $pde_oc_reclamo_destinatario->setUsUsuarioId($us_usuario->getId());
            $pde_oc_reclamo_destinatario->setLeido($leido);
            $pde_oc_reclamo_destinatario->setObservado($observado);
            //$pde_oc_reclamo_destinatario->setDestacado(0);
            $pde_oc_reclamo_destinatario->setEstado(1);
            $pde_oc_reclamo_destinatario->save();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 01/06/2013 19:55 hs.
     * Metodo que actualiza los destinatarios del Reclamo, para remarcar como no leido y no observado
     */
    public function setPdeOcReclamoDestinatariosAviso(){
        $user = UsUsuario::autenticado();
        
        foreach($this->getPdeOcReclamoDestinatarios() as $pde_oc_reclamo_destinatario){
            $leido = 0;
            $observado = 0;
            if($pde_oc_reclamo_destinatario->getUsUsuario()->getId() == $user->getId()){
                $leido = 1;
                $observado = 1;
            }
            //$pde_oc_reclamo_destinatario->setPdeCotizacionId($this->getId());
            //$pde_oc_reclamo_destinatario->setUsUsuarioId($user->getId());
            $pde_oc_reclamo_destinatario->setLeido($leido);
            $pde_oc_reclamo_destinatario->setObservado($observado);
            //$pde_oc_reclamo_destinatario->setEstado(1);
            $pde_oc_reclamo_destinatario->save();
        }
    }
    
/**
     * Autor: Pablo Rosen
     * Fecha: 30/05/2013 16:00 hs.
     * Metodo que retorna los destinatarios del Reclamo
     */
    public function getPdeOcReclamoDestinatarioUsUsuario($us_usuario = false){
        if(!$us_usuario){            
            $us_usuario = UsUsuario::autenticado();
        }
        $leido = true;
        $array = array(
            array('campo' => PdeOcReclamoDestinatario::GEN_ATTR_PDE_OC_RECLAMO_ID, 'valor' => $this->getId()),
            array('campo' => PdeOcReclamoDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
        );
        $pde_oc_reclamo_destinatario = PdeOcReclamoDestinatario::getOxArray($array);
        return $pde_oc_reclamo_destinatario;
    }   
    
    public function esPdeOcReclamoLeido($us_usuario = false){
        $leido = true;
        $pde_oc_reclamo_destinatario = $this->getPdeOcReclamoDestinatarioUsUsuario($us_usuario);
        if($pde_oc_reclamo_destinatario){
            if(!$pde_oc_reclamo_destinatario->getLeido()){
                $leido = false;
            }
        }
        return $leido;
    }    
    public function setPdeOcReclamoLeido($us_usuario = false){
        $pde_oc_reclamo_destinatario = $this->getPdeOcReclamoDestinatarioUsUsuario($us_usuario);
        if($pde_oc_reclamo_destinatario){
            $pde_oc_reclamo_destinatario->setLeido(1);
            $pde_oc_reclamo_destinatario->setObservado(1);
            $pde_oc_reclamo_destinatario->save();
        }
        return true;
    }    
    public function esPdeOcReclamoDestacado($us_usuario = false){
        $destacado = false;
        $pde_oc_reclamo_destinatario = $this->getPdeOcReclamoDestinatarioUsUsuario($us_usuario);
        if($pde_oc_reclamo_destinatario){
            if($pde_oc_reclamo_destinatario->getDestacado()){
                $destacado = true;
            }
        }
        return $destacado;
    }    
    public function setPdeOcReclamoDestacado($us_usuario = false){
        $pde_oc_reclamo_destinatario = $this->getPdeOcReclamoDestinatarioUsUsuario($us_usuario);
        if($pde_oc_reclamo_destinatario){
            if($pde_oc_reclamo_destinatario->getDestacado()){
                $pde_oc_reclamo_destinatario->setDestacado(0);
            }else{
                $pde_oc_reclamo_destinatario->setDestacado(1);
            }            
            $pde_oc_reclamo_destinatario->save();
        }
        return true;
    }
    
    
    public function enviarAvisos($asunto = ''){
        // nueva forma, mails en 2do plano
        $pde_oc_reclamo_destinatarios = $this->getPdeOcReclamoDestinatarios();
        foreach($pde_oc_reclamo_destinatarios as $pde_oc_reclamo_destinatario){
            $pde_oc_reclamo_destinatario->setDescripcion($asunto);
            $pde_oc_reclamo_destinatario->setAvisoEmail(0);
            $pde_oc_reclamo_destinatario->save();
        }
        
        return;
        
        $pde_oc_reclamo_destinatarios = $this->getPdeOcReclamoDestinatarios();
        foreach($pde_oc_reclamo_destinatarios as $pde_oc_reclamo_destinatario){
            $us_usuario_destinatario = $pde_oc_reclamo_destinatario->getUsUsuario();
            $user = UsUsuario::autenticado();
            if($user->getId() != $us_usuario_destinatario->getId()){
                // aviso por email
                $estado_envio_mail = $this->enviarEmailAviso($asunto, $us_usuario_destinatario);
                if($estado_envio_mail){
                    $pde_oc_reclamo_destinatario->setAvisoEmail(1);
                    $pde_oc_reclamo_destinatario->save();
                }
            }
        }
    }
    
    public function enviarEmailAviso($asunto, $us_usuario){
        // control de envio de email activado
        if(!Mail::MAIL_ACTIVO) return false;
        
        $pde_centro_pedido = $this->getPdeOc()->getPdePedido()->getPdeCentroPedido();

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
        
        Gral::setSes('MECANO_PDE_OC_RECLAMO_ID', $this->getId());
        Gral::setSes('MECANO_US_USUARIO_ID', $us_usuario->getId());

        include_once Gral::getPathAbs()."comps/phpmailer/class.phpmailer.php";

        $archivo = Gral::getPathAbs()."mailing/plantillas/MECANO/index_pde_oc_reclamo.php";
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
        
        $pde_centro_pedido = $this->getPdeOc()->getPdePedido()->getPdeCentroPedido();
        $pde_centro_pedido_emails = $pde_centro_pedido->getPdeCentroPedidoEmails(null, null, true); // solo emails activos
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
    
}
?>