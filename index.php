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
    //----------
        $x = 1;
        $x = $x + 2;
        print $x . "<br>";

        $x = 10;
        $x++;
        print $x . "<br>";

        $x = 3**2;
        print $x . "<br>";

//BMI(肥満指数)----
//体重(kg) ÷ (身長(m) × 身長(m))
 /*   $myName = "だいご";
    $myHeight = 177;
    $myWeight = 60;
    $myBMI = $myWeight / ( ($myHeight / 100)**2 );

    while( $myBMI < 30 ) {
    print $myName. "、こんにちは!<br>";
    print "身長は{$myHeight}cm<br>";
    print "体重は{$myWeight}kg<br>";
    print "あなたのBMIは{$myBMI}です<br>";
    print "<br>";
    //体重を増やす
    $myWeight += 5;
    $myBMI = $myWeight / ( ($myHeight / 100)**2 );
    }
        //条件分岐---
        if( $myBMI < 19 ) {
            print "ガリガリですよ<br>";
        } else if( $myBMI < 22 ){
            print "ちょうどいいですね<br>";
        } else {
            print "ふーん<br>";
        }*/

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

//数列---------------]
    $hensu = [1, 2, 10];

    $total = 0;

    for( $i = 0; $i < 3; $i++ ) {
        $total += $hensu[$i];
    }

    print "{$total}<br>";

    ?>
</body>
</html>