# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
<?php  
$names = ["田中", "佐藤", "佐々木", "高橋"];
$names[] = "斎藤";

print_r($names);

?>

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載

<?php 
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];
$array = array_merge($array1, $array2);

print_r($array);
?>

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

  # 以下に回答を記載
<?php 
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];
$counter = 0;

foreach($numbers as $number){
  if($number === 3){
    $counter++;  
  }  
}

echo "3の個数は". $counter. "個です。";

?>

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載
<?php 
  $sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];
  
  print_r(array_filter($sports));

?>

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載
<?php 
  $array1 = [];
  $array2 = [1, 5, 8, 10];
  
  echo '$array1 = []'. "\n";

  if (empty($array1)){
    echo "＃実行結果：\n true \n";
  }else{
    echo "＃実行結果：\n false \n";
  }

  echo '$array2 = [1, 5, 8, 10]'. "\n";

  if (empty($array2)){
    echo "＃実行結果：\n true \n";
  }else{
    echo "＃実行結果：\n false \n";
  }

?>

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載
<?php 

  $numbers1 = [1, 2, 3, 4, 5];

  foreach($numbers1 as $number){
      $numbers2[] = $number * 10;
  }

  print_r($numbers2);

?>

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答を記載
<?php 

  $array = ["1", "2", "3", "4", "5"];
  print_r(array_map('intval', $array));

?>
<?php 
print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

  # 以下に回答を記載
$programming_languages = array_map('ucfirst', $programming_languages);
$upper_case_programming_languages = array_map('strtoupper', $programming_languages);

  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);
?>

<?php 
print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
$member_number = 1;

foreach($names as $name){
    $member_names[] = "会員No.". $member_number. " ". $name;
    $member_number++ ;
}

print_r($member_names);
echo PHP_EOL;
?>

<?php 
print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

  # 以下に回答を記載

foreach($foods as $food){
    if (strpos($food,"うに") !== false){
        echo $food. "は好物です。\n";
    }else{
        echo $food. "はまぁまぁ好きです。\n";
    }
}

echo PHP_EOL;
?>

<?php
print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

# 以下に回答を記載
$sports_lists = [];
$count = 0;

foreach($sports as $key => $sport){
    if (is_array($sport)){
        $sports_list = array_merge($sports_list, $sport);
    }else{
        $sports_list[] = $sport;
    }
}

$sports_list = array_unique($sports_list);
$sports_list = array_values($sports_list);

echo "ユーザーの趣味一覧". PHP_EOL;
foreach($sports_list as $key => $value){
    $key++;
    print("No". $key. " ". $value. PHP_EOL);
}

echo PHP_EOL;

?>
<?php
print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載
foreach($data as $users){
    foreach($users as $user => $user_data){
        if ($user == "name"){
            print($user_data);
        }
    }
}

echo PHP_EOL;
?>

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

  # 以下に回答を記載

echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載

echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載

echo PHP_EOL;

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載

echo PHP_EOL;

print("#####q17#####".PHP_EOL);
class User
{

  # コードを追加

}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;

print("#####q18#####".PHP_EOL);

  # コードを追加

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;

print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい

  protected $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;

print("#####q20#####".PHP_EOL);
class Human
{

  # コードを追加

}

class Zoo
{
    
  # コードを追加
    
}

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;
