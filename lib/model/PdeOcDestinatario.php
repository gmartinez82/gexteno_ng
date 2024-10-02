<?php 
require_once "base/BPdeOcDestinatario.php"; 
class PdeOcDestinatario extends BPdeOcDestinatario
{
    /**
     * Metodo que envio los emails pendientes de envio
     */
    static function enviarEmailsPendientes(){
        $os_pendientes = self::getAvisosEmailPendientes();
        //Gral::prr($os_pendientes);
        //return;
        
        foreach($os_pendientes as $o){
            $padre = $o->getPdeOc();
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
        $fecha = date('Y-m-j');
        $fecha = strtotime ('-1 day', strtotime($fecha));
        $fecha = date ('Y-m-j', $fecha);

        $c = new Criterio();
        $c->add(PdeOcDestinatario::GEN_ATTR_AVISO_EMAIL, 0, Criterio::IGUAL);
        //$c->add(PdeOcDestinatario::GEN_ATTR_CREADO_POR, PdeOcDestinatario::GEN_ATTR_US_USUARIO_ID, Criterio::DISTINTO_SC);
        $c->add(PdeOcDestinatario::GEN_ATTR_CREADO.'::date', $fecha, Criterio::MAYORIGUAL);
        $c->addTabla(PdeOcDestinatario::GEN_TABLA);
        $c->addOrden(PdeOcDestinatario::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $p = new Paginador(10, 1); // limite de envios por cada vez
        $p = null;
        
        $cont = 0;
        $os = PdeOcDestinatario::getPdeOcDestinatarios(null, $c);
        $array = array();
        foreach($os as $o){
            if($cont >= Mail::MAIL_COLA_CANTIDAD_MAX) continue;
            
            $pde_oc_estado = $o->getPdeOc()->getPdeOcEstadoActual();
            //if($o->getUsUsuarioId() != $o->getPdeOc()->getCreadoPor()){
            if($o->getUsUsuarioId() != $pde_oc_estado->getCreadoPor()){
                $cont++;
                $array[] = $o;
            }
        }
        return $array;
    }    
}
?>