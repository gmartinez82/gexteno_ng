<?php 
require_once "base/BPdeOcReclamoDestinatario.php"; 
class PdeOcReclamoDestinatario extends BPdeOcReclamoDestinatario
{
    /**
     * Metodo que envio los emails pendientes de envio
     */
    static function enviarEmailsPendientes(){
        $os_pendientes = self::getAvisosEmailPendientes();
        
        foreach($os_pendientes as $o){
            $padre = $o->getPdeOcReclamo();
            $asunto = $o->getDescripcion();
            $us_usuario_destinatario = $o->getUsUsuario();
            
            $estado_envio_mail = $padre->enviarEmailAviso($asunto, $us_usuario_destinatario);
            if($estado_envio_mail){
                $o->setAvisoEmail(1);
                $o->save();
            }
        }
    }
    
    /**
     * Metodo que retorna todos los avisos a destinatarios que aun fueron avisados por email
     * @return type
     */
    static function getAvisosEmailPendientes(){
        $c = new Criterio();
        $c->add(PdeOcReclamoDestinatario::GEN_ATTR_AVISO_EMAIL, 0, Criterio::IGUAL);
        //$c->add(PdeOcReclamoDestinatario::GEN_ATTR_CREADO_POR, PdeOcReclamoDestinatario::GEN_ATTR_US_USUARIO_ID, Criterio::DISTINTO_SC);
        $c->addTabla(PdeOcReclamoDestinatario::GEN_TABLA);
        $c->setCriterios();
        
        $cont = 0;
        $os = PdeOcReclamoDestinatario::getPdeOcReclamoDestinatarios(null, $c);
        $array = array();
        foreach($os as $o){
            if($cont >= Mail::MAIL_COLA_CANTIDAD_MAX) continue;

            if($o->getUsUsuarioId() != $o->getPdeOcReclamo()->getCreadoPor()){
                $cont++;
                $array[] = $o;
            }
        }
        return $array;
    }    
}
?>