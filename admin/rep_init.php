<?php

// ----------------------------------------------------------------------------
// constantes de configuracion
// ----------------------------------------------------------------------------
define('DB_COLOR_ESTANDAR_FONDO_CABECERA', '666666');
define('DB_COLOR_ESTANDAR_LETRA_CABECERA', 'FFFFFF');
// ----------------------------------------------------------------------------

$total_style = array(
    'font' => array(
        'bold' => true,
        'size' => 14
    )
);
$subtotal_style = array(
    'font' => array(
        'bold' => true,
        'size' => 11
    )
);
$negrita_style = array(
    'font' => array(
        'bold' => true
    )
);
$borde_style = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
$borde_negrita_style = array(
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    ),
    'font' => array(
        'bold' => true,
        'size' => 11
    )
);

$gris_style = array(
    'font' => array(
        'color' => array('rgb' => '999999'),
        ));

$resumen_cuenta_total = array(
    'font' => array(
        'bold' => true,
        'color' => array('rgb' => '000000'),
    ),
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array(
            'rgb' => 'EEEEEE'
        ),
    )
);

$resumen_cuenta_total_saldo_deudor = array(
    'font' => array(
        'bold' => true,
        'color' => array('rgb' => '000000'),
    ),
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array(
            'rgb' => 'ffbbd3'
        ),
    )
);

$resumen_cuenta_total_saldo_acreedor = array(
    'font' => array(
        'bold' => true,
        'color' => array('rgb' => '000000'),
    ),
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array(
            'rgb' => 'addefc'
        ),
    )
);

$style_libros_cabecera_resumen_comprobantes = array(
    'font' => array(
        'bold' => true,
        'color' => array('rgb' => 'FFFFFF'),
    ),
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array(
            'rgb' => '999999'
        ),
    ),
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);

$style_libros_cabecera_resumen_titulo = array(
    'font' => array(
        'bold' => true,
        'size' => 13,
        'color' => array('rgb' => 'FFFFFF'),
    ),
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array(
            'rgb' => '666666'
        ),
    ),
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);

$style_libros_linea_comprobantes = array(
    'font' => array(
        'bold' => true,
        'size' => 12,
        'color' => array('rgb' => '000000'),
    ),
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array(
            'rgb' => 'CCCCCC'
        ),
    ),
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);

$style_libros_linea_comprobantes_subtotal = array(
    'font' => array(
        'color' => array('rgb' => 'FFFFFF'),
    ),
    'fill' => array(
        'type' => PHPExcel_Style_Fill::FILL_SOLID,
        'color' => array(
            'rgb' => '666666'
        ),
    ),
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN
        )
    )
);
