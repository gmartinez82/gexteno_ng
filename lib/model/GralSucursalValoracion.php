<?php 
require_once "base/BGralSucursalValoracion.php"; 
class GralSucursalValoracion extends BGralSucursalValoracion
{
    
    /**
     * 
     */
    public function getDescripcion() {
        
        if($this->getGralSucursalValoracionTipoItemId() == 'null'){
            $descripcion = '';
            $descripcion.= $this->getGralSucursal()->getDescripcion();
            $descripcion.= ': ';
            $descripcion.= $this->getValoracion().' Puntos';
        }else{
            $descripcion = '';
            $descripcion.= $this->getGralSucursal()->getDescripcion();
            $descripcion.= ' - ';
            $descripcion.= $this->getGralSucursalValoracionTipoItem()->getDescripcionPublica();
            $descripcion.= ': ';
            $descripcion.= $this->getValoracion().' Puntos';        
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
    
    /**
     * 
     */
    static function setRegistrarValoracion($gral_sucursal_id, $valoracions, $apellido, $nombre, $email, $telefono, $observacion){
        
        // ---------------------------------------------------------------------
        // se verifica que la session no haya registrado
        // ---------------------------------------------------------------------
        $array = array(
            array('campo' => GralSucursalValoracionAgrupacion::GEN_ATTR_GRAL_SUCURSAL_ID, 'valor' => $gral_sucursal_id),
            array('campo' => GralSucursalValoracionAgrupacion::GEN_ATTR_SESSION, 'valor' => session_id()),
            array('campo' => GralSucursalValoracionAgrupacion::GEN_ATTR_FECHA, 'valor' => date('Y-m-d')),
        );
        $gral_sucursal_valoracion_agrupacion = GralSucursalValoracionAgrupacion::getOxArray($array);
        if(!$gral_sucursal_valoracion_agrupacion){
            $gral_sucursal_valoracion_agrupacion = new GralSucursalValoracionAgrupacion();
        }

        // ---------------------------------------------------------------------
        // se registra la valoracion agrupacion
        // ---------------------------------------------------------------------
        $gral_sucursal_valoracion_agrupacion->setGralSucursalId($gral_sucursal_id);
        $gral_sucursal_valoracion_agrupacion->setValoracion(0);
        $gral_sucursal_valoracion_agrupacion->setFecha(date('Y-m-d'));
        $gral_sucursal_valoracion_agrupacion->setApellido($apellido);
        $gral_sucursal_valoracion_agrupacion->setNombre($nombre);
        $gral_sucursal_valoracion_agrupacion->setEmail($email);
        $gral_sucursal_valoracion_agrupacion->setTelefono($telefono);
        $gral_sucursal_valoracion_agrupacion->setObservacion($observacion);

        $gral_sucursal_valoracion_agrupacion->setNavegador($_SERVER['HTTP_USER_AGENT']);
        $gral_sucursal_valoracion_agrupacion->setSession(session_id());
        $gral_sucursal_valoracion_agrupacion->setIp($_SERVER['REMOTE_ADDR'] . ' - ' . $_SERVER['HTTP_X_FORWARDED_FOR']);

        $gral_sucursal_valoracion_agrupacion->setEstado(1);
        $gral_sucursal_valoracion_agrupacion->save();        
        //Gral::prr($gral_sucursal_valoracion_agrupacion);        
        
        foreach($valoracions as $tipo_item_id => $valoracion){

            // ---------------------------------------------------------------------
            // se verifica que la session no haya registrado
            // ---------------------------------------------------------------------
            $array = array(
                array('campo' => self::GEN_ATTR_GRAL_SUCURSAL_VALORACION_AGRUPACION_ID, 'valor' => $gral_sucursal_valoracion_agrupacion->getId()),
                array('campo' => self::GEN_ATTR_GRAL_SUCURSAL_VALORACION_TIPO_ITEM_ID, 'valor' => $tipo_item_id),
                array('campo' => self::GEN_ATTR_GRAL_SUCURSAL_ID, 'valor' => $gral_sucursal_id),
                array('campo' => self::GEN_ATTR_SESSION, 'valor' => session_id()),
                array('campo' => self::GEN_ATTR_FECHA, 'valor' => date('Y-m-d')),
            );
            $gral_sucursal_valoracion = GralSucursalValoracion::getOxArray($array);
            if(!$gral_sucursal_valoracion){
                $gral_sucursal_valoracion = new GralSucursalValoracion();
            }
            
            // ---------------------------------------------------------------------
            // se registra la valoracion
            // ---------------------------------------------------------------------
            $gral_sucursal_valoracion->setGralSucursalValoracionAgrupacionId($gral_sucursal_valoracion_agrupacion->getId());
            $gral_sucursal_valoracion->setGralSucursalValoracionTipoItemId($tipo_item_id);
            $gral_sucursal_valoracion->setGralSucursalId($gral_sucursal_id);
            $gral_sucursal_valoracion->setValoracion($valoracion);
            $gral_sucursal_valoracion->setFecha(date('Y-m-d'));
            $gral_sucursal_valoracion->setApellido($apellido);
            $gral_sucursal_valoracion->setNombre($nombre);
            $gral_sucursal_valoracion->setEmail($email);
            $gral_sucursal_valoracion->setTelefono($telefono);
            $gral_sucursal_valoracion->setObservacion($observacion);

            $gral_sucursal_valoracion->setNavegador($_SERVER['HTTP_USER_AGENT']);
            $gral_sucursal_valoracion->setSession(session_id());
            $gral_sucursal_valoracion->setIp($_SERVER['REMOTE_ADDR'] . ' - ' . $_SERVER['HTTP_X_FORWARDED_FOR']);

            $gral_sucursal_valoracion->setEstado(1);
            $gral_sucursal_valoracion->save();        
            //Gral::prr($gral_sucursal_valoracion);
        }
        
        // ---------------------------------------------------------------------
        // se envia correo a responsable
        // ---------------------------------------------------------------------
        $gral_sucursal_valoracion_agrupacion->setEnviarEmailAEmpresa($enviar = true);        
        
        return $gral_sucursal_valoracion_agrupacion;
    }
    
    /**
     * 
     */
    public function setEnviarEmailAEmpresa($enviar = false){
        if (!Mail::MAIL_ACTIVO){
            return false;
        }

        $mail_asunto = Gral::getConfig('gral_cliente') . ' - Valoracion de Sucursal ' . $this->getGralSucursal()->getDescripcion() . ' ' . date('d/m/Y H:i');

        include_once Gral::getPathAbs() . "comps/phpmailer/class.phpmailer.php";

        $param = array(
            'gral_sucursal_valoracion_id' => $this->getId(),
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/TIENDA/index_gral_sucursal_valoracion.php";
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