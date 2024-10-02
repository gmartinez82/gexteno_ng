<h3>Tarea Resuelta a Crear</h3>

<?php if($tal_orden_trabajo){ ?>
    <div class="par">
        <div class="label">
            <?php Lang::_lang('OT') ?>
        </div>
        <div class="dato">
            <?php Gral::_echo($tal_orden_trabajo->getCodigo()) ?>
        </div>
    </div>    
<?php } ?>

<?php if($veh_coche){ ?>
    <div class="par">
        <div class="label">
            <?php Lang::_lang('Coche') ?>
        </div>
        <div class="dato">
            <?php Gral::_echo($veh_coche->getDescripcion()) ?>
        </div>
    </div>    
<?php } ?>

<?php if($ope_operario){ ?>
    <div class="par">
        <div class="label">
            <?php Lang::_lang('Operario') ?>
        </div>
        <div class="dato">
            <?php Gral::_echo($ope_operario->getDescripcion()) ?>
        </div>
    </div>    
<?php } ?>

<?php if($glp_galpon){ ?>
    <div class="par">
        <div class="label">
            <?php Lang::_lang('Galpon') ?>
        </div>
        <div class="dato">
            <?php Gral::_echo($glp_galpon->getDescripcion()) ?>
        </div>
    </div>    
<?php } ?>

<div class="bloque_tarea_resuelta_confirmar_tarea">
<?php include "bloque_tarea_resuelta_confirmar_tarea.php" ?>
</div>

<input type="hidden" id="hdn_ot_id" name="hdn_ot_id" value="<?php echo $tal_orden_trabajo->getId() ?>" size="2" />
<input type="hidden" id="hdn_coche_id" name="hdn_coche_id" value="<?php echo $veh_coche->getId() ?>" size="2" />
<input type="hidden" id="hdn_panol_id" name="hdn_panol_id" value="<?php echo $pan_panol->getId() ?>" size="2" />
<input type="hidden" id="hdn_operario_id" name="hdn_operario_id" value="<?php echo $ope_operario->getId() ?>" size="2" />
