<?php
/**
 * @creado_por Esteban Martinez
 * @creado 14/03/2017
 */
include_once '_autoload.php';

$db_nombre_objeto = "prv_insumo_gestion";
$hdn_error = 1;

if(Gral::esPost())
{
    
    $id                  = Gral::getVars(1, "hdn_os_id", 0);
    $dbsug_ins_insumo_id = Gral::getVars(1, "dbsug_ins_insumo_id", "");
        
    $prv_insumo = PrvInsumo::getOxId($id);	
    
    // controles
    $estado = true;
    
    //insumo
    if(Ctrl::esVacio($dbsug_ins_insumo_id)){
        $dbsug_ins_insumo_id_error = "Debe indicar un Insumo.";
        $estado = false;
    }
       
    
    if($estado)
    {
        $ins_insumo = InsInsumo::getOxId($dbsug_ins_insumo_id);
        
        if($ins_insumo)
        {
            $ins_matriz = $ins_insumo->getInsMatriz();
            
            if((int)$ins_matriz->getId() != 0)
            {
                $prv_insumo->setInsMarcaPieza($ins_matriz->getInsMarcaId());
                $prv_insumo->setCodigoPieza($ins_matriz->getCodigoPieza());
            }
            
            $prv_insumo->setInsInsumoId($dbsug_ins_insumo_id);
            $prv_insumo->setInsMarcaId($ins_insumo->getInsMarcaId());
            $prv_insumo->setCodigoMarca($ins_insumo->getCodigoMarca());
            
            $prv_insumo->save();
            
            $hdn_error = 0;
        }
    }
}
else
{
    $prv_id = Gral::getVars(2, "prv_id", 0);
    
    if($prv_id != 0)
    {
        $prv_insumo = PrvInsumo::getOxId($prv_id);
        $ins_insumo = $prv_insumo->getInsInsumo();
    }
    else
    {
       
    }
}

?>

<form id="form_div_modal" name="form_div_modal" method="post" action='<?php echo Gral::getPath("path_http")."admin/ajax/modulos/prv_insumo_gestion/modal_prv_insumo_vincular_ins_insumo.php" ?>' >
    
    <div class="datos prv_insumo vincular" >
        
        <div class="col general">
            
            <div class="par">
                <div class="label">
                    <?php Lang::_lang('Insumo del Proveedor'); ?>
                </div>
                <div class="dato">
                    <?php Gral::_echo($prv_insumo->getDescripcion()) ?>
                </div>                
            </div>

            <div class="par">
                <div class="label">
                    <?php Lang::_lang('Insumo Propio'); ?>
                </div>
                <div class="dato">
                    <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo', 'ajax/modulos/ins_insumo_gestion/ins_insumo_gestion_dbsuggest_custom.php', false, true, true, 'Ingrese ...', null, '') ?>
                    <div id="dbsug_ins_insumo_id_error" class="error label-error" ><?php Gral::_echo($dbsug_ins_insumo_id_error) ?></div>   
                </div>                
            </div>
            
            <div class="botonera">
                <input id="hdn_os_id"           name="hdn_os_id"   type='hidden' size='1' value='<?php Gral::_echoTxt($prv_insumo->getId()); ?>'/>
                <input id="hdn_error"           name="hdn_error"   type='hidden' class="hdn_error" size='1' value='<?php Gral::_echoTxt($hdn_error); ?>'/>   
                <input id="btn_guardar_vinculo" name="btn_guardar" type='button' class="btn_guardar boton"  value='<?php Lang::_lang("Guardar"); ?>' />     
            </div>
        
        </div>
    
    </div>
    
    <div class="div_modal_modal"></div>

</form>

<script>
    setInit();
    setInitPrvInsumoGestion();
</script>