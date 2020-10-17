<?php

var_dump (true && true);
var_dump (true || false);
var_dump (true || true);
var_dump (true xor false);
var_dump (true xor true);
var_dump (true != 'true');
var_dump (true !== 'true');
var_dump (true || (false && false));
var_dump (true && (false || true) || false or (1!='1'));

if(true)
{
    echo "This is Budi";
}else
{
    echo "This is no Budi";
}

echo (true) ? "Budi father's" : " not Budi father 's";

for($x=0;$x<=10;$x++)
{
    for($y=0;$y<=10;$y++)
    {
        echo $x."x".$y."=".$x*$y."\n";
    }

}

foreach (range(1,10) as $num)
{
    echo $num.PHP_EOL;
}


$num=0;
while (true)
{
    $num=rand(1,10);

    if($num==9)
    {
        exit('Lucky nine');
    }else{
        echo "Loser,you number is ".$num.PHP_EOL;
    }
}