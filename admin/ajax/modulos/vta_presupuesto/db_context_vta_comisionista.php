<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$vta_presupuesto_id = Gral::getVars(2, 'vta_presupuesto_id');
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$vta_comisionista = $vta_presupuesto->getVtaComisionista();

?>
<div class="datos" id="<?php Gral::_echo($vta_comisionista->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaComisionista') ?>: 
        <strong><?php Gral::_echo($vta_comisionista->getId()) ?> - <?php Gral::_echo($vta_comisionista->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_comisionista_alta.php?id=<?php echo($vta_comisionista->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionista') ?>: <strong><?php Gral::_echo($vta_comisionista->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaPresupuesto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto->getFiltrosArrXCampo('VtaComisionista', 'vta_comisionista_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaPresupuestos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_comisionista->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

