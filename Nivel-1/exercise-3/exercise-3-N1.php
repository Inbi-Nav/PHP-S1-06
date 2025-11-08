<?php
class Calculator {
    private $result = 10; 
    
    public function __toString() {
        return "Calculator result: {$this->result}";
    }
    
    public function __call($operation, $numbers) {
    if (isset($numbers[0])) {
    $number = $numbers[0];
    } else {
    $number = 0;
    }        
        switch($operation) {
            case 'add':
                $this->result += $number;
                return "<strong>Added </strong> $number";
            case 'subtract':
                $this->result -= $number;
                return "<strong>Substracted</strong> $number";
            case 'multiply':
                $this->result *= $number;
                return "<strong>Multiplied by </strong> $number";
            case 'divide':
                if ($number != 0) {
                    $this->result /= $number;
                    return "<strong>Divided by </strong> $number";
                }
                return "Cannot divide by zero!";
            default:
                return "Operation Error: $operation";
        }
    }   
    public function __invoke() {
        return $this->result;
    }   
}
echo "<h3>CALCULATOR</h3>";

$calc = new Calculator(); 


echo $calc->add(5) . "<br>";
echo $calc->subtract(8) . "<br>"; 
echo $calc->multiply(10) . "<br>";
echo $calc->divide(2) . "<br>";

echo "<h3>Final result</h3>";

echo "Result as function: " . $calc() . "<br>";


?>