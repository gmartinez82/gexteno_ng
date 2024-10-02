<div class="tabs agregar-remitos" identificador="<?php echo $vta_hoja_ruta->getId() ?>">
    <ul>
        <li><a href='#tab_vincular_comprobante'><?php Lang::_lang('Remitos') ?> <?php echo (count($vta_remitos) > 0) ? '('.count($vta_hoja_ruta_vta_remitos).'/'.count($vta_remitos).')' : '' ?></a></li>
        <li><a href='#tab_vincular_comprobante_ajuste'><?php Lang::_lang('Remitos Z') ?>  <?php echo (count($vta_remito_ajustes) > 0) ? '('.count($vta_hoja_ruta_vta_remito_ajustes).'/'.count($vta_remito_ajustes).')' : '' ?></a></li>
    </ul>
    
    <div id="tab_vincular_comprobante">
        
        <div class="titulo"><?php Lang::_lang('Remitos') ?></div>
        
        <div class='datos vincular-comprobantes' identificador='<?php Gral::_echo($vta_hoja_ruta_id); ?>'>
            
            <div class='comprobantes'>
                <?php
                $vta_comprobantes = $vta_remitos;
                include 'bloque_modal_agregar_comprobante_datos.php';
                ?>
            </div>

        </div>
    </div>
    
    <div id='tab_vincular_comprobante_ajuste'>
        <div class='titulo'><?php Lang::_lang('Remitos Z') ?></div>
        
        <div class='datos vincular-comprobantes ' identificador='<?php Gral::_echo($vta_hoja_ruta_id); ?>'>
        
            <div class='comprobantes'>
                <?php
                $vta_comprobantes = $vta_remito_ajustes;
                include 'bloque_modal_agregar_comprobante_datos.php';
                ?>
            </div>
            
        </div>
    </div>
</div>

<script>
    setInit();
    setInitVtaHojaRutaGestion();
</script>