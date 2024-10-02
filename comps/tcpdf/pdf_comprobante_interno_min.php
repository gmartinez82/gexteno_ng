<?php

require_once(Gral::getPathAbs() . 'comps/tcpdf/config/tcpdf_config.php');
require_once(Gral::getPathAbs() . 'comps/tcpdf/tcpdf.php');

class PDFComprobanteInternoMin extends TCPDF {

    const ALINEACION_HORIZONTAL = 'P';
    const ALINEACION_APAISADO = 'L';

    private $usuario;
    
    private $titulo;
    private $subtitulo;
    private $observacion;

    // ---------------------------------------------------
    //  Metodos Getter
    // ---------------------------------------------------
    public function getUsuario() {
        return $this->usuario;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getSubtitulo() {
        return $this->subtitulo;
    }
    
    public function getObservacion() {
        return $this->observacion;
    }
    
    // ---------------------------------------------------
    //  Metodos Setter
    // ---------------------------------------------------
    public function setUsuario($v) {
        $this->usuario = $v;
    }

    public function setTitulo($v) {
        $this->titulo = $v;
    }
    
    public function setSubtitulo($v) {
        $this->subtitulo = $v;
    }

    public function setObservacion($v) {
        $this->observacion = $v;
    }    

    //Cabecera de pagina
    function Header() {

        $titulo = $this->getTitulo();
        $subtitulo = $this->getSubtitulo();
        $observacion = $this->getObservacion();


        $this->HeaderComprobanteInternoMin($titulo, $subtitulo, $observacion);
    }

    /**
     * -------------------------------------------------------------------------
     * Datos de Cabecera de Empresa
     * -------------------------------------------------------------------------
     */
    function HeaderComprobanteInternoMin($titulo, $subtitulo, $observacion) {

        // --------------------------------------------------------------------
        // Rectangulo
        // --------------------------------------------------------------------
        $style_rect = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(150, 150, 150));
        $this->Rect(10, 5, ($this->CurOrientation == 'P') ? 190 : 275, 26, 'D', array('all' => $style_rect));

        // logo
        $this->Image(Gral::getPathAbs() . Gral::getPath('path_logo_empresa_pdf'), 15, 7, 45);


        //Helvetica bold 15
        $this->SetFont('Helvetica', 'B', 10);

        if ($this->CurOrientation == 'L') {
            $this->Ln(20);
        } else {
            $this->Ln(15);
        }

        // --------------------------------------------------------------------
        // Titulo
        // --------------------------------------------------------------------
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', 'B', 12);
        $this->SetFillColor(255, 255, 255);

        // titulo
        $this->setXY($x = 100, $y = 10);
        $this->Cell(1, 3, $titulo, 0, 1, 'L', 1);

        // --------------------------------------------------------------------
        // Subtitulo
        // --------------------------------------------------------------------
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', 'B', 9);
        $this->SetFillColor(255, 255, 255);

        // subtitulo
        $this->setXY($x = 100, $y = 16);
        $this->Cell(1, 3, $subtitulo, 0, 1, 'L', 1);

        // --------------------------------------------------------------------
        // Observacion
        // --------------------------------------------------------------------
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('Helvetica', '', 8);
        $this->SetFillColor(255, 255, 255);

        // observacion
        $this->setXY($x = 100, $y = 20);
        $this->Cell(1, 3, $observacion, 0, 1, 'L', 1);
                
    }



}

?>