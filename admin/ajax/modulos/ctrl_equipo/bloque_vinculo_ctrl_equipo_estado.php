
<?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ALTA_VINCULO_CTRL_EQUIPO_ESTADO')){ ?>
<div class='vinculo ctrl_equipo_estado' padre='ctrl_equipo' hijo='ctrl_equipo_estado' padre_id='<?php echo $ctrl_equipo->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('CtrlEquipoEstados') ?>
        <?php 
        $cantidad_ctrl_equipo_estados = count($ctrl_equipo->getCtrlEquipoEstados());
        echo ($cantidad_ctrl_equipo_estados > 0) ? '('.$cantidad_ctrl_equipo_estados.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='ctrl_equipo_estado_txt_buscar' id='ctrl_equipo_estado_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ALTA_VINCULO_CTRL_EQUIPO_ESTADO_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/ctrl_equipo_estado/ctrl_equipo_estado_alta.php?ctrl_equipo_id=<?php Gral::_echo($ctrl_equipo->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'ctrl_equipo', 'ctrl_equipo_estado', <?php Gral::_echo($ctrl_equipo->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('CtrlEquipoEstado') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

