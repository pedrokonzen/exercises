<?php
echo "<br>exercício 19 <br>";
for ($i=1; $i <= 20 ; $i++) { 
    echo "$i<br>";
}
echo "<br>exercício 20 <br>";
for ($x=-10; $x <= 10 ; $x++) { 
    echo "$x<br>";
}
echo "<br>exercício 21 <br>";
for ($y=-15; $y <= -5 ; $y++) { 
    echo "$y<br>";
}

echo "<br>exercício 23 <br>";
for ($y=101; $y <= 200 ; $y += 2) { 
    echo "$y<br>";
}

echo "<br>exercício 32 <br>";
for ($y=923; $y <= 3492 ; $y ++) { 
    echo "<br>$y";
    if($y % 4 == 0){
        echo "Pong";
    }
}

echo "<br>exercício 33 <br>";
for ($y=64; $y <= 546 ; $y ++) { 
    echo "<br>$y";
    if($y % 4 == 2){
        echo "Ping";
    }
    if($y % 4 == 0){
        echo "Pong";
    }
}