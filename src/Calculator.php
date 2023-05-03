<?php
    class Calculator {
        public function factorial($n) {
            $factorial = 1;
            if($n>=0 && is_int($n)){
    for ($i = 1; $i <= $n; $i++){
    $factorial = $factorial * $i;
    }}else {
        $factorial = null;
    }
    return $factorial;

        }
}




?>