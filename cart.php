<?php
session_start();
//---------------------------------------
// 1. SESSIONからカートを取得
// ※カートSESSION: array([0]=item,[1]=category,[2]=value,[3]=num,[4]=fname);
//---------------------------------------
$view='';
//$_SESSION["cart"]のデータを取得
foreach($_SESSION["cart"] as $key => $value){
    $view .= '<li class="cart-list>';
    $view .= '<p class="item-thumb><img src="./img'.$value[4].'" width="200"></p>';
    $view .= '<h2 class="cart-title">'.$value[0].'</h2>';
    $view .= '<p class="cart-category">'.$value[1].'</p>';
    $view .= '<p class="cart-price">'.$value[2].'</p>';
    $view .= '<p class="cart-number">'.$value[3].'</p>';
    $view .= '<a href="cartremove.php?id='.$key.'" class="btn-delete">削除</a>';
    $view .= '</li>';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/jquery.bxslider.css">
</head>
<body>
    
<!--header
    <header class="header">
        <p class="site-title"><a href="../index.php"><img 
        src="../img/common/logo.png" alt="G's Academy Tokyo"></a></p>
    </header>
end header-->

<div class="outer">
    <h1 class="page-title">カートの中身</h1>
    <div class="wrapper wrapper-main flex-parent">
        <main class="wrapper-main">
            <ul class="label-list">
                <li class="label-item">商品イメージ</li>
                <li class="label-item">商品名</li>
                <li class="label-item">カテゴリ</li>
                <li class="label-item">金額</li>
                <li class="label-item">数量</li>
                <li class="label-item">削除</li>
            </ul>
            <ul class="cart-products">
            <?php
            //表示
            echo $view;
            ?>
            </ul>
            <ul class="btn-list">
                <li class="btn-item btn-buy"><a href="index.php">注文を続ける</a></li>
                <li class="btn-item btn-calculate"><a onclick="外部決済サイトへ移動">注文手続きへ</a></li>
            </ul>
        </main>
    </div>
</div>

<!--footer
<footer class="footer">
        <div class="wrapper wrapper-footer">
            <div class="footer-widget__long">
                <p><a href="#"><img src="../img/common/logo.png" alt="g's academy tokyo"></a></p>
            </div>
            <div class="footer-widget">
                <ul class="nav-footer">
                    <li class="nav-footer__item"><a href="#">Category</a></li>
                    <li class="nav-footer__item"><a href="#">Category</a></li>
                    <li class="nav-footer__item"><a href="#">Category</a></li>
                    <li class="nav-footer__item"><a href="#">Category</a></li>
                    <li class="nav-footer__item"><a href="#">Category</a></li>
                </ul>
            </div>

            <div class="footer-widget">
                <ul class="nav-footer">
                    <li class="nav-footer__item"><a href="#">G's Academy</a></li>
                    <li class="nav-footer__item"><a href="#">Contact Us</a></li>
                    <li class="nav-footer__item"><a href="#">Cart</a></li>
                    <li class="nav-footer__item"><a href="#">Member's page</a></li>
                </ul>
            </div>
        </div>
        <p class="copyrights"><small>Copyrights G's Academy Tokyo All Rights Reserved.</small></p>
    </footer>
end footer-->

</body>
</html>
