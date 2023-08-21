<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP basic</title>
</head>
<body>
    <h1>Lamf quen với php</h1>
    <?php
    // dòng này sẽ code php
    // $fullname = "Ngo Tan Khoa ";
    // echo "Xin chào {$fullname}";
    // // echo "Xin chào ".$fullname
    // $a = 20;
    // $b = 2;
    // echo $a + $b;
    // $is_login = true;
    // if ($is_login == false) {
    //     echo "Chúc mừng bạn login successfully";
    // } else {
    //     echo "Raats tiếc bạn login failed";

    // }
    // vòng lặp for

    $n = 10;
    $sum = 0;

    for($i = 1; $i <= $n; $i++) {
        // tổng tất cả số chẵn
        if ($i % 2 == 0) {
            $sum = $sum + $i;
        }
        // echo $i. "<br />";
    }
    echo $sum;

    ?>
</body>
</html>