<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$ins_insumo_id = Gral::getVars(2, 'ins_insumo_id');
$ins_insumo = InsInsumo::getOxId($ins_insumo_id);
$ins_matriz = $ins_insumo->getInsMatriz();

?>
<div class="datos" id="<?php Gral::_echo($ins_matriz->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsMatriz') ?>: 
        <strong><?php Gral::_echo($ins_matriz->getId()) ?> - <?php Gral::_echo($ins_matriz->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_matriz_alta.php?id=<?php echo($ins_matriz->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsMatriz') ?>: <strong><?php Gral::_echo($ins_matriz->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumo::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo->getFiltrosArrXCampo('InsMatriz', 'ins_matriz_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_matriz->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

