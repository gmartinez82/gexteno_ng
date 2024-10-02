<?php
//Gral::prr($arr_dias);

$cantidad_dias_mostrar = PerPersona::getSesDiasPantallaCantidad();

$per_id              = $per_persona->getId();
$per_legajo          = $per_persona->getLegajo();
$per_descripcion     = $per_persona->getDescripcion();
$per_tipo_documento  = $per_persona->getGralTipoDocumento()->getDescripcion();
$per_documento       = $per_persona->getDocumento();
$gral_empresa        = $per_persona->getGralEmpresa();

$arr_datos_novedad_total = array();
$arr_datos_pln_jornadas = array();
if ($co_sector){
    $co_sector_id = $co_sector->getId();

}

if ($gral_empresa) {
    $gral_empresa_id = $gral_empresa->getId();
}

$cantidad_horas_total_por_persona = 0;
$cantidad_horas_total_por_persona_text = "-";

$cantidad_horas_total_planificacion_por_persona = 0;
$cantidad_horas_total_planificacion_laboral_por_persona = 0;


$sum_jornada_completa  = 0;
$sum_jornada_media     = 0;
$cant_jornada_completa = 0;
$cant_jornada_media    = 0;
?>

<td align='center' class='checkbox'>
    <input type="checkbox" class="chk_persona_id" id="chk_persona_id_<?php echo $per_id; ?>" name="chk_persona_id[<?php echo $per_id; ?>]" value="<?php echo $per_id; ?>" />
</td>

<td align='center' class='entidad persona' chofer_id="<?php Gral::_echo($per_id) ?>">
    
    <div class="foto avatar" title="<?php Gral::_echo($per_descripcion); ?> ">
        <a href="<?php echo $per_persona->getPathImagenPrincipal() ?>" rel="per_persona_id<?php echo $per_persona->getId() ?>">
            <img src="<?php echo $per_persona->getPathImagenPrincipal(true) ?>" width="50" alt="img-per" />
        </a>
    </div>

    <?php if ($cantidad_dias_mostrar <= 12): ?>
        <div class="info-persona" title="<?php Gral::_echo($per_descripcion) ?> (Leg: <?php Gral::_echo($per_legajo) ?>)">
            <div class="descripcion <?php echo $per_persona->getPerTipoEstado()->getCodigo() ?>">
                <?php Gral::_echo($per_descripcion); ?> 

                <?php if ($per_persona->getEstado() == 0) { ?>
                    (<?php echo $per_persona->getPerTipoEstado()->getDescripcion() ?>)
                <?php } ?>
            </div>
            <div class="legajo">
                ID <strong><?php Gral::_echo($per_persona->getId()); ?></strong> <br /> <?php Gral::_echo($per_tipo_documento) ?> <strong><?php Gral::_echo($per_documento) ?></strong>
            </div>
        </div>
    <?php else: ?>
        <div class="info-persona min" title="<?php Gral::_echo($per_descripcion) ?> (Leg: <?php Gral::_echo($per_legajo) ?>)">
            <div class="descripcion <?php echo $per_persona->getPerTipoEstado()->getCodigo() ?>">
                <?php Gral::_echo($per_descripcion); ?> 

                <?php if ($per_persona->getEstado() == 0) { ?>
                    (<?php echo $per_persona->getPerTipoEstado()->getDescripcion() ?>)
                <?php } ?>
            </div>
            <div class="legajo">
                ID <strong><?php Gral::_echo($per_persona->getId()); ?></strong> <br /> <?php Gral::_echo($per_tipo_documento) ?> <strong><?php Gral::_echo($per_documento) ?></strong>
            </div>
        </div>    
    <?php endif; ?>
</td>

<?php foreach ($arr_dias as $fecha => $arr_dia): ?>
    <td    
        id="td_persona_<?php Gral::_echo($per_id); ?>_<?php Gral::_echo($fecha); ?>" 
        align='center' 
        class='dia td_persona_fecha <?php echo ($fecha == date('Y-m-d')) ? 'hoy' : '' ?>' 
        title="<?php Gral::_echo(Gral::getFechaToWEB($fecha, '')); ?> para <?php Gral::_echo($per_descripcion); ?>"
        persona_id="<?php Gral::_echo($per_id); ?>"
        fecha="<?php Gral::_echo($fecha); ?>"
        >
            <?php include "per_mov_movimiento_calendario_uno_fecha.php"; ?>
    </td>
<?php endforeach; ?>

<td class='dia total' align='center' title="Total de <?php Gral::_echo($per_descripcion); ?> ">
    
    <div class="per-movimiento-horas-total">
        <div class ="per-movimiento-hora per-movimiento-horas-total-real" title="Horas Trabajadas">
            <?php ($cantidad_horas_total_por_persona > 0) ? Gral::_echoHoras($cantidad_horas_total_por_persona) : Gral::_echo('-') ?>
        </div>

        <?php if(false){ ?>
            <div class ="per-movimiento-hora per-movimiento-horas-total-laboral-planificacion" title="Horas Laborables Planificadas">
                <?php ($cantidad_horas_total_planificacion_laboral_por_persona > 0) ? Gral::_echoHoras($cantidad_horas_total_planificacion_laboral_por_persona) : Gral::_echo('-') ?>
            </div>
        <?php } ?>
    </div>
    
    <?php if(false){ ?>
        <div class="gral-novedads">
            <?php foreach ($arr_datos_novedad_total as $datos_novedad_total): ?>
                <div class="gral-novedad" style="background-color: #<?php Gral::_echo($datos_novedad_total["COLOR"]); ?>" title="<?php Gral::_echo($datos_novedad_total["CANTIDAD"]); ?> Nov de <?php Gral::_echo($datos_novedad_total["DESCRIPCION"]); ?> (<?php Gral::_echoHoras($datos_novedad_total["HORAS"]); ?> hs)">
                    <?php Gral::_echo($datos_novedad_total["CANTIDAD"]); ?>
                </div>
            <?php endforeach; ?>    
        </div>

        <?php if (!empty($arr_datos_pln_jornadas["TOTAL_JORNADA"])): ?>
            <div class="pln-total-jornadas">
                <div class="pln-total-jornada pln-jornada-completa" title="<?php Gral::_echo($arr_datos_pln_jornadas["TOTAL_JORNADA"]["JORNADA_COMPLETA"]); ?> Jornada Completa">
                    <?php Gral::_echo($arr_datos_pln_jornadas["TOTAL_JORNADA"]["JORNADA_COMPLETA"]); ?>
                </div>
                <div class="pln-total-jornada pln-jornada-media" title="<?php Gral::_echo($arr_datos_pln_jornadas["TOTAL_JORNADA"]["JORNADA_MEDIA"]); ?> Media Jornada">
                    <?php Gral::_echo($arr_datos_pln_jornadas["TOTAL_JORNADA"]["JORNADA_MEDIA"]); ?>
                </div>
            </div>
        <?php endif; ?>
    <?php } ?>
</td>