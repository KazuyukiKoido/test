<form action="complete.php" method="post" accept-charset="utf-8">
    <div>ニックネーム</div>
        <?php 
        echo $_POST['nickname'];
        ?>
    <div>ID</div>
        <?php 
        echo $_POST['id'];
        ?>
    <div>パスワード</div>
        <?php 
        echo $_POST['pasword'];
        ?>
    <br>
    <input type="submit" value="登録する">
</form>