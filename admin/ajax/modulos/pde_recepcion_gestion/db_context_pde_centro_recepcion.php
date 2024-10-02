<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$pde_recepcion_id = Gral::getVars(2, 'pde_recepcion_id');
$pde_recepcion = PdeRecepcion::getOxId($pde_recepcion_id);
$pde_centro_recepcion = $pde_recepcion->getPdeCentroRecepcion();

?>
<div class="datos" id="<?php Gral::_echo($pde_centro_recepcion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeCentroRecepcion') ?>: 
        <strong><?php Gral::_echo($pde_centro_recepcion->getId()) ?> - <?php Gral::_echo($pde_centro_recepcion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_centro_recepcion_alta.php?id=<?php echo($pde_centro_recepcion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeCentroRecepcion') ?>: <strong><?php Gral::_echo($pde_centro_recepcion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion->getFiltrosArrXCampo('PdeCentroRecepcion', 'pde_centro_recepcion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeRecepcions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_centro_recepcion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

