<?php 
print("#####q18#####".PHP_EOL);

# コードを追加
class Man {
    protected $name;
    protected $age;

    function __construct($user_name, $user_age){
        $this->name = $user_name;
        $this->age = $user_age;
    }

    function introduce(){
        if ($this->age >= 20){
            print("こんにちは，". $this->name. "と申します。宜しくお願いいたします。". PHP_EOL);
        }else{
            print("はいさいまいど〜，". $this->name. "です！！！". PHP_EOL);
        }
    }

}

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;
?>

