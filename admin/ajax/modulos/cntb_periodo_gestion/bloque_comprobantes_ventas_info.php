
<div class="bloque-comprobantes-info">   
    <div class="col facturas">
        <div class="label">Facturas</div>
        <div class="dato">
            <?php Gral::_echo(count($vta_facturas)); ?>
        </div>
    </div>
    <div class="col nota-creditos">
        <div class="label">Nota Creditos</div>
        <div class="dato">
            <?php Gral::_echo(count($vta_nota_creditos)); ?>
        </div>
    </div>
    <div class="col nota-debitos">
        <div class="label">Nota Debitos</div>
        <div class="dato">
            <?php Gral::_echo(count($vta_nota_debitos)); ?>
        </div>
    </div>
    <div class="col recibos">
        <div class="label">Recibos</div>
        <div class="dato">
            <?php Gral::_echo(count($vta_recibos)); ?>
        </div>
    </div>
</div>