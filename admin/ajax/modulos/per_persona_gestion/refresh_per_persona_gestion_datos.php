<?php
include_once '_autoload.php';

$pag = Gral::getVars(2, 'pag', 1);
PerPersona::setSesPag($pag);

$criterio = new Criterio(PerPersona::SES_CRITERIOS);
$criterio->setWhereInit(true);
$criterio->addTabla('per_persona');

$paginador = new Paginador(PerPersona::getSesPagCantidad(), PerPersona::getSesPag());
$per_personas = PerPersona::getPerPersonasDesdeBackend($paginador, $criterio);

include 'per_persona_gestion_datos.php';
?>

