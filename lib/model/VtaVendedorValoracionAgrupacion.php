<?php 
require_once "base/BVtaVendedorValoracionAgrupacion.php"; 
class VtaVendedorValoracionAgrupacion extends BVtaVendedorValoracionAgrupacion
{
    public function getDescripcion() {
        
        $descripcion = '';
        $descripcion.= '#';
        $descripcion.= $this->getId();
        $descripcion.= '. ';
        $descripcion.= $this->getNombre();
        $descripcion.= ' - ';
        $descripcion.= $this->getVtaVendedor()->getDescripcion();
        $descripcion.= ': ';
        $descripcion.= $this->getValoracion().' Puntos';
        
        return $descripcion;
    }
    
    /*
     * Autor: Baez Julian
     * Fecha: 23/12/2022 20:00
     */
    public function setEnviarEmailAEmpresa__($enviar = false){
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

    
    /**
     * 
     * @creado_por Baez Julian
     * @creado 23/12/2022 20:00
     * 
     * @modificado_por Esteban Martinez
     * @modificado 26/08/2024
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
        $archivo = Gral::getPathAbs() . "mailing/plantillas/TIENDA/index_vta_vendedor_valoracion_agrupacion.php";
        
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