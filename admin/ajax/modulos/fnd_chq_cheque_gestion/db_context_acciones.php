<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$fnd_chq_cheque = FndChqCheque::getOxId($id);


?>
<div class="datos" fnd_chq_cheque_id="<?php Gral::_echo($fnd_chq_cheque->getId()) ?>">
    <div class="titulo">
        <?php Lang::_lang('ChqCheque') ?>: 
        <strong><?php Gral::_echo($fnd_chq_cheque->getNumero()) ?></strong>
    </div>
    <div class="uno modificar-estado">
        <img class="icono" src="imgs/btn_configuracion.png" width="16" align="absmiddle" title="" />
        <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('Estado') ?>
    </div>
    <br />
</div>