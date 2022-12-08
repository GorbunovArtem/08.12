<?php
/* Задание 1 */
class Person{
    public $name , $lastname;
    function sayHello(){
        echo "Hello!<br>";
    }
}

 $person = new Person();
 echo $person->$name . "<br>";
 echo $person->$lastnamename . "<br>";
 $person->sayHello();


 echo "<br><br>";


/* Задание 2-3 */
class Worker{
    public $name, $age, $salary;
    private function checkAge($value){
        if($value >=1 && $value <= 100){
            return true;
        } else {
            return false;
        }
    }
    function setAge($value){
        if(checkAge($value)){
            $this -> $age = $value;
        } else {
            echo "Введён некоректный возраст";
        }
    }
}
 $ivan = new Worker();
 $ivan -> $name = "Иван";
 $ivan -> $age = 25;
 $ivan -> $salary = 1000;
 $vasya = new Worker();
 $vasya -> $name = "Вася";
 $vasya -> $age = 26;
 $vasya -> $salary = 2000;

 echo "Сумма зарплат: " . (($ivan -> $salary)+($vasya -> $salary)) . "<br>";
 echo "Сумма возростов: " . (($ivan -> $age)+($vasya -> $age)) . "<br>";
?>