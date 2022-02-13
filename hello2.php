<?php
//isset函数与empty函数相反isset是变量有值就执行，empty是变量无值就执行
$miejue='赵梓皓';
if(isset($miejue))
{
    echo'灭绝师太';
}
$a='';
if(empty($a))
{
    echo'赵梓皓';
}

//自定义函数
function num($num1,$num2)
{
    return $num1+$num2;
}
echo num(10,20);
function nun($num1,$num2)
{
    echo $num1+$num2;
}
nun(10,20);
$num4=90;
function nua($num1,$num2)
{
    global $num4;//在函数内用函数外面的变量
    echo $num1+$num2+$num4;
}
nua(10,20);
//命名参数
function jisuan($a,$b=0,$c=0,$d=0)//a是必传参数，b,c,d是选传参数
{
    echo $a;
    echo'<hr>';
    echo $b;
    echo '<hr>';
    echo $c;
    echo '<hr>';
    echo $d;
    echo '<hr>';

}
jisuan(10,20,30,40);//调用函数也得有分号

//运算符
$abc='我是赵梓皓';
var_dump($abc. 10);//变量连接整数，有空格隔开
//逻辑运算符
var_dump(100===100);//恒等符号必须类型和值都一样才是true
echo'<hr>';
var_dump(true ==='true');
echo'<hr>';
var_dump (true=='true');
echo'<hr>';

var_dump(100!==100);
echo'<hr>';
var_dump(true !=='true');//恒不等，只要类型和值有一个不相等就是真
echo'<hr>';

var_dump('欧阳'>100);
echo'<hr>';
var_dump('欧阳'<100);
echo'<hr>';
var_dump('欧阳'==0);//将字符串给了个零
echo'<hr>';

//逻辑运算符

var_dump(0 xor 1);
echo'<hr>';
var_dump(true xor true);//xor表示两边不一样就是真，两边一样就是假
echo'<hr>';
var_dump(true xor false);
echo'<hr>';
var_dump(false xor false);
echo'<hr>';

var_dump(!0);//!表示否定
echo'<hr>';
var_dump(!true);
echo'<hr>';

/*$pdo=new PDO('mysql:host=localhost;dbname=sqllearning','root','zhao1129')
$stmt =$pdo->prepare('select * from article');
$pdo->query('SET NAMES uft8');
$stmt->execute();
$arr=$stmt->fetchAll();
print_r($arr);*/


?>

赵梓皓无敌