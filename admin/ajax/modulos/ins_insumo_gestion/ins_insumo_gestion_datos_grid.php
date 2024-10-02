
<?php if (count($ins_insumos) > 0) { ?>

    <div class="grid-datos ins-insumo-gestion">
        <?php
        foreach ($ins_insumos as $ins_insumo) {
            $estado = ($ins_insumo->getEstado()) ? 'habilitado' : 'deshabilitado';
            ?>
            <div class="uno grid-uno chofer" id="div_ins_insumo_gestion_uno_<?php Gral::_echo($ins_insumo->getId()) ?>" identificador="<?php Gral::_echo($ins_insumo->getId()) ?>">
                <?php include "ins_insumo_gestion_uno_grid.php" ?>
            </div>

        <?php } ?>
        
        <div class="paginador">
            <?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?>
        </div>
    </div>


<?php } else { ?>

    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

<?php } ?>


