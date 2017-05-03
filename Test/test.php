<?php


class Number{
    private $name;
    private $age;
    /**
     * @return the $name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return the $age
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * @param field_type $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @param field_type $age
     */
    public function setAge($age) {
        $this->age = $age;
    }

    function Animal(){
        $animal = array('鸡'=>300,'鸭'=>299,'狗'=>300);
        foreach ($animal as $a=>$n){
            echo $a.'有'.$n.'只'."<br>";
        }
    }
}
$na = new Number();
$na->setName("小名");
$na->setAge("22");

echo $na->getName()."<br>";
echo $na->getAge()."<br>";


$ani = new Number();
$ani->Animal();
// echo $ani->Animal();

$tian = array('甲','乙','丙','丁','戊','己','庚','辛','壬','癸');
$dizhi = array('子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥');


$f= 1;
echo $tian[$f%10]."<br>"."<br>";

for ($i = 0;$i<60;$i++)
{
    echo $tian[$i%10].$dizhi[$i%12]."<br>";
}

// 中国*钓鱼*鱼岛 = 中国钓鱼岛
//$a$b*$c$d*$d$e = $a$b$c$d$e
 // $a = "中";$b= "国";$c = "钓";$d= "鱼";$e = "岛";
for($a=0;$a<=9;$a++){
    for($b=0;$b<=9;$b++){
        if($b==$a) continue;
        for($c=0;$c<=9;$c++){
            if($c==$b || $c==$a)continue;
            for($d=0;$d<=9;$d++){
                if($d==$c || $d==$b || $d==$a)continue;
                for($e=0;$e<=9;$e++){
                    if($e==$d || $e==$c || $e==$b || $e==$a)continue;
                    if(($a*10+$b)*($c*10+$d)*($d*10+$e) == ($a*10000+$b*1000+$c*100+$d*10+$e))
                    {
                         echo "中国 钓鱼 鱼岛  输出 中国钓鱼岛 的对应数字是：". $a.$b."*".$c.$d."*".$d.$e." =". $a.$b.$c.$d.$e."<br/>";
                    }
                }
            }
        }
    }
} 

?>