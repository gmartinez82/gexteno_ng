<?php

require_once(Gral::getPathAbs() . 'comps/tcpdf/config/tcpdf_config.php');
require_once(Gral::getPathAbs() . 'comps/tcpdf/tcpdf.php');

class PDFPlantillaBase extends TCPDF {

    const ALINEACION_HORIZONTAL = 'P';
    const ALINEACION_APAISADO = 'L';

    private $usuario;
    // ---------------------------------------------------
    //  Atributos de la Empresa
    // ---------------------------------------------------
    private $tipo;
    private $fecha;

    // ---------------------------------------------------
    //  Metodos Getter
    // ---------------------------------------------------
    public function getUsuario() {
        return $this->usuario;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getFecha() {
        return $this->fecha;
    }

    // ---------------------------------------------------
    //  Metodos Setter
    // ---------------------------------------------------
    public function setUsuario($v) {
        $this->usuario = $v;
    }

    public function setTipo($v) {
        $this->tipo = $v;
    }

    public function setFecha($v) {
        $this->fecha = $v;
    }

    //Cabecera de pagina
    function Header() {

        $tipo = $this->getTipo();
        $fecha = $this->getFecha();

        $this->HeaderComprobante($tipo, $tipo_letra, $codigo, $fecha);
    }

    /**
     * -------------------------------------------------------------------------
     * Datos de Cabecera de Empresa
     * -------------------------------------------------------------------------
     */
    function HeaderComprobante($tipo, $tipo_letra, $codigo, $fecha) {

        // --------------------------------------------------------------------
        // Rectangulo
        // --------------------------------------------------------------------
        $style_rect = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        $this->Rect(10, 5, 190, 16, 'D', array('all' => $style_rect));

        // logo
        $this->Image(Gral::getPathAbs() . Gral::getPath('path_logo_empresa_pdf'), 15, 5, 40);


        //Helvetica bold 15
        $this->SetFont('Helvetica', 'B', 10);

        if ($this->CurOrientation == 'L') {
            $this->Ln(20);
        } else {
            $this->Ln(15);
        }


        // --------------------------------------------------------------------
        // Columna 3
        // --------------------------------------------------------------------
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', 'B', 11);
        $this->SetFillColor(255, 255, 255);

        // tipo
        $this->setXY($x = 125, $y = 7);
        $this->Cell(1, 3, $tipo, 0, 1, 'L', 1);

        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 8);
        $this->SetFillColor(255, 255, 255);

        // fecha
        $this->setXY($x = 125, $y = 12);
        $this->Cell(1, 3, 'Fecha: ' . $fecha, 0, 1, 'L', 1);

        // fecha
        $this->setXY($x = 125, $y = 16);
        $this->Cell(1, 3, 'Página: ' . $this->getAliasNumPage() . ' de ' . $this->getAliasNbPages(), 0, false, 'L', 0, '', 0, false, 'T', 'M');
    }

    //Pie de pagina
    function Footer() {
        
    }

    public function setTitulo($texto) {
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0, 0, 0);
        $this->Ln(6);
        $this->SetFont('Helvetica', 'B', 18);
        $this->Cell(35);
        $this->Cell(0, 3, utf8_decode($texto), 0, 1, 'L', 1);
    }

    public function setInicializadorTextos() {
        $this->Ln(4);
    }

    public function setLeyendaPrincipal($texto) {
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(100);
        $this->Ln(3);
        $this->SetFont('Helvetica', '', 11);
        $this->Cell(35);
        $this->Cell(0, 3, utf8_decode($texto), 0, 1, 'L', 1);
    }

    public function setSubtitulo($texto) {
        $this->SetDrawColor(0);
        $this->SetFillColor(255);
        $this->SetTextColor(0);
        $this->Ln(15);
        $this->SetFont('Helvetica', 'B', 13);
        $this->Cell(10);
        $this->Cell(0, 6, utf8_decode($texto), 'B', 1, 'L', 1);
    }

    public function setNombreReporte($texto) {
        $this->SetDrawColor(255);
        $this->SetFillColor(255);
        $this->SetTextColor(0);

        if ($this->CurOrientation == 'L') {
            $this->setXY($x = 6, $y = 19);
            //$this->Ln(8);
            $this->SetFont('Helvetica', 'B', 15);
            $this->Cell(200);
            $this->Cell(0, 6, utf8_decode($texto), 'B', 1, 'L', 1);
        } else {
            $this->setXY($x = 4, $y = 14.5);
            //$this->Ln(4);
            $this->SetFont('Helvetica', 'B', 13);
            $this->Cell(130);
            $this->Cell(0, 6, utf8_decode($texto), 'B', 1, 'L', 1);
        }
    }

    public function setLinea($texto) {
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0, 0, 0);
        $this->Ln(3);
        $this->SetFont('Helvetica', '', 12);
        $this->Cell(10);
        $this->Cell(0, 3, $texto, 0, 1, 'L', 1);
    }

    public function setTabla($datos, $columnas, $config) {
        //Gral::prr($estructura);
        //Gral::prr($datos);
        $totalizador = false;

        $this->SetDrawColor(0);
        $this->SetFillColor(120);
        $this->SetTextColor(255);

        // encabezado
        $this->Ln(8);
        $this->Cell($config['margin_left']);
        $this->SetFont('Helvetica', '', 10);

        $totalizador = false;
        foreach ($columnas as $columna) {
            $this->Cell(0.5);
            $this->Cell($columna['ancho'], 5, utf8_decode($columna['label']), 'B', 0, 'C', 1);
            //$totalizador = ($columna['total']) ? true : false;
            if ($columna['total'])
                $totalizador = true;
        }

        // cuerpo
        $this->SetDrawColor(200);
        $this->SetTextColor(0);
        $this->Ln(6);
        $this->Cell($config['margin_left']);
        $this->SetFont('Helvetica', '', 9);

        foreach ($datos as $i => $dato) {
            if (($i % 2) == 0) {
                $this->SetFillColor(245);
            } else {
                $this->SetFillColor(255);
            }

            // ------------------------------------ rever ---------
            $current_y = $this->GetY();
            if ($current_y > 260) { // 260 esta hardcodeado, puede tener problemas con apaisados
                $this->AddPage();
            }
            // -----------------------------------------------------

            foreach ($columnas as $columna) {
                $this->Cell(0.5);
                $this->Cell($columna['ancho'], 5, utf8_decode($dato[$columna['index']]), 'B', 0, $columna['alineacion'], 1);
            }
            $this->Ln(6);
            $this->Cell($config['margin_left']);
        }

        if ($totalizador) {
            // total
            $this->SetDrawColor(150);
            $this->SetFillColor(255);
            $this->SetFont('Helvetica', 'B', 10);

            foreach ($columnas as $columna) {
                $this->Cell(0.5);
                $this->Cell($columna['ancho'], 5, ($columna['total']) ? $columna['total'] : '', 'T', 0, $columna['alineacion'], 1);
            }
        }
    }

    public function setTablaMultiCell($datos, $columnas, $config) {
        //Gral::prr($estructura);
        //Gral::prr($datos);
        $totalizador = false;

        $this->SetDrawColor(0);
        $this->SetFillColor(120);
        $this->SetTextColor(255);

        // encabezado
        $this->Ln(8);
        $this->Cell($config['margin_left']);
        $this->SetFont('Helvetica', '', 10);

        $totalizador = false;
        foreach ($columnas as $columna) {
            $this->Cell(0.5);
            $this->Cell($columna['ancho'], 5, utf8_decode($columna['label']), 'T', 0, 'C', 1);
            //$totalizador = ($columna['total']) ? true : false;
            if ($columna['total'])
                $totalizador = true;
        }

        // cuerpo
        $this->SetDrawColor(200);
        $this->SetTextColor(0);
        $this->Ln(6);
        $this->Cell($config['margin_left']);
        $this->SetFont('Helvetica', '', 9);

        foreach ($datos as $i => $dato) {
            if (($i % 2) == 0) {
                $this->SetFillColor(245);
                $this->SetFillColor(255);
            } else {
                $this->SetFillColor(255);
            }

            // ------------------------------------ rever ---------
            $current_y = $this->GetY();
            if ($current_y > 260) { // 260 esta hardcodeado, puede tener problemas con apaisados
                $this->AddPage();
            }
            // -----------------------------------------------------
            //if($i >= 4){ $this->AddPage('P'); $this->Ln(10);}
            foreach ($columnas as $columna) {
                $this->Cell(0.5);
                //$this->Cell($columna['ancho'], 5, utf8_decode($dato[$columna['index']]), 'B' , 0, $columna['alineacion'], 1);

                $current_y = $this->GetY();
                $current_x = $this->GetX();

                $cell_width = $columna['ancho'];
                $this->MultiCell($cell_width, 3.5, utf8_decode($dato[$columna['index']]), 'T', $columna['alineacion'], 1);

                $this->SetXY($current_x + $cell_width, $current_y);
            }
            $this->Ln(6);
            $this->Cell($config['margin_left']);

            $alto_cell = 3;
            if ($dato['lineas_cant'] != '') {
                //echo $dato['lineas_cant'];
                $alto_cell = $alto_cell * $dato['lineas_cant'];
            }

            $current_y = $this->GetY();
            $this->SetXY($config['margin_left'] + 10, $current_y + $alto_cell);
        }

        if ($totalizador) {
            // total
            $this->SetDrawColor(150);
            $this->SetFillColor(255);
            $this->SetFont('Helvetica', 'B', 10);

            foreach ($columnas as $columna) {
                $this->Cell(0.5);
                $this->Cell($columna['ancho'], 5, ($columna['total']) ? $columna['total'] : '', 'T', 0, $columna['alineacion'], 1);
            }
        }
    }

    public function setParSimple($label, $dato, $x, $y) {
        // Par 
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 10);
        $this->SetFillColor(255, 255, 255);
        $this->setXY($x, $y);
        $this->Cell(1, 3, $label, 0, 1, 'L', 1);

        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', 'B', 11);
        $this->SetFillColor(255, 255, 255);
        $this->setXY($x + 25, $y);
        $this->Cell(1, 3, utf8_decode($dato), 0, 1, 'L', 1);
    }

    public function setParMultiCell($label, $dato, $x, $y, $w, $h) {
        // Par 
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 10);
        $this->SetFillColor(255, 255, 255);
        $this->setXY($x, $y);
        $this->Cell(1, 3, $label, 0, 1, 'L', 1);

        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', 'B', 11);
        $this->SetFillColor(255, 255, 255);
        $this->setXY($x + 25, $y);
        $this->MultiCell($w, $h, utf8_decode($dato), 0, 'L', 1);
    }

    public function setBloqueFirma($array) {

        $x = $this->GetX();
        $y = $this->GetY();

        foreach ($array as $array_uno) {
            $string_puntos = '................................';

            $x = $x + 40;

            $this->SetTextColor(0, 0, 0);
            $this->SetFont('Helvetica', '', 9);
            $this->SetFillColor(255, 255, 255);
            $this->setXY($x, $y);
            $this->Cell(1, 3, $string_puntos, 0, 1, 'L', 1);

            $this->SetTextColor(0, 0, 0);
            $this->SetFont('Helvetica', '', 9);
            $this->SetFillColor(255, 255, 255);
            $this->setXY($x, $y + 4);
            $this->Cell(1, 3, utf8_decode($array_uno), 0, 1, 'L', 1);
        }





        return;
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 9);
        $this->SetFillColor(255, 255, 255);
        $this->Cell(15);
        $this->Cell(1, 3, '
            ..........................................
            ............................................
            ............................................

                                                              ', 0, 1, 'L', 1);

        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 9);
        $this->SetFillColor(255, 255, 255);
        $this->Cell(15);
        $this->Cell(1, 3, utf8_decode('    
                Responsable de Envío                                 
                Responsable de Transporte                              
                Responsable de Recepción
                '), 0, 1, 'L', 1);
    }

}

?>