<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $string = "Welcome to CodeGym!";
    $valueEntered = $_POST["value"];

    function countOfOccurrences($string, $valueEntered){
        $count = 0;
        for ($index = 0; $index < strlen($string); $index++){
            if ($string[$index] === $valueEntered){
                $count++;
            }
        }
        return $count;
    }
    echo "Character ".$valueEntered." appear ".countOfOccurrences($string, $valueEntered)." times";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[*Bài tập] Đếm số lần xuất hiện của ký tự trong chuỗi</title>
    <style>
        form{
            margin-left: 35%;
        }
        h2 {
            margin-left: 10%;
            color: blue
        }

        .display {
            width: 335px;
            height: 120px;
            margin: 0;
            padding: 10px;
            border: 2px #dd33dd solid;
        }
        input[type=submit]{
            margin-left: 10%;
            width: 70%;
        }
    </style>
</head>
<body>
<form method="post">
    <div class="display">
        <h2>Count Characters In String</h2>
        <fieldset>
            Enter the value:
            <input type="text" name="value" size="30">
            <br>Display:
            <input type="submit" value="result" size="30">
        </fieldset>
    </div>
</form>
</body>
</html>
