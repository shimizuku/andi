<?php
require_once('../../library/library.php');
$menu = 2;
$type = !empty($_GET['type']) && $_GET['type'] == 'edit' ? '編集' : '登録';
if ($type == '編集') {
    (new Model())->editMenu(
        $_POST['category_id']
        , $_POST['name']
        , $_POST['price']
        , $_POST['turn']
        , $_POST['id']
        , $_SESSION['_auth_admin']['id']
    );
}
if ($type == '登録') {
    (new Model())->createMenu(
        $_POST['category_id']
        , $_POST['name']
        , $_POST['price']
        , $_POST['turn']
        , $_SESSION['_auth_admin']['id']
    );
}
require_once('../template/header.php');
?>
<h3>メニュー<?=$type?>完了</h3>
<p><span><?=$type?>完了しました。</span></p>
<?php
require_once('../template/footer.php');
