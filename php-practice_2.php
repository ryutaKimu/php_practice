<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo 'tic-tac' . `\n`;
  } elseif ($i % 4 === 0) {
    echo 'tic' . `\n`;
  } elseif ($i % 5 === 0) {
    echo 'tac' . `\n`;
  } else {
    echo $i . `\n`;
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
    'name' => 'Aさん',
    'mail' => 'aaa@mail.com',
    'tel'  => '09011112222'
  ],
  [
    'name' => 'Bさん',
    'mail' => 'bbb@mail.com',
    'tel'  => '08033334444'
  ],
  [
    'name' => 'Cさん',
    'mail' => 'ccc@mail.com',
    'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name'] . 'さんの電話番号は' . $personalInfos[1]['tel'] . 'です。';

$i = 0;
foreach ($personalInfos as $personalInfo) {
  $i++;
  echo $i . '番目の' . $personalInfo['name'] . 'さんのメールアドレスは' . $personalInfo['mail'] . 'で、電話番号は' . $personalInfo['tel'] . 'です。' . `\n`;
}


$ageList = [25, 30, 18];

foreach ($ageList as $key => $age) {
  $personalInfos[$key]['age'] = $age;
}
// Q3 オブジェクト-1
class Student
{
  public $studentId;
  public $studentName;

  public function __construct($id, $name)
  {
    $this->studentId = $id;
    $this->studentName = $name;
  }

  public function attend($subject)
  {
    return  $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号:' . $this->studentId; 
  }
}

$yamada = new Student(2001823, "山田");
echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です';

// Q4 オブジェクト-2
echo $yamada->attend("PHP");

// Q5 定義済みクラス
$date = new DateTime('now');
$date->modify('-1 month');
echo $date->format('Y-m-d');

$today = new DateTime();
$dateString = "1992-04-25";
$targetDate = new DateTime($dateString);

$intervalDays = $today->diff($targetDate)->days;

echo 'あの日から' . $intervalDays . '日経過しました';
