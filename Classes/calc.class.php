<?php

class Calc{
    public $operator;
    public $num1;
    public $num2;
    public $num3;


    public function __construct(string $one, int $two, int $three, int $four){
        $this->operator = $one;
        $this->num1 = $two;
        $this->num2 = $three;
        $this->num3 = $four;
    }


    public function calculator(){
     switch ($this->operator) {
         case 'male':
            $result = $this->num1*10+ $this->num2*6.24 - $this-> num3*5+5;
            return $result;             
            break;
        case 'female':
            $result = $this->num1*10+ $this->num2*6.24- $this-> num3*5-161;
            return $result;             
            break;
        

     }
    }

}

//$weight/($num2*$num2)