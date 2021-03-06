<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test</title>
</head>
<body>
    <?php
    //function-------
    function calcBMI($height, $weight) {
        return $bmi = round($weight / ( ($height / 100)**2 ), 2);
    }

    talk("山田", 188, 62);

    talk("樋口", 153, 52);

    talk("伊藤", 176, 68);


    function talk($name, $height, $weight) {
        print $name . "<br>";
        print "こんにちは<br>";
        print "身長は". $height. "cm、";
        print "体重は". $weight. "kg<br>";

        $bmi = calcBMI($height, $weight);

        print "BIMは". $bmi . "ですね<br>";

        $x = "最近、調子はどうですか？<br>";

        $x = mb_strimwidth($x, 0, 12, "...");
        print $x;

        if( $name == "伊藤" ) {
            bye();
        } else {
            print "じゃあねー<br>";
            print "<br>";
        }
    }

    function bye() {
        print "さようなら<br>";
    }

//------------------------------------

    //timestamp

    $x = time();
    print $x;

    print "<br>";
    print "<br>";

    //date();
    $d = date("Y年n月d日");
    print $d;
    print "<br>";

    //ファイル操作
    $x = file_get_contents("abc.txt");

    // nl2br()
    $x = nl2br($x);

    print $x;
    print "<br>";
    print "<br>";
//-----------------------------------

//BMI(肥満指数)----
//体重(kg) ÷ (身長(m) × 身長(m))
    $myName = "だいご";
    $myHeight = 177;
    $myWeight = 60;
    $myBMI = $myWeight / ( ($myHeight / 100)**2 );

    $name = [ "田中", "山根", "小杉" ];
/*
    for( $i = 0; $i < 3; $i++ ) {
        $myName = $name[$i];
        print $myName. "、こんにちは!<br>";
        print "身長は{$myHeight}cm<br>";
        print "体重は{$myWeight}kg<br>";
        print "あなたのBMIは{$myBMI}です<br>";
        print "<br>";
    }
        //条件分岐---
        if( $myBMI < 19 ) {
            print "ガリガリですよ<br>";
        } else if( $myBMI < 22 ){
            print "ちょうどいいですね<br>";
        } else {
            print "ふーん<br>";
        }
*/
//論理演算子-------------
    $x = 1;
    $y = 0;
    $z = 0;

    if( $x == 1 || ( $y == 1 && $z = 1 ) ) {
        print "ture<br>";
    } else {
        print "false<br>";
    }

//三項演算子--------
    $x = ($y == 1) ? 100 : 50;

    print "xは{$x}<br>";
//-----------------
    for( $i = 0, $j = 10; $i <= 10; $i++. $j-- ) {
        print "for処理{$i}:{$j}<br>";
    }

    $i = 0;
    $flag = true;

    while( $flag ) {
        print "while処理{$i}<br>";
        $i++;
        if( $i == 5 ) {
            $flag = false;
        }
    }

//配列---------------
    $hensu = [1, 2, 10];

    $total = 0;

    for( $i = 0; $i < 3; $i++ ) {
        $total += $hensu[$i];
    }

    print "{$total}<br>";

    //連想配列-----
    $member = [ "name" => "田中", "weight" => 50 ];

    print "{$member["name"]}<br>";

    //多次元配列
    $aa = [
        [0, 1, 3],// [0][x]
        [3, 4, 5] // [1][x]
    ];

    print "{$aa[1][1]}<br>";
    $member = [
        [//昨日
            [ "name" => "田中", "weight" => 50 ],
            [ "name" => "山根", "weight" => 55 ],
        ],
        [//今日
            [ "name" => "田中", "weight" => 50 ],
            [ "name" => "山根", "weight" => 55 ],
        ]
    ];

    print $member[0][1]["name"];
    ?>
</body>
</html>