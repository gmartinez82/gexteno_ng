
<div class="par">
    <div class="label">
        <?php Lang::_lang("Descripcion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($fnd_chq_cheque->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Chequera"); ?>
    </div>
    <div class="dato">
        <?php //Gral::_echo($fnd_chq_cheque->getFndChqChequera()->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Nro Cheque"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($fnd_chq_cheque->getNumero()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Banco"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($fnd_chq_cheque->getGralBanco()->getDescripcion()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Codigo Sucursal"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($fnd_chq_cheque->getCodigoSucursal()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Importe"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echoImp($fnd_chq_cheque->getImporte()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha Emision"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($fnd_chq_cheque->getFechaEmision())); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha Cobro"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($fnd_chq_cheque->getFechaCobro())); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha Acreditacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($fnd_chq_cheque->getFechaAcreditacion())); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Fecha Vencimiento"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo(Gral::getFechaToWEB($fnd_chq_cheque->getFechaVencimiento())); ?>
    </div>
</div>


<div class="par">
    <div class="label">
        <?php Lang::_lang("Firmante"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($fnd_chq_cheque->getFirmante()); ?>
    </div>
</div>


<div class="par">
    <div class="label">
        <?php Lang::_lang("Entregador"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($fnd_chq_cheque->getEntregador()); ?>
    </div>
</div>

<div class="par">
    <div class="label">
        <?php Lang::_lang("Observacion"); ?>
    </div>
    <div class="dato">
        <?php Gral::_echo($fnd_chq_cheque->getObservacion()); ?>
    </div>
</div>