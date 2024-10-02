<?php 
require_once "base/BPdeOv.php"; 
class PdeOv extends BPdeOv
{
    const PREFIJO_CODIGO = "OV";
    
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
     * Fecha: 17/04/2014 19:50 hs.
     * Metodo que retorna todos las ordenes de venta no observadas aun por el usuario indicado
     * @return type
     */
    static function getPdeOvsNoObservados($us_usuario = false){
        if(!$us_usuario){            
            $us_usuario = UsUsuario::autenticado();
        }
        $c = new Criterio();
        $c->add(PdeOvDestinatario::GEN_ATTR_OBSERVADO, 0, Criterio::IGUAL);
        $c->add(PdeOvDestinatario::GEN_ATTR_US_USUARIO_ID, $us_usuario->getId(), Criterio::IGUAL);
        $c->addTabla(PdeOv::GEN_TABLA);
        $c->addRealJoin(PdeOvDestinatario::GEN_TABLA, PdeOvDestinatario::GEN_ATTR_PDE_OV_ID, PdeOv::GEN_ATTR_ID);
        $c->setCriterios();
        
        $pde_ovs = PdeOv::getPdeOvs(null, $c);
        return $pde_ovs;
    }
    static function tienePdeOvsNoObservados($us_usuario = false){
        $pde_ovs = self::getPdeOvsNoObservados();
        if(count($pde_ovs) > 0) return true;
        return false;
    }

    
    /**
     * Autor: Pablo Rosen
     * Fecha: 17/04/2014 19:50 hs.
     * Metodo que registra los destinatarios de la orden de venta
     */
    public function setPdeOvDestinatarios(){
        $user = UsUsuario::autenticado();
        
        foreach($this->getPdeOvDestinatarios() as $pde_ov_destinatario){
            $pde_ov_destinatario->setEstado(0);
            $pde_ov_destinatario->save();
        }
            
        $us_usuarios_destinatarios = array();
        //$us_usuarios_destinatarios[] = $user;
        
        
        foreach($this->getPdeOvDestinatariosUsUsuariosCdn() as $us_usuario){
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
                array('campo' => PdeOvDestinatario::GEN_ATTR_PDE_OV_ID, 'valor' => $this->getId()),
                array('campo' => PdeOvDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
            );
            $pde_ov_destinatario = PdeOvDestinatario::getOxArray($array);
            if(!$pde_ov_destinatario){            
                $pde_ov_destinatario = new PdeOvDestinatario();
            }
            $pde_ov_destinatario->setPdeOvId($this->getId());
            $pde_ov_destinatario->setUsUsuarioId($us_usuario->getId());
            $pde_ov_destinatario->setLeido($leido);
            $pde_ov_destinatario->setObservado($observado);
            //$pde_ov_destinatario->setDestacado(0);
            $pde_ov_destinatario->setEstado(1);
            $pde_ov_destinatario->save();
        }
        return true;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 17/04/2014 19:50 hs.
     * Metodo que actualiza los destinatarios de la orden de venta, para remarcar como no leido y no observado
     */
    public function setPdeOvDestinatariosAviso(){
        $user = UsUsuario::autenticado();
        
        foreach($this->getPdeOvDestinatarios() as $pde_ov_destinatario){
            $leido = 0;
            $observado = 0;
            if($user){
                if($pde_ov_destinatario->getUsUsuario()->getId() == $user->getId()){
                    $leido = 1;
                    $observado = 1;
                }
            }
            //$pde_ov_destinatario->setPdePedidoId($this->getId());
            //$pde_ov_destinatario->setUsUsuarioId($user->getId());
            $pde_ov_destinatario->setLeido($leido);
            $pde_ov_destinatario->setObservado($observado);
            //$pde_ov_destinatario->setEstado(1);
            $pde_ov_destinatario->save();
        }
    }
    
     public function getPdeOvDestinatariosUsUsuariosCdn(){
        $us_usuarios_destinatarios = array();

        $pde_ov_centro_venta = $this->getPdeOvCentroVenta();
        
        // responsables de pedido
        $us_grupo_responsable_venta = UsGrupo::getOxCodigo(UsGrupo::CENTRO_VENTA_RESPONSABLE);
        $us_usuarios_responsables_venta = $us_grupo_responsable_venta->getUsUsuariosXUsAgrupado();
        foreach($us_usuarios_responsables_venta as $us_usuario_responsables_venta){
            
            // se verifica que el usuario tiene asignado el centro de pedido en cuestion
            $codigo = PdeOvCentroVenta::PREFIJO_CREDENCIAL.$pde_ov_centro_venta->getCodigo();
            if(UsCredencial::getEsAcreditado($codigo, $us_usuario_responsables_venta->getId())){
            //if(Login::esAutorizado($us_usuario_responsables_venta, $codigo)){
                $us_usuarios_destinatarios[] = $us_usuario_responsables_venta;
            }
            
        }
        
        return $us_usuarios_destinatarios;
    }

  
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 17/04/2014 19:50 hs.
     * Metodo que retorna los destinatarios de la orden de venta
     */
    public function getPdeOvDestinatarioUsUsuario($us_usuario = false){
        if(!$us_usuario){            
            $us_usuario = UsUsuario::autenticado();
        }
        $leido = true;
        $array = array(
            array('campo' => PdeOvDestinatario::GEN_ATTR_PDE_OV_ID, 'valor' => $this->getId()),
            array('campo' => PdeOvDestinatario::GEN_ATTR_US_USUARIO_ID, 'valor' => $us_usuario->getId())
        );
        $pde_ov_destinatario = PdeOvDestinatario::getOxArray($array);
        return $pde_ov_destinatario;
    }
    
    public function esPdeOvLeido($us_usuario = false){
        $leido = true;
        $pde_ov_destinatario = $this->getPdeOvDestinatarioUsUsuario($us_usuario);
        if($pde_ov_destinatario){
            if(!$pde_ov_destinatario->getLeido()){
                $leido = false;
            }
        }
        return $leido;
    }
    
    public function setPdeOvLeido($us_usuario = false){
        $pde_ov_destinatario = $this->getPdeOvDestinatarioUsUsuario($us_usuario);
        if($pde_ov_destinatario){
            $pde_ov_destinatario->setLeido(1);
            $pde_ov_destinatario->setObservado(1);
            $pde_ov_destinatario->save();
        }
        return true;
    }    
    
    public function esPdeOvDestacado($us_usuario = false){
        $destacado = false;
        $pde_ov_destinatario = $this->getPdeOvDestinatarioUsUsuario($us_usuario);
        if($pde_ov_destinatario){
            if($pde_ov_destinatario->getDestacado()){
                $destacado = true;
            }
        }
        return $destacado;
    }
    
    public function setPdeOvDestacado($us_usuario = false){
        $pde_ov_destinatario = $this->getPdeOvDestinatarioUsUsuario($us_usuario);
        if($pde_ov_destinatario){
            if($pde_ov_destinatario->getDestacado()){
                $pde_ov_destinatario->setDestacado(0);
            }else{
                $pde_ov_destinatario->setDestacado(1);
            }            
            $pde_ov_destinatario->save();
        }
        return true;
    }
    

   /**
    * Autor: Pablo Rosen
    * Fecha: 17/04/2014 19:50 hs.
    * Metodo que registra un nuevo estado para la Orden de Venta
    */
    public function setPdeOvEstado($tipo_estado_codigo, $observaciones){
        $inicial = 1;
        foreach($this->getPdeOvEstados() as $pde_ov_estado){
            $pde_ov_estado->setActual(0);
            $pde_ov_estado->save();
            
            $inicial = 0;
        }
        
        $pde_ov_tipo_estado = PdeOvTipoEstado::getOxCodigo($tipo_estado_codigo);
        
        $pde_ov_estado = new PdeOvEstado();
        $pde_ov_estado->setPdeOvId($this->getId());
        $pde_ov_estado->setPdeOvTipoEstadoId($pde_ov_tipo_estado->getId());
        $pde_ov_estado->setInicial($inicial);
        $pde_ov_estado->setActual(1);
        $pde_ov_estado->setObservacion($observaciones);
        $pde_ov_estado->save();
        
        return $pde_ov_estado;
    }
    
    /**
     * Autor: Pablo Rosen
     * Fecha: 17/04/2014 19:50 hs.
     * Metodo que retorna el estado actual del PdeOv
     * @return PdeOvEstado
     */
    public function getPdeOvEstadoActual(){
        $c = new Criterio();
        $c->add(PdeOvEstado::GEN_ATTR_PDE_OV_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeOvEstado::GEN_ATTR_ACTUAL, 1, Criterio::IGUAL);
        $c->addTabla(PdeOvEstado::GEN_TABLA);
        $c->setCriterios();
        
        $pde_ov_estados = PdeOvEstado::getPdeOvEstados(null, $c);
        foreach($pde_ov_estados as $pde_ov_estado){
            return $pde_ov_estado;
        }
        return false;
    }

    /**
     * Autor: Pablo Rosen
     * Fecha: 17/04/2014 19:50 hs.
     * Metodo que retorna el estado de un PdeOv de acuerdo a un codigo de PdeOvTipoEstado indicado
     * @return PdeEstado
     */
    public function getPdeOvEstadoXCodigoDePdeOvTipoEstado($valor){
        $c = new Criterio();
        $c->add(PdeOvEstado::GEN_ATTR_PDE_OV_ID, $this->getId(), Criterio::IGUAL);
        $c->add(PdeOvTipoEstado::GEN_ATTR_CODIGO, $valor, Criterio::IGUAL);
        $c->addTabla(PdeOvEstado::GEN_TABLA);
        $c->addRealJoin(PdeOvTipoEstado::GEN_TABLA, PdeOvTipoEstado::GEN_ATTR_ID, PdeOvEstado::GEN_ATTR_PDE_OV_TIPO_ESTADO_ID);
        $c->setCriterios();
        
        $pde_ov_estados = PdeOvEstado::getPdeOvEstados(null, $c);
        foreach($pde_ov_estados as $pde_ov_estado){
            return $pde_ov_estado;
        }
        return false;
    }
 
    public function enviarAvisos($asunto = ''){
        // nueva forma, mails en 2do plano
        $pde_ov_destinatarios = $this->getPdeOvDestinatarios();
        foreach($pde_ov_destinatarios as $pde_ov_destinatario){
            $pde_ov_destinatario->setDescripcion($asunto);
            $pde_ov_destinatario->setAvisoEmail(0);
            $pde_ov_destinatario->save();
        }
        
        return;
        
        // manera original, mails al instante
        $pde_ov_destinatarios = $this->getPdeOvDestinatarios();
        foreach($pde_ov_destinatarios as $pde_ov_destinatario){
            $us_usuario_destinatario = $pde_ov_destinatario->getUsUsuario();
            $user = UsUsuario::autenticado();
            if($user->getId() != $us_usuario_destinatario->getId()){
                // aviso por email
                $estado_envio_mail = $this->enviarEmailAviso($asunto, $us_usuario_destinatario);
                if($estado_envio_mail){
                    $pde_ov_destinatario->setAvisoEmail(1);
                    $pde_ov_destinatario->save();
                }
            }
        }
    }
    
    public function enviarEmailAviso($asunto, $us_usuario){
        // control de envio de email activado
        if(!Mail::MAIL_ACTIVO) return false;

        // se controla de que el formato del email sea correcto
        if(!Ctrl::esEmail($us_usuario->getEmail())){
            return false;
        }
        
        Gral::setSes('MECANO_PDE_OV_ID', $this->getId());
        Gral::setSes('MECANO_US_USUARIO_ID', $us_usuario->getId());

        include_once Gral::getPathAbs()."comps/phpmailer/class.phpmailer.php";

        $archivo = Gral::getPathAbs()."mailing/plantillas/MECANO/index_pde_ov.php";
        $msg = Gral::get_include_contents($archivo);

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

        $mail->From = Mail::MAIL_CASILLA_ENVIO_3;
        $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;

        $mail->AddAddress($us_usuario->getEmail());
        $mail->AddBCC(Mail::MAIL_CASILLA_AUDITORIA_ADMIN);

        //$mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO);
        $mail->AddReplyTo(Mail::MAIL_CASILLA_RESPONSABLE_PDE_PEDIDO);

        $mail->IsHTML(true);
        $mail->Subject = $asunto;

        $mail->Body = $msg;
        $exito = $mail->Send();
        return $exito;
    } 
    
    /**
     * Metodo que retorna la cantidad
     * @return type
     */
    public function getCantidad(){
        return count($this->getPdeOvInsInsumoIdentificados());
    }
    
    public function getCostoTotal(){
        $costo = 0;
        
        foreach($this->getPdeOvInsInsumoIdentificados() as $pde_ov_ins_insumo_identificado){
            $costo+= $pde_ov_ins_insumo_identificado->getCosto();
        }
        
        return $costo;
    }
    
    
    static function generarPdeOv(
                        $pde_ov_centro_venta_id, 
                        $pde_ov_cliente, 
                        $pde_ov_gral_forma_pago_id, 
                        $pde_ov_gral_moneda_id, 
                        $pde_ov_factura_nro, 
                        $pde_ov_fecha,
                        $txa_observacion,
                        $arr_identificados
        ){
        
        // se registra el PdeOv
        $pde_ov = new PdeOv();
        $pde_ov->setPdeOvCentroVentaId($pde_ov_centro_venta_id);
        $pde_ov->setCliente($pde_ov_cliente);
        $pde_ov->setFecha($pde_ov_fecha);
        $pde_ov->setFacturaNro($pde_ov_factura_nro);
        $pde_ov->setEstado(1);
        $pde_ov->setGralFormaPagoId($pde_ov_gral_forma_pago_id);
        $pde_ov->setGralMonedaId($pde_ov_gral_moneda_id);
        $pde_ov->setObservacion($txa_observacion);
        $pde_ov->save();
        
        $pde_ov->setCodigo($pde_ov->getCodigoConCeros());
        $pde_ov->save();
            
        // se registra el nuevo estado de PdeOv
        $pde_ov_estado = $pde_ov->setPdeOvEstado(
            PdeOvTipoEstado::ESTADO_GENERADO, 
            $observaciones = ''
        );
        
        // se asignan los destinatarios
        $pde_ov->setPdeOvDestinatarios();
        
        // se envian avisos a los destinatarios
        $asunto = 'OV Orden de Venta Generada #'.$pde_ov->getCodigo().' - '.Gral::getFechaToWEB($pde_ov->getFecha());
        $pde_ov->enviarAvisos($asunto);
        
        $gral_moneda = $pde_ov->getGralMoneda();
        $pde_ov_centro_venta = $pde_ov->getPdeOvCentroVenta();
        
        // realizar movimiento pedido de respaldo y movimiento de stock
        foreach($arr_identificados as $arr_identificado){
            $ins_insumo_identificado_id = $arr_identificado['identificado_id'];
            $ins_insumo_instancia_id = $arr_identificado['instancia_id'];
            $pde_ov_variable_id = $arr_identificado['variable_id'];

            $pde_ov_variable = PdeOvVariable::getOxId($pde_ov_variable_id);
            if(!$pde_ov_variable){
                $pde_ov_variable_id = null;
            }
            
            $ins_insumo_identificado = InsInsumoIdentificado::getOxId($ins_insumo_identificado_id);
            $ins_insumo = $ins_insumo_identificado->getInsInsumo();
            
            $pde_ov_costo_actual = $ins_insumo_identificado->getPdeOvCostoActual($pde_ov_centro_venta, $pde_ov_variable);
            $costo = $ins_insumo_identificado->getCostoVentaActual($pde_ov_centro_venta, $gral_moneda, $pde_ov_variable);
            /*
            Gral::prr($arr_identificado);
            Gral::prr($pde_ov_variable);
            Gral::prr($pde_ov_costo_actual);
            Gral::prr($costo);
            */
            $pde_ov_ins_insumo_identificado = new PdeOvInsInsumoIdentificado();
            $pde_ov_ins_insumo_identificado->setPdeOvId($pde_ov->getId());
            $pde_ov_ins_insumo_identificado->setInsInsumoIdentificadoId($ins_insumo_identificado_id);
            $pde_ov_ins_insumo_identificado->setInsInsumoId($ins_insumo->getId());
            $pde_ov_ins_insumo_identificado->setInsInsumoInstanciaId($ins_insumo_instancia_id);

            $pde_ov_ins_insumo_identificado->setPdeOvCostoId($pde_ov_costo_actual->getId());
            $pde_ov_ins_insumo_identificado->setPdeOvVariableId($pde_ov_variable_id);
            
            $pde_ov_ins_insumo_identificado->setGralMonedaId($gral_moneda->getId());
            $pde_ov_ins_insumo_identificado->setCosto($costo);
            $pde_ov_ins_insumo_identificado->setCotizacionRespectoPeso($gral_moneda->getCotizacionRespectoPeso());
            $pde_ov_ins_insumo_identificado->setEstado(1);
            $pde_ov_ins_insumo_identificado->save();
            
            PdiPedido::setPdiPedidoPorVentaDeInsumoIdentificado(
                        $pde_ov,
                        $ins_insumo_identificado_id, 
                        $observacion = ''
                    );
        }   
    }
    
    
    /**
     * Metodo que registra la finalizacion de una OV
     */
    public function finalizarPdeOv($observacion){
            // se registra estado del pedido, PdeEstado
            $pde_ov_estado = $this->setPdeOvEstado(
                PdeOvTipoEstado::ESTADO_FINALIZADO,
                $observacion
             );

            // se avisa a destinatarios de cambios, PdeOvDestinatario
            $this->setPdeOvDestinatariosAviso();
    }
    
    /**
     * Metodo que registra la anulacion de una OV
     */
    public function anularPdeOv($observacion){
            // se registra estado del pedido, PdeEstado
            $pde_ov_estado = $this->setPdeOvEstado(
                PdeOvTipoEstado::ESTADO_ANULADO,
                $observacion
             );

            // se avisa a destinatarios de cambios, PdeOvDestinatario
            $this->setPdeOvDestinatariosAviso();
            
            
            foreach($this->getPdeOvInsInsumoIdentificados() as $pde_ov_ins_insumo_identificado){
                $ins_insumo_identificado_id = $pde_ov_ins_insumo_identificado->getInsInsumoIdentificadoId();
                
                PdiPedido::setPdiPedidoPorVentaAnuladaDeInsumoIdentificado(
                        $this,
                        $ins_insumo_identificado_id, 
                        $observacion
                    );
            }
    }    
}
?>