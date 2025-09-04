<?php
session_start();
    $mode = 'input';
    if (isset($_POST['back'])){
        // 何もしない
    } else if (isset($_POST['confirm'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['message'] = $_POST['message'];
        $mode = 'confirm';
    } else if (isset($_POST['send'])){
        $message = 'お問い合わせを受け付けました。\r\n'
        .'名前' . $_SESSION['name'] . '\r\n'
        .'email' . $_SESSION['email'] . '\r\n'
        .'お問い合わせ内容:\r\n'
        . preg_replace('/\r\n|\r\n/', '\r\n', $_SESSION['message']);
        mail($_SESSION['email'], 'お問い合わせありがとうございます', $message);
        mail('abc@hoge.com', 'お問い合わせありがとうございます', $message);
        $_SESSION = array();


        $mode = 'send';
    } else {
        // まとめて書くと👇
        // $_SESSION = array();

        // 一つ一つ書くと丁寧👇
        $_SESSION['name'] = '';
        $_SESSION['email'] = '';
        $_SESSION['message'] = '';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($mode == 'input'){ ?>
        <!-- 入力画面 -->
        <form action="Contact03.php" method="post">
            名前 <input type="text" name="name" value="<?php echo $_SESSION['name'] ?>"><br>
            Eメール <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>"><br>
            お問い合わせ内容<br>
            <textarea name="message" cols="30" rows="10"><?php echo $_SESSION['message'] ?></textarea><br>
            <input type="submit" name="confirm" value="確認">
        </form>
        <?php
            echo "<pre>";
            print_r($_POST);
            echo "<hr>";
            echo "</pre>";
         ?>
        <?php
            echo "<pre>";
            print_r($mode);
            echo "<hr>";
            echo "</pre>";
         ?>
         <?php
            echo "<pre>";
            print_r($_SESSION);
            echo "<hr>";
            echo "</pre>";
         ?>
    <?php } else if($mode == 'confirm'){ ?>
        <!-- 確認画面 -->
        <form action="Contact03.php" method="POST">
            名前 <?php echo $_SESSION['name'] ?><br>
            Eメール <?php echo $_SESSION['email'] ?><br>
            お問い合わせ内容<br>
         <?php echo nl2br($_SESSION['message']) ?><br>
         <input type="submit" name="back" value="戻る">
         <input type="submit" name="send" value="送信">
        </form>
        <?php
            echo "<pre>";
            print_r($_POST);
            echo "<hr>";
            echo "</pre>";
         ?>
        <?php
            echo "<pre>";
            print_r($mode);
            echo "<hr>";
            echo "</pre>";
         ?>
        <?php
            echo "<pre>";
            print_r($_SESSION);
            echo "<hr>";
            echo "</pre>";
         ?>
    <?php } else {?>
        <!-- 完了画面 -->
         送信しました。お問い合わせありがとうございました。<br>
        <?php
            echo "<pre>";
            print_r($_POST);
            echo "<hr>";
            echo "</pre>";
         ?>
        <?php
            echo "<pre>";
            print_r($mode);
            echo "<hr>";
            echo "</pre>";
         ?>
        <?php
            echo "<pre>";
            print_r($_SESSION);
            echo "<hr>";
            echo "</pre>";
         ?>
     <?php }?>

</body>
</html>