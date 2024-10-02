<?php
include "_autoload.php";
$user = UsUsuario::autenticado();
?>
<div class="datos" width="11">
    <div class="titulo">
        <?php Lang::_lang("Acciones Masivas"); ?>
    </div>
    <?php if (UsCredencial::getEsAcreditado("PER_MOV_MOVIMIENTO_CALENDARIO_ACCIONES_MASIVAS_AGREGAR_NOVEDAD")): ?>
        <div class="uno masivo agregar-novedad">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" />
            <?php Lang::_lang("Agregar Novedad Masiva") ?>
        </div>    
    <?php endif; ?>
    <br />
</div>