<?php 
require_once "base/BVtaVendedorValoracion.php"; 
class VtaVendedorValoracion extends BVtaVendedorValoracion
{
    /*
     * Autor: Baez Julian
     * Fecha: 23/12/2022 20:00
     */
    static function getColor($codigo){
        $color = '';
        switch ($codigo)
        {
            case 1:
                $color = '#e84c3d';
                break;
            case 2:
                $color = '#f1c40f';
                break;
            case 3:
                $color = '#3598db';
                break;
            case 4:
                $color = '#67f687';
                break;
            case 5:
                $color = '#27ae61';
                break;
            default:
                $color = '#cccccc';
        }
        return $color;
    }
    
    /*
     * Autor: Baez Julian
     * Fecha: 23/12/2022 20:00
     */
    public function getDescripcion__() {
        $descripcion = '';
        $descripcion.= $this->getVtaVendedor()->getDescripcion();
        $descripcion.= ' ';
        $descripcion.= $this->getValoracion().' Puntos';
        return $descripcion;
    }
    

    public function getDescripcion() {
        
        if($this->getVtaVendedorValoracionTipoItemId() == 'null'){
            $descripcion = '';
            $descripcion.= $this->getVtaVendedor()->getDescripcion();
            $descripcion.= ': ';
            $descripcion.= $this->getValoracion().' Puntos';
        }else{
            $descripcion = '';
            $descripcion.= $this->getVtaVendedor()->getDescripcion();
            $descripcion.= ' - ';
            $descripcion.= $this->getVtaVendedorValoracionTipoItem()->getDescripcionPublica();
            $descripcion.= ': ';
            $descripcion.= $this->getValoracion().' Puntos';        
            $descripcion.= $this->getId();        
        }
        
        return $descripcion;
    }

    
    /*
     * Autor: Baez Julian
     * Fecha: 23/12/2022 20:00
     * Metodo que retorna el array para mostrar en el ADM
     */
    public function getArrDescripcionExtendidaParaBackend() {
        $array = array();

        $array = array(
            'apellido' => array(
                'label' => 'Apellido',
                'dato' => $this->getApellido(),
            ),
            'nombre' => array(
                'label' => 'Nombre',
                'dato' => $this->getNombre(),
            ),
            'email' => array(
                'label' => 'Email',
                'dato' => $this->getEmail(),
            ),
            'telefono' => array(
                'label' => 'Telefono',
                'dato' => $this->getTelefono(),
            ),
            'observacion' => array(
                'label' => 'Obs',
                'dato' => $this->getObservacion(),
            ),
        );

        return $array;
    }
    
    /*
     * Autor: Baez Julian
     * Fecha: 23/12/2022 20:00
     */
    static function setRegistrarValoracion__($vta_vendedor_id, $valoracion, $apellido, $nombre, $email, $telefono, $observacion){
        
        // ---------------------------------------------------------------------
        // se verifica que la session no haya registrado
        // ---------------------------------------------------------------------
        $array = array(
            array('campo' => self::GEN_ATTR_SESSION, 'valor' => session_id()),
            array('campo' => self::GEN_ATTR_FECHA, 'valor' => date('Y-m-d')),
        );
        $vta_vendedor_valoracion = VtaVendedorValoracion::getOxArray($array);
        if(!$vta_vendedor_valoracion){
            $vta_vendedor_valoracion = new VtaVendedorValoracion();
        }
        
        // ---------------------------------------------------------------------
        // se registra la valoracion
        // ---------------------------------------------------------------------
        $vta_vendedor_valoracion->setVtaVendedorId($vta_vendedor_id);
        $vta_vendedor_valoracion->setValoracion($valoracion);
        $vta_vendedor_valoracion->setFecha(date('Y-m-d'));
        $vta_vendedor_valoracion->setApellido($apellido);
        $vta_vendedor_valoracion->setNombre($nombre);
        $vta_vendedor_valoracion->setEmail($email);
        $vta_vendedor_valoracion->setTelefono($telefono);
        $vta_vendedor_valoracion->setObservacion($observacion);
        
        $vta_vendedor_valoracion->setNavegador($_SERVER['HTTP_USER_AGENT']);
        $vta_vendedor_valoracion->setSession(session_id());
        $vta_vendedor_valoracion->setIp($_SERVER['REMOTE_ADDR'] . ' - ' . $_SERVER['HTTP_X_FORWARDED_FOR']);
        
        $vta_vendedor_valoracion->setEstado(1);
        $vta_vendedor_valoracion->save();        
        //Gral::prr($vta_vendedor_valoracion);
        
        // ---------------------------------------------------------------------
        // se envia correo a responsable
        // ---------------------------------------------------------------------
        $vta_vendedor_valoracion->setEnviarEmailAEmpresa($enviar = true);        
        
        return $vta_vendedor_valoracion;
    }
    
    
    /**
     * 
     * @creado_por Baez Julian
     * @creado 23/12/2022 20:00
     * 
     * @modificado_por Esteban Martinez
     * @modificado 26/08/2024
     */
    static function setRegistrarValoracion($vta_vendedor_id, $valoracions, $apellido, $nombre, $email, $telefono, $observacion){
        
        // ---------------------------------------------------------------------
        // se verifica que la session no haya registrado
        // ---------------------------------------------------------------------
        $array = array(
            array('campo' => VtaVendedorValoracionAgrupacion::GEN_ATTR_VTA_VENDEDOR_ID, 'valor' => $vta_vendedor_id),
            array('campo' => VtaVendedorValoracionAgrupacion::GEN_ATTR_SESSION, 'valor' => session_id()),
            array('campo' => VtaVendedorValoracionAgrupacion::GEN_ATTR_FECHA, 'valor' => date('Y-m-d')),
        );
        $vta_vendedor_valoracion_agrupacion = VtaVendedorValoracionAgrupacion::getOxArray($array);
        if(!$vta_vendedor_valoracion_agrupacion){
            $vta_vendedor_valoracion_agrupacion = new VtaVendedorValoracionAgrupacion();
        }
        
        // ---------------------------------------------------------------------
        // se registra la valoracion agrupacion
        // ---------------------------------------------------------------------
        $vta_vendedor_valoracion_agrupacion->setVtaVendedorId($vta_vendedor_id);
        $vta_vendedor_valoracion_agrupacion->setValoracion(0);
        $vta_vendedor_valoracion_agrupacion->setFecha(date('Y-m-d'));
        $vta_vendedor_valoracion_agrupacion->setApellido($apellido);
        $vta_vendedor_valoracion_agrupacion->setNombre($nombre);
        $vta_vendedor_valoracion_agrupacion->setEmail($email);
        $vta_vendedor_valoracion_agrupacion->setTelefono($telefono);
        $vta_vendedor_valoracion_agrupacion->setObservacion($observacion);

        $vta_vendedor_valoracion_agrupacion->setNavegador($_SERVER['HTTP_USER_AGENT']);
        $vta_vendedor_valoracion_agrupacion->setSession(session_id());
        $vta_vendedor_valoracion_agrupacion->setIp($_SERVER['REMOTE_ADDR'] . ' - ' . $_SERVER['HTTP_X_FORWARDED_FOR']);

        $vta_vendedor_valoracion_agrupacion->setEstado(1);
        $vta_vendedor_valoracion_agrupacion->save();        
        //Gral::prr($gral_sucursal_valoracion_agrupacion);        
        
        foreach($valoracions as $tipo_item_id => $valoracion){

            // ---------------------------------------------------------------------
            // se verifica que la session no haya registrado
            // ---------------------------------------------------------------------
            $array = array(
                array('campo' => self::GEN_ATTR_VTA_VENDEDOR_VALORACION_AGRUPACION_ID, 'valor' => $vta_vendedor_valoracion_agrupacion->getId()),
                array('campo' => self::GEN_ATTR_VTA_VENDEDOR_VALORACION_TIPO_ITEM_ID, 'valor' => $tipo_item_id),
                array('campo' => self::GEN_ATTR_VTA_VENDEDOR_ID, 'valor' => $vta_vendedor_id),
                array('campo' => self::GEN_ATTR_SESSION, 'valor' => session_id()),
                array('campo' => self::GEN_ATTR_FECHA, 'valor' => date('Y-m-d')),
            );
            $vta_vendedor_valoracion = VtaVendedorValoracion::getOxArray($array);
            if(!$vta_vendedor_valoracion){
                $vta_vendedor_valoracion = new VtaVendedorValoracion();
            }
            
            // ---------------------------------------------------------------------
            // se registra la valoracion
            // ---------------------------------------------------------------------
            $vta_vendedor_valoracion->setVtaVendedorValoracionAgrupacionId($vta_vendedor_valoracion_agrupacion->getId());
            $vta_vendedor_valoracion->setVtaVendedorValoracionTipoItemId($tipo_item_id);
            $vta_vendedor_valoracion->setVtaVendedorId($vta_vendedor_id);
            $vta_vendedor_valoracion->setValoracion($valoracion);
            $vta_vendedor_valoracion->setFecha(date('Y-m-d'));
            $vta_vendedor_valoracion->setApellido($apellido);
            $vta_vendedor_valoracion->setNombre($nombre);
            $vta_vendedor_valoracion->setEmail($email);
            $vta_vendedor_valoracion->setTelefono($telefono);
            $vta_vendedor_valoracion->setObservacion($observacion);

            $vta_vendedor_valoracion->setNavegador($_SERVER['HTTP_USER_AGENT']);
            $vta_vendedor_valoracion->setSession(session_id());
            $vta_vendedor_valoracion->setIp($_SERVER['REMOTE_ADDR'] . ' - ' . $_SERVER['HTTP_X_FORWARDED_FOR']);

            $vta_vendedor_valoracion->setEstado(1);
            $vta_vendedor_valoracion->save();        
            //Gral::prr($gral_sucursal_valoracion);
        }
        
        // ---------------------------------------------------------------------
        // se envia correo a responsable
        // ---------------------------------------------------------------------
        $vta_vendedor_valoracion_agrupacion->setEnviarEmailAEmpresa($enviar = true);        
        
        return $vta_vendedor_valoracion_agrupacion;
    }

    
    /*
     * Autor: Baez Julian
     * Fecha: 23/12/2022 20:00
     */
    public function setEnviarEmailAEmpresa($enviar = false){
        if (!Mail::MAIL_ACTIVO){
            return false;
        }

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Valoracion de Vendedor ' . $this->getVtaVendedor()->getDescripcion() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $param = array(
            'vta_vendedor_valoracion_id' => $this->getId(),
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/TIENDA/index_vta_vendedor_valoracion.php";
        $msg = Gral::get_include_contents($archivo, $param);

        if (!$enviar) {
            echo $msg;
            return;
        }

        $mail = new PHPMailer(); // defaults to using php "mail()"

        try {
            //$mail->SetLanguage('es', 'language/');
            $mail->IsSMTP(); //indico a la clase que use SMTP
            $mail->SMTPAuth = true;
            $mail->SMTPDebug = 0;
            if (Mail::MAIL_SECURE != '') {
                $mail->SMTPSecure = Mail::MAIL_SECURE;
            }
            $mail->CharSet = 'UTF-8';

            $mail->Host = Mail::MAIL_SERVIDOR_ENVIO; // SMTP server
            $mail->Username = Mail::MAIL_CASILLA_USUARIO;
            $mail->Password = Mail::MAIL_PASS_ENVIO;
            $mail->Port = Mail::MAIL_PUERTO_ENVIO;

            $mail->From = Mail::MAIL_CASILLA_ENVIO;
            $mail->FromName = Mail::MAIL_NOMBRE_REMITENTE;
            $mail->AddReplyTo(Mail::MAIL_CASILLA_REPLYTO);

            $mail->IsHTML(true);
            $mail->Subject = $mail_asunto;

            $mail->Body = $msg;

            $mail->AddAddress(Mail::MAIL_CASILLA_VALORACION_SUCURSAL);
            $mail->AddAddress(Mail::MAIL_CASILLA_VALORACION_SUCURSAL_2);
            $mail->AddAddress(Mail::MAIL_CASILLA_VALORACION_SUCURSAL_3);
            $mail->AddAddress(Mail::MAIL_CASILLA_VALORACION_SUCURSAL_4);
            $mail->AddBCC(Mail::MAIL_CASILLA_AUDITORIA_ADMIN);

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
}
?>