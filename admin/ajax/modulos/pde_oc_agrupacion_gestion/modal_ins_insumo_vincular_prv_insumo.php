<?php
/**
 * @creado_por Esteban Martinez
 * @creado 23/03/2020
 */
include_once '_autoload.php';

$ins_insumo_id    = Gral::getVars(Gral::VARS_GET, 'insumo_id', 0);
$prv_proveedor_id = Gral::getVars(Gral::VARS_GET, 'proveedor_id', 0);

$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);

?>

<form id="form_div_modal_modal" name="form_div_modal_modal" method="post" >
    
    <div class="datos prv-insumo vincular" ins_insumo_id="<?php echo $ins_insumo->getId(); ?>" prv_proveedor_id="<?php echo $prv_proveedor->getId(); ?>">
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Proveedor'); ?>
            </div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
            </div>                
        </div>
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Insumo Propio'); ?>
            </div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
            </div>                
        </div>
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Insumo de Proveedor'); ?>
            </div>
            <div class="dato">
                <?php echo Html::html_get_dbsuggest(1, 'dbsug_prv_insumo', 'ajax/modulos/prv_insumo/prv_insumo_dbsuggest_custom.php?prv_proveedor_id='.$prv_proveedor->getId(), false, true, true, 'Ingrese ...', null, '', 60) ?>
                <div id="dbsug_prv_insumo_id_error" class="error label-error" ><?php Gral::_echo($dbsug_prv_insumo_id_error) ?></div>   
            </div>                
        </div>
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Codigo de Proveedor'); ?>
            </div>
            <div class="dato">
                <input id='txt_codigo_proveedor' name='txt_codigo_proveedor' type='text' class='textbox'  value='' size='20' />
                <div id="txt_codigo_proveedor_error" class="error label-error" ><?php Gral::_echo($txt_codigo_proveedor_error) ?></div>   
                <div class="comentario">IMPORTANTE: Solamente ingresar un codigo si no existe el insumo del proveedor. En dicho caso se creara un insumo de proveedor con el codigo indicado.</div>
            </div>                
        </div>
        <div class="botonera">
            <div class="label-error" id="lbl_general_error"></div>
            <input name='btn_guardar' class="boton" type='button' id='btn_guardar' value='<?php Lang::_lang('Guardar'); ?>' />
        </div>
    </div>
    
</form>

<script>
    setInit();
    setInitPdeOcAgrupacions();
</script>