<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>郵便番号検索結果</title>
</head>
<body>
    <h1>結果</h1>
    <?php
    $url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" . $_POST["post"];
    // var_dump($url);
    $json = json_decode(file_get_contents($url));
    if($json->results){
        foreach($json->results as $item){
            print("<p>");
            print($item ->address1);
            print($item ->address2);
            print($item ->address3);
            print("</p>");
        }
    }else{
        print('該当なし');
    }
    ?>
</body>
</html>