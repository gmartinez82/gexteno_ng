<form id="form_datos" name="form_datos">
    <div id="div_adm_per_mov_movimiento" class="div_adm_per_mov_movimiento_calendario">
        <table id='listado_adm_per_mov_movimiento_calendario' class='listado listado_adm_per_mov_movimiento_calendario' border='0'>
            <thead>
                <tr>
                    <th align='center' class='checkbox' width="20">
                        <input type="checkbox" id="chk_personas_all" name="chk_personas_all" value="1" />
                    </th>
                    <th align='center' class='col entidad' width="200">Persona</th>
                    <?php
                    //Gral::pr("per_mov_movimiento_calendario_datos.php");
                    foreach ($arr_dias as $fecha => $arr_dia) {
                        $icon_men_dia_sel = (is_array($arr_filtro_th_dia[$fecha]) && count($arr_filtro_th_dia[$fecha]) > 0) ? '_sel' : '';
                        ?>
                        <th align='center' class='col dia <?php echo ($fecha == date('Y-m-d')) ? 'hoy' : '' ?>' width="" title="<?php Gral::_echo(Gral::getFechaToWEB($fecha)) ?>">
                            <div class="top-fecha">
                                <?php Gral::_echo(Gral::getFechaToWEB($fecha, 'INCLUIR_NOMBRE_DIA')) ?>  
                            </div>
                            
                            <?php if(false){ ?>
                                <div class='accion adm_botones_accionx db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/per_mov_movimiento_calendario/db_context_acciones_th_dia.php?fecha=<?php echo $fecha ?>' modulo_metodo_init="setInitPerMovMovimientoCalendario()">
                                    <img src='imgs/icon_menu_azul<?php echo $icon_men_dia_sel ?>.png' width="12" />    	
                                </div>          
                            <?php } ?>
                            
                        </th>
                        <?php
                    }
                    ?>
                    <th align='center' class='col entidad' width="80">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($per_personas as $per_persona): ?>
                    <tr id="tr_per_mov_movimiento_calendario_uno_<?php echo $per_persona->getId() ?>"  class="uno" identificador="<?php Gral::_echo($per_persona->getId()) ?>">      
                        <?php include "per_mov_movimiento_calendario_uno.php" ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br />
    </div>
    <?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?>
</form>