<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input:focus {
            outline: orange 2px solid;
        }

        textarea:focus {
            outline: orange 2px solid;
        }
    </style>
</head>

<body>
    <h2>エオルゼアカフェ お問い合わせ</h2>
    <h3>お問い合わせ店舗</h3>
    <div class="box">
        <form action="Contact.php" method="post">
            <label for="field_00"><input type="radio" name="field_00_00" id="field_00">エオルゼアカフェ 秋葉原店</label><br>
            <label for="field_01"><input type="radio" name="field_00_00" id="field_01">エオルゼアカフェ 大阪なんば道頓堀店</label><br>
            <label for="field_02"><input type="radio" name="field_00_00" id="field_02">その他の店舗</label>
            <input type="submit" name="submit" value="選択" required>
            <input type="hidden" name="field_00_00" value="">
        </form>
    </div>

    <h3>お名前</h3>

    <div>
        <form action="Contact.php" method="post">
            <input type="text" name="field" id="A" placeholder="姓">
            <input type="text" name="field" placeholder="名">
            <input type="submit" name="submit" value="選択" required>
            <input type="hidden" name="field" value="">
        </form>
    </div>
    <label for="C">
        <h3>メールアドレス</h3>
    </label>
    <div>
        <form action="Contact.php" method="post">
            <input type="email" name="email" id="C" placeholder="info@example.com">
            <input type="submit" name="email" value="確認" required>
            <input type="hidden" name="email" value="">
        </form>
    </div>
    <label for="D">
        <h3>お問い合わせ内容</h3>
    </label>
    <div>
        <form action="Contact.php" method="post">
            <textarea name="field_00_22" id="D"></textarea>
            <input type="submit" name="submit" value="選択" required>
            <input type="hidden" name="field_00_22" value="">
        </form>
    </div>
    <h3>プライバシーポリシーの同意</h3>
    <p>下記事項をご確認の上、「同意する」にチェックして頂き、お問い合わせフォームをご利用ください<br>
        <a href="">プライバシーポリシー</a>
    </p>
    <form action="Contact.php" method="post">
        <input type="radio" name="">同意する
    </form>
    <div>
        <form action="Contact.php" method="post">
            <input type="submit" name="submit" value="確認画面へ">
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