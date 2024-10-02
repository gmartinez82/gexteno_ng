
<?php
if(count($pln_jornadas) > 0):
//if($tipo_accion == "editar_novedad"):
?>

<div class="par">
    <div class="col pln-jornada" >
        <div class="label">
            <?php Lang::_lang("Jornada"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_pln_jornada_id", Gral::getCmbFiltro(PlnJornada::getPlnJornadasCmb(true, true),"..."), $cmb_pln_jornada_id, "textbox") ?>
            <div id="cmb_pln_jornada_id_error" class="label-error" ></div>
        </div>
        
        <?php if(count($per_mov_planificacion_tramos) > 0): ?>
        <div id="div_par_pln_jornada_tramos">
            <?php include "div_par_per_mov_movimiento_tramos.php"; ?>
        </div>    
        <?php else: ?>    
        <div id="div_par_pln_jornada_tramos">
            <?php include "div_par_pln_jornada_tramos.php"; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php
endif;
?>

<?php
if($gral_novedad_codigo != ""):
    if($gral_novedad_codigo != GralNovedad::TIPO_TRABAJO):
?>
<div class="par">
    <div class="label">
        <?php Lang::_lang("Horas"); ?>
    </div>
    <div class="dato">
        <input id="txt_horas" name="txt_horas" type="text" class="textbox spinner" size="4" value="<?php echo $gral_novedad_horas; ?>">
        <div id="txt_horas_error" class="label-error" ></div>
    </div>
</div>
<?php
    endif;
endif;
?>