<?php

class arithmetic 
{
    public function add()
    {
        $first = rand(0,10);
        $second = rand(0,10);
        $a = readline("$first + $second = ");
        if($a == $first + $second)
        {
            echo "True!";
        }
        else
        {
            echo "False!";
        }
    }

    public function subtract($options = array('negatives' => false))
    {
        if(!$options['negatives'])
        {
            $first = rand(0,10);
            $second = rand($first,10);
        }
        else
        {
            $first = rand(0,10);
            $second = rand(0,10);
        }
        $a = readline("$second - $first = ");
        if($a == $second - $first)
        {
            echo "True!";
        }
        else
        {
            echo "False!";
        }
    }

    public function multiply()
    {
        $first = rand(0,10);
        $second = rand(0,10);
        $a = readline("$first * $second = ");
        if($a == $first * $second)
        {
            echo "True!";
        }
        else
        {
            echo "False!";
        }
    }

    public function divideNoRemainder()
    {
        $first = rand(0,10);
        $answer = rand(0,10);
        $second = $first*$answer;
        $a = readline("$second/$answer = ");
        if($a == $second/$answer)
        {
            echo "True!";
        }
        else
        {
            echo "False!";
        }
    }
}
$math = new arithmetic();
$math->divide();
?>