<?php
require_once('Invoice.php');
require_once('InvoiceItem.php');

class ProcessInvoice
    {
    //instance variable that holds an object of type Invoice
    var $myInvoice;

    //getters and setters
    public function getMyInvoice ()
    {
        return $this->myInvoice;
    }

    public function setMyInvoice($myInvoice)//set with invoice object $i)
    {
        $this->myInvoice = $myInvoice;
    }

    /**
    * Creates three objects of type InvoiceItem
    * and sets their data
    */

    private function createInvoiceItems()
    {
        //variables to hold object of type InvoiceItem
        $item1 = new InvoiceItem;
        $item2 = new InvoiceItem;
        $item3 = new InvoiceItem;

        //set the data
        $item1->setItemID(1);
        $item1->setQuantity(1);
        $item1->setPrice(1.99);
        $item1->setDescription("ink pen");

        $item2->setItemID(2);
        $item2->setQuantity(2);
        $item2->setPrice(2.99);
        $item2->setDescription("notepad");

        $item3->setItemID(3);
        $item3->setQuantity(3);
        $item3->setPrice(3.99);
        $item3->setDescription("calculator");

        // Create an array that contains all of the products
        $itemArray = array($item1, $item2, $item3);
        $myInvoice = $this->getMyInvoice();
        $myInvoice->setMyInvoiceItemArray($itemArray);
    }

    public function runProcess()
    {
        //instantiate Invoice object
        $myInvoice = new Invoice();

        $this->setMyInvoice($myInvoice);

        //call the createInvoiceItems()
        $this->createInvoiceItems();

        //call the calculateInvoice() in Invoice object
        $myInvoice->calculateInvoice();

        //call the displayInvoice() in Invoice object
        echo "<h2>My Invoice</h2>";
        $myInvoice->displayInvoice();
    }
}
?>
