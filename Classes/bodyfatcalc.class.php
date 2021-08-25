<?php

class bodyfatCalc{
    public $gender;
    public $weight1;
    public $num2;
    public $num3;
    public $neck;
    public $waist;


    public function __construct(string $one, int $two, int $three, int $four, int $five, int $six){
        $this->gender = $one;
        $this->weight = $two;
        $this->num2 = $three;
        $this->num3 = $four;
        $this->neck = $five;
        $this->waist = $six;
    }


    public function bodyfatCalc(){
     switch ($this->gender) {
         case 'male':
            $result =495/ 1.0324  - log10(0.19077) *($this->waist- $this->neck)+ log10(0.15456)*$this->num2 -450;
            return $result;             
            break;
        case 'female':
            $result = 495/ 1.07979  - log10(0.35004)*($this->waist- $this->neck)+ log10(0.22100)*$this->num2 -450 ;
            return $result;             
            break;
        

     }
    }

}
//0.35004
//$weight/($num2*$num2)
//495/ 1.0324 -log10(2.7183)*$this->waist- $this->neck+ log10(0.15456)*$this->num3 -450