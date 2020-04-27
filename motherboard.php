<?php

    require_once('parts.php');

    class Motherboard extends Parts {
        private $socket;
        private $size;
        private $usbPort;
        private $gPort;
        private $memorySlot;
        private $pcieSlot;
        private $sataPort;

        public function __construct($price, $name, $image, $socket, $size, $usbPort, $gPort, $memorySlot, $pcieSlot, $sataPort) {
            parent::__construct($price, $name, $image);
            $this->socket = $socket;
            $this->size = $size;
            $this->usbPort = $usbPort;
            $this->gPort = $gPort;
            $this->memorySlot = $memorySlot;
            $this->pcieSlot = $pcieSlot;
            $this->sataPort = $sataPort;
        }

        public function getSocket(){
            return $this->socket;
        }

        public function getSize(){
            return $this->size;
        }

        public function getUsbPort(){
            return $this->usbPort;
        }

        public function getGPort(){
            return $this->gPort;
        }

        public function getMemorySlot(){
            return $this->memorySlot;
        }

        public function getPcieSlot(){
            return $this->pcieSlot;
        }

        public function getSataPort(){
            return $this->sataPort;
        }
    }
?>