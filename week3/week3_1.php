
<?php 
    /* 
    echo strrev(" Hello World!"); // !dlroW olleH
    echo str_repeat(" Hello ", 3); // Hello Hello Hello
    echo strtoupper(" hello world!"); // HELLO WORLD!
    */
    $a=8;
    $b = 9;
    $sum = sum($a, $b);
    echo $sum; // 17
    
    function sum($a, $b) {
        echo "Value of $a is".$a;
        echo "Value of $b is".$b;
        $a += $b;
        return $;
    }
?>
