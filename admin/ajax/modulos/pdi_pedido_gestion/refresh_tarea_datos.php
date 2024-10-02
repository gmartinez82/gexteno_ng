<?php
include "_autoload.php";

$texto_tarea_base = "";
$texto_tarea_base = Gral::getVars(1, 'texto_tarea_base');

/*
$c = new Criterio();
$c->add('estado', 1, Criterio::IGUAL);
$c->add('UPPER(descripcion)', '%'.strtoupper($texto_tarea_base).'%', Criterio::LIKE);
$c->addTabla('tal_tarea_base');
$c->addOrden('descripcion');
$c->setCriterios();
$tal_tareas_bases = TalTareaBase::getTalTareaBases(null, $c);
*/
/*
$c = new Criterio();
$c->add("estado", 1, Criterio::IGUAL);
$c->add("to_ascii(UPPER(descripcion))", "%".strtoupper($texto_tarea_base)."%", Criterio::LIKE);
$c->addTabla("tal_tarea_base");
$c->addOrden("descripcion");
$c->setCriterios();
$tareas_padre = TalTareaBase::getTalTareaBases(null, $c);
*/
$tareas_padre = TalTareaBase::getTalTareaBasesXPalabras($texto_tarea_base);

$arr_tareas = array();
$arr_niveles = array();
$arr_tarea_id = array();

foreach($tareas_padre as $tarea){
    TalTareaBase::setArrayTalTareaBasePadreArbol($tarea->getId(), $arr_tareas, $arr_niveles, 0);
    $arr_tarea_id[] = $tarea->getId();
}

foreach($arr_tareas as $arr_tarea){
    $o_tarea = $arr_tarea["tarea"];
    if($o_tarea){
    	$arr_tarea_id[] = $arr_tarea["tarea"]->getId();
    }	
}

if($arr_tarea_id){
    $c = new Criterio();
    $c->add("permite_insumo", 1, Criterio::IGUAL);
    $c->add("estado", 1, Criterio::IGUAL);
    $c->add("id", "(".implode(",", $arr_tarea_id).")", Criterio::IN);
    $c->addTabla("tal_tarea_base");
    $c->addOrden("orden");
    $c->setCriterios();
    $tal_tareas_bases = TalTareaBase::getTalTareaBases(null, $c);
}
else
{
    $tal_tareas_bases = array();
}
//Gral::prr($tal_tareas_bases);


foreach($tal_tareas_bases as $tal_tarea_base){
?>
<div class="uno" tarea_id="<?php echo $tal_tarea_base->getId() ?>">
    <div class="inline descripcion"><?php echo utf8_encode($tal_tarea_base->getDescripcion()) ?></div>
    <div class="arbol"><?php echo utf8_encode($tal_tarea_base->getCodigo()) ?></div>
    <?php
	$mnt_prv_item_resolucions = $tal_tarea_base->getMntPrvItemResolucions();
	$mnt_prv_item_resolucion = $mnt_prv_item_resolucions[0];
            if(count($mnt_prv_item_resolucions) > 0):
	?>
            <div class="preventivo" title="<?php Lang::_lang('Vinculado a Preventivo') ?>">Prv: <?php echo utf8_encode($mnt_prv_item_resolucion->getMntPrvItem()->getMntPrvRubro()->getDescripcion()).'->'. utf8_encode($mnt_prv_item_resolucion->getMntPrvItem()->getDescripcion()) ?></div>
    <?php   endif;  ?>
</div>
<?php
}
?>