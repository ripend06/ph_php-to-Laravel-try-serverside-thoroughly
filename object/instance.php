<?php

//クラス定義
class Product{ //先頭は大文字

    //アクセス修飾子
    //priveate(外からアクセスできない。変数とか)
    //protected(自分・継承したクラスのみつかえる)
    //public(公開。インスタンスして使うとき)


    //変数（プロパティ）
    private $product = []; //privateなので、$Product->product = 10;　とかでの実行はエラーでる。


    //関数（メソッド）
    function __construct($product){ //__constructで初回に起動する関数として設定

        //thisはProductクラスのこと。
        //$this->productは、private $product = [];のこと。
        //メソッドアクセスは＄つけないで$->productにする。
        $this->product = $product;
    }

    //表示する動的メソッド（メソッド＝クラス内の関数のこと）
    public function getProduct(){
        echo $this->product;
    }

    //追加する動的メソッド
    public function addProduct($item){
        $this->product .= $item; // .=で追加の意味
    }

    //静的メソッド
    //静的（static）クラス名::関数名
    public static function getStaticProduct($str){
        echo $str;
    }


}


//インスタンス化
$instance = new Product('テスト'); //private $productに「テスト」が入ってるインスタンス

echo '<pre>';
var_dump($instance); //オブジェクトが入ってる
echo '<pre>';

$instance->getProduct(); //「テスト」が表示される
echo '<br>';

$instance->addProduct('追加分'); //「追加文」が、private $productに追加される。
echo '<br>';

$instance->getProduct(); //「テスト」「追加分」　が表示される
echo '<br>';

//静的クラスを実行。「静的」が表示される。
//インスタンスを作らずに実行できる
Product::getStaticProduct('静的');
echo '<br>';