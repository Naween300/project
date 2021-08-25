<?php

class bmiCalc{
    public $gender;
    public $weight;
    public $num2;
    public $num3;


    public function __construct(string $one, int $two, int $three, int $four){
        $this->gender = $one;
        $this->weight = $two;
        $this->num2 = $three;
        $this->num3 = $four;
    }


    public function bmicalc(){
     switch ($this->gender) {
        case 'male':
            $bmi = 703* $this->weight /$this->num2**2;
            if ($bmi <= 18.5) {
                $output = "Under Weight";
                } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
                $output = "Normal Weight";
                } else if ($bmi > 24.9 AND $bmi<=29.9) {
                $output = "Over Weight";
                } else if ($bmi > 30.0) {
                $output = "OBESE";
                }
                /*echo "Your BMI value is " . $bmi . " and you are : "; 
                echo "$output";
                return $bmi;         
            break;*/
        case 'female':
            $bmi = 703* $this->weight /$this->num2**2;
            if ($bmi <= 18.5) {
                $output = "Under Weight";
                } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
                $output = "Normal Weight";
                } else if ($bmi > 24.9 AND $bmi<=29.9) {
                $output = "Over Weight";
                } else if ($bmi > 30.0) {
                $output = "OBESE";
                }
                /*echo "Your BMI value is " . $bmi . " and you are : "; 
                echo "$output";*/
            return $bmi;             
            break;
        
        

     }
    }

}
