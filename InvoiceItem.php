<?php

    require_once("Invoice.php");
    require_once("ProcessInvoice.php");

    class InvoiceItem
    {

        //Instance Variables
        private $itemID;
        private $quantity;
        private $price;
        private $description;
        private $total;


        //getters and setters
        public function getItemID ()
        {
            return $this->itemID;
        }

        public function setItemID($itemID)
        {
            $this->itemID = $itemID;
        }

        public function getQuantity()
        {
            return $this->quantity;
        }

        public function setQuantity($quantity)
        {
            $this->quantity = $quantity;
        }

        public function getPrice()
        {
            return $this->price;
        }

        public function setPrice($price)
        {
            $this->price = $price;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function setDescription($description)
        {
            $this->description = $description;
        }

        public function getTotal()
        {
            return $this->total;
        }

        public function setTotal($total)
        {
            $this->total = $total;
        }

        /**
        * This method will calculate the total
        * by multiplying the quantity by the price.
        */

        public function calculateItemTotal()
        {
            //local variable to hold item total
            $itemTotal = ($this->getQuantity() * $this->getPrice());
            return $itemTotal;
        }

        /**
        * Method to display a String that includes all of
        * the instance variables and total for the item
        */
        public function __toString()
        {
            return sprintf("<hr/>ItemID: %s, Quantity: %s, Price: $%s, Description: %s, Total Cost: $%s",
            $this->getItemID(), $this->getQuantity(), $this->getPrice(), $this->getDescription(), $this->calculateItemTotal());
        }
    }

?>
