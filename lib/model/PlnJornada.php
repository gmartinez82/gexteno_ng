<?php 
require_once "base/BPlnJornada.php"; 
class PlnJornada extends BPlnJornada
{
    
    public function getDescripcionXXX(){
        return parent::getDescripcion()." - ".$this->getHorasTramoJornada()." horas";
    }

    public function saveDesdeBackend() {
        
        $gral_novedad = GralNovedad::getOxCodigo(GralNovedad::TIPO_TRABAJO);
        $this->setGralNovedadId($gral_novedad->getId());
        
        parent::saveDesdeBackend();
    }
    
    public function getHorasTramoJornada() 
    {
        $horas_tramo = 0;
        $pln_jornada_tramos = $this->getPlnJornadaTramos();
        foreach($pln_jornada_tramos as $pln_jornada_tramo){
            $horas_tramo = $horas_tramo + $pln_jornada_tramo->getHorasTramo();
        }
        return $horas_tramo;
    }
}
?>