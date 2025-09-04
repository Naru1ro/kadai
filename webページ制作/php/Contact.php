<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 90%;
            max-width: 1120px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        .box {
            display: flex;
        }
        .fix {
            padding: 0.5rem 0.7rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            border-radius: 0.5rem;
        }
        .adjust {
            margin-left: 12px;
        }
        .fix:focus {
            outline: 0;
            border: 2px solid #2196f3;
        }
        textarea {
            font-size: 1rem;
        }
        textarea:focus {
            outline: 0;
            border: 2px solid #2196f3;
        }
        .btn {
            padding: 7px 25px;
            border-radius: 7px;
            background-color: #2196f3;
            font-size: 16px;
            cursor: pointer;
        }
        .btn:hover {
            color: #2195f383;
        }
        .agree {
            text-align: center;
        }
        .hoge {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="./php/Contact.php" method="post">
                <h1>HungryAngry お問い合わせ</h1>
                <h3>お問い合わせ店舗</h3>
            <?php if($_POST){ ?>

                <label for="A">
                    <h3>お名前</h3>
                </label>
                <div class="container" >
                    <input type="text" name="surname"  class="fix" id="A" placeholder="姓" required><?php echo $_POST['surname'] ?><br>
                    <input type="text" name="name"  class="fix adjust" placeholder="名" required><?php echo $_POST['name'] ?><br>
                </div>

                <label for="C">
                    <h3>メールアドレス</h3>
                </label>
                <div class="container">
                    <input type="email" name="email" class="fix" id="C" size="50" placeholder="info@example.com" required><?php echo $_POST['email'] ?><br>
                </div>

                <label for="D">
                    <h3>お問い合わせ内容</h3>
                </label>
                <div class="container">
                    <textarea name="message" id="D" cols="55" rows="15"><?php echo nl2br($_POST['message']) ?><br></textarea>
                </div>

                <h3>プライバシーポリシーの同意</h3>
                <p>下記事項をご確認の上、「同意する」にチェックして頂き、お問い合わせフォームをご利用ください<br>
                    <a href="">プライバシーポリシー</a>
                </p>
                <?php } else { ?>

                <?php } ?>
            <div class="agree">
                <input type="radio" name="">同意する
            </div>
            <div class="hoge">
            <input type="submit" name="back" value="戻る">
            <input type="submit" name="send" value="送信">
            </div>
        </form>
    </div>
    <?php
            echo "<pre>";
            print_r($_POST);
            echo "<hr>";
            echo "</pre>";
        ?>
</body>
</html>