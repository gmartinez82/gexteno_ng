<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_nota_credito_id = Gral::getVars(2, 'vta_nota_credito_id');
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);
$vta_preventista = $vta_nota_credito->getVtaPreventista();

?>
<div class="datos" id="<?php Gral::_echo($vta_preventista->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaPreventista') ?>: 
        <strong><?php Gral::_echo($vta_preventista->getId()) ?> - <?php Gral::_echo($vta_preventista->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_preventista_alta.php?id=<?php echo($vta_preventista->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPreventista') ?>: <strong><?php Gral::_echo($vta_preventista->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito->getFiltrosArrXCampo('VtaPreventista', 'vta_preventista_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaNotaCreditos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_preventista->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

