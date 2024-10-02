<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$modulo = Gral::getVars(Gral::VARS_GET, 'modulo', '');
$atributo = Gral::getVars(Gral::VARS_GET, 'atributo', '');

?>
<div class="datos atributos" atributo="<?php Gral::_echo($atributo) ?>" modulo="<?php Gral::_echo($modulo) ?>">

    <div class="titulo">
        <?php Lang::_lang('Atributo') ?>: <strong><?php Gral::_echo($atributo) ?></strong>
	<br />
        <?php Lang::_lang('Modulo') ?>: <strong><?php Gral::_echo($modulo) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GEN_ATRIBUTO_CONFIG_LINK_HELP')): ?>
        <div class="uno gen-atributos-link-help">
            <img class="icono" src="imgs/btn_ayuda_verde.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Editar Textos de Ayuda') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInit();
</script>

