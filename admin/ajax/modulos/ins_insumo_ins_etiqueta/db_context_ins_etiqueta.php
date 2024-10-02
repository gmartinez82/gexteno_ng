<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_insumo_ins_etiqueta_id = Gral::getVars(2, 'ins_insumo_ins_etiqueta_id');
$ins_insumo_ins_etiqueta = InsInsumoInsEtiqueta::getOxId($ins_insumo_ins_etiqueta_id);
$ins_etiqueta = $ins_insumo_ins_etiqueta->getInsEtiqueta();

?>
<div class="datos" id="<?php Gral::_echo($ins_etiqueta->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsEtiqueta') ?>: 
        <strong><?php Gral::_echo($ins_etiqueta->getId()) ?> - <?php Gral::_echo($ins_etiqueta->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_etiqueta_alta.php?id=<?php echo($ins_etiqueta->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsEtiqueta') ?>: <strong><?php Gral::_echo($ins_etiqueta->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumoInsEtiqueta::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_ins_etiqueta->getFiltrosArrXCampo('InsEtiqueta', 'ins_etiqueta_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumoInsEtiquetas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_etiqueta->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

