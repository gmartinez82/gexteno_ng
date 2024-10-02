<?php 
require_once "base/BPdeCotizacionDestinatario.php"; 
class PdeCotizacionDestinatario extends BPdeCotizacionDestinatario
{
    /**
     * Metodo que envio los emails pendientes de envio
     */
    static function enviarEmailsPendientes(){
        $os_pendientes = self::getAvisosEmailPendientes();
        //Gral::prr($os_pendientes);
        //return;
        
        foreach($os_pendientes as $o){
            $padre = $o->getPdeCotizacion();
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
        $c->add(PdeCotizacionDestinatario::GEN_ATTR_AVISO_EMAIL, 0, Criterio::IGUAL);
        //$c->add(PdeCotizacionDestinatario::GEN_ATTR_CREADO_POR, PdeCotizacionDestinatario::GEN_ATTR_US_USUARIO_ID, Criterio::DISTINTO_SC);
        $c->add(PdeCotizacionDestinatario::GEN_ATTR_CREADO.'::date', $fecha, Criterio::MAYORIGUAL);
        $c->addTabla(PdeCotizacionDestinatario::GEN_TABLA);
        $c->addOrden(PdeCotizacionDestinatario::GEN_ATTR_ID, Criterio::_ASC);
        $c->setCriterios();
        
        $p = new Paginador(20, 1); // limite de envios por cada vez
        $p = null;
        
        $cont = 0;
        $os = PdeCotizacionDestinatario::getPdeCotizacionDestinatarios($p, $c);
        $array = array();
        foreach($os as $o){
            if($cont >= Mail::MAIL_COLA_CANTIDAD_MAX) continue;
            
            if($o->getUsUsuarioId() != $o->getPdeCotizacion()->getCreadoPor()){
                $cont++;
                $array[] = $o;
            }
        }
        return $array;
    }    
}
?>