
<?php
if(count($gral_novedad_motivos) > 0):
//if($tipo_accion == "editar_novedad"):
?>

<div class="par">
    <div class="col gral-novedad-motivo" >
        <div class="label">
            <?php Lang::_lang("Motivo"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_gral_novedad_motivo_id", Gral::getCmbFiltro($arr_motivo,"..."), $cmb_gral_novedad_motivo_id, "textbox") ?>
            <div id="cmb_gral_novedad_motivo_id_error" class="label-error" ></div>
        </div>
    </div>
</div>

<div id="div_par_gral_novedad_motivo_extendido">
    <?php include "div_par_gral_novedad_motivo_extendido.php"; ?>
</div>

<?php
endif;
?>