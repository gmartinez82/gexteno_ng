<div class="bloque-cabecera-info <?php echo ($afip_citi_cabecera->getActual()) ? 'actual' : '' ?>">   
    <div class="col secuencia">
        <div class="label">Secuencia</div>
        <div class="dato"><?php Gral::_echo($afip_citi_cabecera->getAfipCitiSecuencia()) ?></div>            
    </div>
    <div class="col ventas">
        <div class="label">Ventas Cbte</div>
        <div class="dato"><?php Gral::_echo(count($afip_citi_ventas_cbtes)) ?></div>            
    </div>
    <div class="col ventas">
        <div class="label">Ventas Alicuotas</div>
        <div class="dato"><?php Gral::_echo(count($afip_citi_ventas_alicuotass)) ?></div>            
    </div>
    <div class="col ventas">
        <div class="label">Compras Cbte</div>
        <div class="dato"><?php Gral::_echo(count($afip_citi_compras_cbtes)) ?></div>            
    </div>
    <div class="col ventas">
        <div class="label">Compras Alicuotas</div>
        <div class="dato"><?php Gral::_echo(count($afip_citi_compras_alicuotass)) ?></div>            
    </div>
    <div class="col ventas">
        <div class="label">Compras Importaciones</div>
        <div class="dato"><?php Gral::_echo(count($afip_citi_compras_importacioness)) ?></div>            
    </div>
</div>