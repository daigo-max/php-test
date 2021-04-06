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
    //条件分岐---
        $x = 1;

        if( $x == 1) {
            print "真ですよ";
        } else {
            print "偽ですよ";
        }
        exit();
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
    $myName = "だいご";
    $myHeight = 177;
    $myWeight = 60;
    $myBMI = $myWeight / ( ($myHeight / 100)**2 );

    print $myName. "、こんにちは!<br>";
    print "身長は{$myHeight}cm<br>";
    print "体重は{$myWeight}kg<br>";
    print "あなたのBMIは{$myBMI}です<br>";

//-----------------
        $x = 1;
        $score = 1000;
        $myName = "だいご";

        //コメントテスト
        print $myName. "、こんばんは!<br>";
        print "あなたのスコアは" . $score . "点です<br>";
        print "こんばんは!<br>";

        $myName = "悟空";

        print $myName. "、さようなら!<br>";
    

    ?>
    <script>
        document.write("おやすみ")
    </script>
</body>
</html>