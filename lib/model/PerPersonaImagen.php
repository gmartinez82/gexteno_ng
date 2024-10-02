<?php 
require_once "base/BPerPersonaImagen.php"; 
class PerPersonaImagen extends BPerPersonaImagen
{
    public function save() {
        $per_persona = $this->getPerPersona();
        
        //$per_persona->setSincroEstado(0);
        $per_persona->save();

        // se cambia estado de sincroniacion de la persona
       // $per_persona->inicializarEsquemaSincronizacion();        
        
        parent::save();
    }
}
?>