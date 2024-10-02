
<?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_VINCULO_US_USUARIO_AUDITORIA')){ ?>
<div class='vinculo us_usuario_auditoria' padre='us_usuario' hijo='us_usuario_auditoria' padre_id='<?php echo $us_usuario->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('UsUsuarioAuditorias') ?>
		 <?php 
		 $cantidad_us_usuario_auditorias = count($us_usuario->getUsUsuarioAuditorias());
		 echo ($cantidad_us_usuario_auditorias > 0) ? '('.$cantidad_us_usuario_auditorias.')' : '' ;
		 ?>			 
    </div>

    <div class='buscador'>
        <input name='us_usuario_auditoria_txt_buscar' id='us_usuario_auditoria_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

		<?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA_VINCULO_US_USUARIO_AUDITORIA_ACCIONES_ALTA')){ ?>
		<div class="trigger wopenModal boton" archivo="ajax/modulos/us_usuario_auditoria/us_usuario_auditoria_alta.php?us_usuario_id=<?php Gral::_echo($us_usuario->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'us_usuario', 'us_usuario_auditoria', <?php Gral::_echo($us_usuario->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('UsUsuarioAuditoria') ?>'>
        	<img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
		</div>
		<?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

