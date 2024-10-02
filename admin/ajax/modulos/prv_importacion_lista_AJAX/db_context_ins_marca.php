<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$prv_insumo_id = Gral::getVars(2, 'prv_insumo_id');
$prv_insumo = PrvInsumo::getOxId($prv_insumo_id);
$ins_marca = $prv_insumo->getInsMarca();

?>
<div class="datos" id="<?php Gral::_echo($ins_marca->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsMarca') ?>: 
        <strong><?php Gral::_echo($ins_marca->getId()) ?> - <?php Gral::_echo($ins_marca->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_marca_alta.php?id=<?php echo($ins_marca->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsMarca') ?>: <strong><?php Gral::_echo($ins_marca->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrvInsumo::getFiltrosArrGral() ?>&arr=<?php echo $prv_insumo->getFiltrosArrXCampo('InsMarca', 'ins_marca_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrvInsumos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_marca->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

