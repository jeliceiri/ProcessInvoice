<?php
    require_once('ProcessInvoice.php');
    require_once('InvoiceItem.php');
    require_once('Invoice.php');
    
    //create new object of type ProcessInvoice and call method
    $invoiceToProcess = new ProcessInvoice();
    $invoiceToProcess->runProcess();
?>
