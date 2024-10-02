<?php 
require_once "base/BGralSucursalValoracionAgrupacion.php"; 
class GralSucursalValoracionAgrupacion extends BGralSucursalValoracionAgrupacion
{
    
    /**
     * 
     */
    public function getDescripcion() {
        
        $descripcion = '';
        $descripcion.= '#';
        $descripcion.= $this->getId();
        $descripcion.= '. ';
        $descripcion.= $this->getNombre();
        $descripcion.= ' - ';
        $descripcion.= $this->getGralSucursal()->getDescripcion();
        $descripcion.= ': ';
        $descripcion.= $this->getValoracion().' Puntos';
        
        return $descripcion;
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
            'gral_sucursal_valoracion_agrupacion_id' => $this->getId(),
        );
        $archivo = Gral::getPathAbs() . "mailing/plantillas/TIENDA/index_gral_sucursal_valoracion_agrupacion.php";
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