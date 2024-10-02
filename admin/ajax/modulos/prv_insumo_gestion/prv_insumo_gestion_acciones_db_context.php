<?php

/**
 * @modificado_por Esteban Martinez
 * @modificado 02/11/2016
 * @modificado 04/11/2016
 * @modificado 07/11/2016
 * @modificado 15/11/2016
 */

include "_autoload.php";
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, "id");

$prv_insumo = PrvInsumo::getOxId($id);

$ins_insumo = $prv_insumo->getInsInsumo();
//Gral::prr($ins_insumo);

//Gral::pr("resoluble: ".$os_tipo_estado->getResoluble());

?>

<div class="datos" prv_insumo_id="<?php Gral::_echo($prv_insumo->getId()); ?>" >
    
    <div class="titulo">
        <strong>
            <?php Gral::_echo($prv_insumo->getDescripcion()); ?> 
        </strong>
    </div>
    
    <?php if((int)$ins_insumo->getId() == 0): ?>
    
        <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_GESTION_ACCION_VINCULAR_INSUMO')): ?>
        <div class="uno ins_insumo vincular">
           <img class="icono" src="imgs/_btn_estado_1.gif" width="15" alt="prv-insumo-vincular" align="absmiddle">
           <?php Lang::_lang("Vincular "); ?>
           <strong><?php Gral::_echo("Insumo"); ?></strong>
        </div>
        <?php endif; ?>
    
    <?php else: ?>
    
        <?php if(UsCredencial::getEsAcreditado('PRV_INSUMO_GESTION_ACCION_DESVINCULAR_INSUMO')): ?>
        <div class="uno ins_insumo desvincular">
           <img class="icono" src="imgs/_btn_estado_0.gif" width="15" alt="prv-insumo-vincular" align="absmiddle">
           <?php Lang::_lang("Desvincular"); ?>
           <strong><?php Gral::_echo("Insumo"); ?></strong>
        </div>
        <?php endif; ?>
    
    <?php endif; ?>
    
</div>