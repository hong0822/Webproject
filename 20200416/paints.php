<?php
include "clothes.php";

class Paint extends Clothes { 
    protected $length;
    protected $waist;

    public function __construct($outsideName,$outsidePrize,$outsideLength,$outsidewaist){
        parent::__construct($outsideName,$outsidePrize);
        $this->setName($outsideName);
        $this->setPrize($outsidePrize);
        $this->length = $outsideLength;
        $this->waist = $outsidewaist;
    }

    public function setLength($outsideLength){
        $this->length = $outsideLength;
    }

    public function getLength(){
        return $this->length;
    }

    public function setWaist($outsideWaist){
        $this->waist = $outsideWaist;
    }

    public function getWaist(){
        return $this->waist;
    }

    public function dowash(){
       $string = "用手洗! 再".parent::dowash();
        return $string;
    }
    public function __destruct(){
    }
}

?>