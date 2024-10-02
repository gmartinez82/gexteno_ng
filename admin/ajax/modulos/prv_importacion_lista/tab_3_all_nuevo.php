<?php
include "_autoload.php";
include_once 'init_set_tab3.php';

$todos = Gral::getVars(2, 'todos', -1);

if ($todos == 1) {
    $prv_importacion->setSeleccionarTodos(1);
    $prv_importacion->save();

    $ejec = new Ejecucion();
    $sql = "UPDATE tmp_prv_importacion_tab_3 SET "
            . "nuevo = 1, "
            . "permite_desvincular = 1, "
            . "ins_insumo_id = 0, "
            . "ins_matriz_id = 0 "
            . "WHERE prv_importacion_id = ".$prv_importacion->getId()." "
            . "AND ins_insumo_id = ''"
            . "";
    
    //Gral::pr($sql);
    $ejec->setSql($sql);
    $ejec->execute();
} elseif($todos == 0) {
    $prv_importacion->setSeleccionarTodos(0);
    $prv_importacion->save();
    /*
    
    // ---------------------------------------------- ROLLBACK ----------------------------------------
    $sql_rollback = "SELECT * FROM tmp_prv_importacion_tab_3_rollback WHERE prv_importacion_id = ".$prv_importacion->getId()." and fila = ".$identificador;

    $cons_rollback = new Consulta();
    $cons_rollback->setSQL($sql_rollback);
    $cons_rollback->execute();

    include "get_row_uno_rollback.php";
    // ----------------------------------------------------------------------------------------------------    
*/
    
    $ejec = new Ejecucion();
    $sql = "UPDATE tmp_prv_importacion_tab_3 SET "

            . "costo_actual = '".$arr_row_rollback['costo_actual']."', "
            . "variacion = '".$arr_row_rollback['variacion']."', "
            . "ins_marca_id = '".$arr_row_rollback['ins_marca_id']."', "
            . "ins_marca_oem_id = '".$arr_row_rollback['ins_marca_oem_id']."', "
            . "codigo_marca = '".$arr_row_rollback['codigo_marca']."', "
            . "codigo_oem = '".$arr_row_rollback['codigo_oem']."', "

            . "nuevo = 0, "
            . "permite_desvincular = 0, "
            . "ins_insumo_id = '', "
            . "ins_matriz_id = '' "
            . "WHERE prv_importacion_id = ".$prv_importacion->getId()." "
            . "AND ins_insumo_id = '0'"
            . "AND permite_desvincular = '1'"
            . "";
            
    //Gral::pr($sql);
    $ejec->setSql($sql);
    $ejec->execute();    
}
