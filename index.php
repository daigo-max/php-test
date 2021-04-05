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
        $x = 1;
        $x = $x + 2;
        print $x . "<br>";

//------------------
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