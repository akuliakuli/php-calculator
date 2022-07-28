<?php

class Calc{
    public $firstNum;
    public $secondNum;
    public $operation;
    public function __construct(string $operation,int $firstNum,int $secondNum){
        $this->operation = $operation;
        $this->firstNum = $firstNum;
        $this -> secondNum = $secondNum;
    }
    public function calculate(){
        switch($this->operation){
            case 'sum':
                return $this-> firstNum + $this -> secondNum;
            break;
            case 'sub':
                return $this-> firstNum - $this -> secondNum;
            break;
            case 'mul':
                return $this-> firstNum * $this -> secondNum;
            break;
            case 'div':
                return $this-> firstNum / $this -> secondNum;
            break;
        }
    }
}