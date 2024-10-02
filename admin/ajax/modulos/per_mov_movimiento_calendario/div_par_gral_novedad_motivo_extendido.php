
<?php
if(count($gral_novedad_motivo_extendidos) > 0):
//if($tipo_accion == "editar_novedad"):
?>

<div class="par">
    <div class="col gral-novedad-motivo-extendido" >
        <div class="label">
            <?php Lang::_lang("Motivo Ext"); ?>
        </div>
        <div class="dato">
            <?php Html::html_dib_select(1, "cmb_gral_novedad_motivo_extendido_id", Gral::getCmbFiltro($arr_motivo_extendido,"..."), $cmb_gral_novedad_motivo_extendido_id, "textbox") ?>
            <div id="cmb_gral_novedad_motivo_extendido_id_error" class="label-error" ></div>
        </div>
    </div>
</div>
<?php
endif;
?>