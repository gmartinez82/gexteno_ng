
<?php
$css_chq_dias_faltantes = '';
//controlar
?>

<table class='cheques'>
    <tr>
        <th width='140' align='center'>Emision</th>
        <th width='250' align='center'>Cheque</th>
        <th width='120' align='center'>Importe</th>
        <th width='70' align='center'></th>
    </tr>
    <?php foreach ($fnd_chq_cheques as $fnd_chq_cheque): ?>

        <?php $array_info_dias = $fnd_chq_cheque->getArrChequeInfoDias(); ?>

        <tr id='cheque_<?php echo $fnd_chq_cheque->getId(); ?>' class='cheque uno' fnd_chq_cheque_id='<?php echo $fnd_chq_cheque->getId(); ?>'>
            <td align='center'>
                <div class='chq-fecha-emision' title='Fecha Emision'>
                    <?php Gral::_echo(Gral::getFechaToWeb($fnd_chq_cheque->getFechaEmision())); ?>
                </div>
                <div class='chq-tipo-estado' title='Estado'>
                    <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEstado()->getDescripcion()); ?>
                </div>
            </td>
            <td align='left'>
                <div class='chq-tipo-emisor' title='Emisor'>
                    <?php Gral::_echo($fnd_chq_cheque->getFndChqTipoEmisor()->getDescripcion()); ?>
                </div>
                
                <?php if ($fnd_chq_cheque->getFndChqTipoEmisor()->getCodigo() == FndChqTipoEmisor::TIPO_PROPIO) { ?>
                    <div class='chq-chequera' title='Chequera'>
                        Chequera: <?php Gral::_echo($fnd_chq_cheque->getFndChqChequera()->getDescripcion()); ?>
                    </div>
                <?php } ?>

                <div class='chq-numero' title='Numero Cheque'>
                    Nro Cheque: <strong><?php Gral::_echo($fnd_chq_cheque->getNumero()); ?></strong>
                </div>
                <div class='chq-banco' title='Banco'>
                    <?php Gral::_echo($fnd_chq_cheque->getGralBanco()->getDescripcion()); ?>
                </div>
                <div class='chq-firmante' title='Banco'>
                    <?php Gral::_echo($fnd_chq_cheque->getFirmante()); ?>
                </div>
            </td>
            <td align='center'>
                <div class='chq-importe' title='Importe'>
                    <?php Gral::_echoImp($fnd_chq_cheque->getImporte()); ?>
                </div>
                <div class='chq-fecha-cobro' title='Fecha Cobro'>
                    <?php Gral::_echo(Gral::getFechaToWeb($fnd_chq_cheque->getFechaCobro())); ?>
                </div>
                <div class='chq-dias-faltantes <?php echo $array_info_dias['info_css']; ?>' title='Info'>
                    <?php Gral::_echo($array_info_dias['info_texto']); ?>
                </div>
            </td>
            <td align='center'>
                <div class='botonera buscador-cheque-botonera'>
                    <?php if ($fnd_chq_cheque->getFndChqTipoEstado()->getEnCartera() == 1) { ?>
                        <button type ='button' id='btn_cheque_uno_<?php echo $fnd_chq_cheque->getId(); ?>' name='btn_cheque_uno[<?php echo $fnd_chq_cheque->getId(); ?>]' class='boton cheque-boton-seleccionar uno'>Sel</button>
                    <?php } else { ?>
                        N/S
                    <?php } ?>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script>
    setInit();
    //setInitFndChqChequeBuscador();
</script>