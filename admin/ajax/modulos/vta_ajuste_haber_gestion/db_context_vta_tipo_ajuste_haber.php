<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$vta_ajuste_haber_id = Gral::getVars(2, 'vta_ajuste_haber_id');
$vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);
$vta_tipo_ajuste_haber = $vta_ajuste_haber->getVtaTipoAjusteHaber();

?>
<div class="datos" id="<?php Gral::_echo($vta_tipo_ajuste_haber->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaTipoAjusteHaber') ?>: 
        <strong><?php Gral::_echo($vta_tipo_ajuste_haber->getId()) ?> - <?php Gral::_echo($vta_tipo_ajuste_haber->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_tipo_ajuste_haber_alta.php?id=<?php echo($vta_tipo_ajuste_haber->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoAjusteHaber') ?>: <strong><?php Gral::_echo($vta_tipo_ajuste_haber->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaAjusteHaber::getFiltrosArrGral() ?>&arr=<?php echo $vta_ajuste_haber->getFiltrosArrXCampo('VtaTipoAjusteHaber', 'vta_tipo_ajuste_haber_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaAjusteHabers') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_tipo_ajuste_haber->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

