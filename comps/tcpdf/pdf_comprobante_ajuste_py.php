<?php

require_once(Gral::getPathAbs() . 'comps/tcpdf/config/tcpdf_config.php');
require_once(Gral::getPathAbs() . 'comps/tcpdf/tcpdf.php');

class PDFComprobanteAjustePy extends TCPDF {

    //Cabecera de pagina
    function Header() {
        // get the current page break margin
        $bMargin = $this->getBreakMargin();
        
        // get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
        
        // disable auto-page-break
        $this->SetAutoPageBreak(false, 0);

        // set background box
        $this->Rect(0, 0, $this->getPageWidth(), $this->getPageHeight(), 'DF', "", array(200, 200, 200));
        
        // set bacground image
        $this->Image(Gral::getPathAbs() . 'comps/tcpdf/images/NG_FACTURA_BLANCO.jpg', 0, 0, 206, 175, '', '', '', false, 300, '', false, false, 0);
        
        // restore auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        
        // set the starting point for the page content
        $this->setPageMark();
    }


    //Pie de pagina
    function Footer() {

    }
    
}

?>
