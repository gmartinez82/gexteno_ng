<?php 
require_once "base/BPdeRecepcionDestinatario.php"; 
class PdeRecepcionDestinatario extends BPdeRecepcionDestinatario
{
    /**
     * Metodo que envio los emails pendientes de envio
     */
    static function enviarEmailsPendientes(){
        $os_pendientes = self::getAvisosEmailPendientes();
        //Gral::prr($os_pendientes);
        //exit;
        
        foreach($os_pendientes as $o){
            $padre = $o->getPdeRecepcion();
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
        $c->add(PdeRecepcionDestinatario::GEN_ATTR_AVISO_EMAIL, 0, Criterio::IGUAL);
        //$c->add(PdeRecepcionDestinatario::GEN_ATTR_CREADO_POR, PdeRecepcionDestinatario::GEN_ATTR_US_USUARIO_ID, Criterio::DISTINTO_SC);
        $c->addTabla(PdeRecepcionDestinatario::GEN_TABLA);
        $c->setCriterios();
        
        $cont = 0;
        $os = PdeRecepcionDestinatario::getPdeRecepcionDestinatarios(null, $c);
        $array = array();
        foreach($os as $o){
            if($cont >= Mail::MAIL_COLA_CANTIDAD_MAX) continue;
            
            $pde_recepcion_estado = $o->getPdeRecepcion()->getPdeRecepcionEstadoActual();
            //if($o->getUsUsuarioId() != $o->getPdeRecepcion()->getCreadoPor()){
            if($o->getUsUsuarioId() != $pde_recepcion_estado->getCreadoPor()){
                $cont++;
                $array[] = $o;
            }
        }
        return $array;
    }    
}
?>