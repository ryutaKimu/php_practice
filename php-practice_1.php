<?php
// Q1 変数と文字列
$name = "安藤";
echo "私の名前は「{$name}」です。";

// Q2 四則演算
$num = 5*4;
echo $num . "\n";
echo $num / 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は' . date("Y年m月d日 H時i分s秒") . 'です。';


// Q4 条件分岐-1 if文
$device = "mac";
if ($device === "mac" || $device === "windows") {
    echo '使用OSは' . $device . 'です';
} else {
    echo "どちらでもありません。";
}


// Q5 条件分岐-2 三項演算子
$age = 20;
echo  ($age >= 18) ? "成人です。" : "未成年です。";


// Q6 配列
$p_array = ["東京", "神奈川", "栃木", "千葉", "茨城", "埼玉", "群馬"];
echo $p_array[2] . 'と' . $p_array[3] . 'は関東地方の都道府県です。';



// Q7 連想配列-1
$prefectures = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    '大阪府' => '関西',
    '愛知県' => '関西'
];

foreach ($prefectures as $prefecture) {
    echo $prefecture . '\n';
}


// Q8 連想配列-2

foreach ($prefectures as $prefecture => $city) {
    if ($prefecture === "埼玉県" && $city === "さいたま市") {
        echo $prefecture . 'の県庁所在地は,' . $city . 'です。';
    }
}




// Q9 連想配列-3
$kantoPrefectures = [
    '東京都',
    '神奈川県',
    '千葉県',
    '埼玉県',
    '栃木県',
    '群馬県',
    '茨城県'
];

foreach ($prefectures as $prefecture => $city) {
    if (!in_array($prefecture, $kantoPrefectures)) {
        echo $prefecture. 'は関東ではありません。' . `\n`;
    } else {
        echo $item . 'の県庁所在地は,' . $value . 'です。' . `\n`;
    }
}

// Q10 関数-1

function greeting($name)
{
    echo $name . 'さん,こんにちは。';
}

greeting("金谷");
greeting("安藤");

// Q11 関数-2

const TAX = 1.1;

function calcTaxInPrice($price){
    return $price * TAX;
}

$taxInPrice = calcTaxInPrice(1000);
echo "1000円の商品の税込み価格は{$taxInPrice}円です。";

// Q12 関数とif文
function distinguishNum($num)
{
    return $num = ($num % 2 === 0) ? $num . 'は偶数です。' : $num . 'は奇数です';
}
$result = distinguishNum(10);
echo $result;

// Q13 関数とswitch文

function evaluateGrade($grade)
{
    switch ($grade) {

        case 'A':
            echo '合格です。';
            break;

        case 'B':
            echo '合格です。';
            break;
        case 'C':
            echo '合格ですが、追加課題があります。';
            break;
        case 'D':
            echo '不合格です。';
            break;

            default:
            echo '判定不明です。講師に問い合わせてください。';
    }
}

evaluateGrade("A");


$now = new DateTime();
$prev = new DateTime('2000-1-1');
echo $prev->diff($now)->format('%a');