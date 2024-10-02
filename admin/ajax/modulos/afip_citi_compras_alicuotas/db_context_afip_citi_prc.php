<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$afip_citi_compras_alicuotas_id = Gral::getVars(2, 'afip_citi_compras_alicuotas_id');
$afip_citi_compras_alicuotas = AfipCitiComprasAlicuotas::getOxId($afip_citi_compras_alicuotas_id);
$afip_citi_prc = $afip_citi_compras_alicuotas->getAfipCitiPrc();

?>
<div class="datos" id="<?php Gral::_echo($afip_citi_prc->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('AfipCitiPrc') ?>: 
        <strong><?php Gral::_echo($afip_citi_prc->getId()) ?> - <?php Gral::_echo($afip_citi_prc->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="afip_citi_prc_alta.php?id=<?php echo($afip_citi_prc->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('AfipCitiPrc') ?>: <strong><?php Gral::_echo($afip_citi_prc->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo AfipCitiComprasAlicuotas::getFiltrosArrGral() ?>&arr=<?php echo $afip_citi_compras_alicuotas->getFiltrosArrXCampo('AfipCitiPrc', 'afip_citi_prc_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('AfipCitiComprasAlicuotass') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($afip_citi_prc->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

