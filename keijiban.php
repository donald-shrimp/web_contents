<audio src="music/ひらひらチョウチョ.mp3" autoplay loop></audio>
<?php
$fp = fopen('data.csv','a+b');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    fputcsv($fp, [$_POST['name'], $_POST['comment']]);
    rewind($fp);
}
while ($row = fgetcsv($fp)) {
    $rows[] = $row;
}
fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="shortcut icon" href="favicon.ico" />
<meta charset="UTF-8">
<link href="css/keijiban.css" rel="stylesheet" type="text/css" media="all">
<title>掲示板</title>
</head>
<body>
    <header> 
        <center>   
            <table border="6"bordercolor="red" width="500">
                <td>
                    <marquee>
                        ようこそ　けいじばんへ
                    </marquee>
                </td>
            </table> 
        </center>
    </header>
    <div class ="box3">
    <a href="index.html"><img src="img/home.png" alt="ホーム"></a> <a href="nikki.html"><img src="img/nikki.png" alt="日記"></a> <a href="profire.html"><img src="img/profire.png" alt="プロフィール"></a> <a href="link.html"><img src="img/link.png" alt="リンク集"></a>
<section>
    <h2>新規投稿<br>☆★☆荒らしは禁止です☆★☆<h2>
    <form action="" method="post">
        <div class="name"><span class="label">お名前:</span><input type="text" name="name" value=""></div>
        <div class="honbun"><span class="label">本文:</span><textarea name="comment" cols="30" rows="3" maxlength="80" wrap="hard" placeholder="80字以内で入力してください。"></textarea></div>
        <input type="submit" value="投稿">
    </form>
</section>
<section class="toukou">
    <h2>投稿一覧</h2>
 <?php if (!empty($rows)): ?>
    <ul>
<?php foreach ($rows as $row): ?>
        <li><?=$row[1]?> (<?=$row[0]?>)</li>
<?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>投稿はまだありません</p>
<?php endif; ?>

</section>
</div>
</body>
</html>