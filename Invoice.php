<?php
    require_once('InvoiceItem.php');

    class Invoice
    {
        //contains InvoiceItems objects
        var $myInvoiceItemArray;

        //total cost of all InvoiceItems
        var $totalInvoice = 0;

        //getters and setters
        public function getMyInvoiceItemArray ()
        {
            return $this->myInvoiceItemArray;
        }

        public function setMyInvoiceItemArray($myInvoiceItemArray)
        {
            $this->myInvoiceItemArray = $myInvoiceItemArray;
        }

        public function getTotalInvoice ()
        {
            return $this->totalInvoice;
        }

        public function setTotalInvoice ($totalInvoice)
        {
            $this->totalInvoice = $totalInvoice;
        }

        /**
        * Method that loops through the InvoiceItem and calculates the total
        * price for the invoice
        */

        public function calculateInvoice()
        {
            $array = $this->getMyInvoiceItemArray();

            foreach ($array as $item)
            {
                //object calls calculateItemTotal method and adds amount received to the totalInvoice
                $this->totalInvoice += $item->calculateItemTotal();
            }
        }

        /**
        * Displays Invoice Information
        */

        public function displayInvoice()
        {
            $x = $this->getMyInvoiceItemArray();
            $length = count($x);
            $index = 0;

            while ($index < $length)
            {
                //$x[$index]->display();
                $print = $x[$index]->__toString();
                echo $print;
                $index++;
            }
            echo "<hr/>";
            echo "Invoice Total: $" . $this->getTotalInvoice();
        }
    }
?>
