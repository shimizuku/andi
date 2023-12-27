<?php
require_once('../../library/library.php');
$categories = (new Model())->getCategory();
$menu = 2;
$type = (!empty($_GET['type']) && $_GET['type'] == 'edit' ? '編集' : '登録');
if ($type == '編集' && empty($_POST)) {
    $_POST = (new Model())->getOneMenu($_GET['id']);
}
require_once('../template/header.php');
?>
<h3>メニュー<?=$type?></h3>
<form action="confirm.php<?=(!empty($_GET['type'])? '?type=' . $_GET['type'] : '')?>" method="post">
    <table class="tables">
        <div class="input">
            <?php if ($type == '編集') :?>
                <input type="hidden" name="id" value="<?=$_POST['id']?>">
                <tr>
                    <th>ID</th>
                    <td><?=$_POST['id']?></td>
                </tr>
            <?php endif;?>
            <tr>
                <th>メニュー名</th>
                <td><input type="text" name="name" value="<?=(!empty($_POST['name']) ? $_POST['name'] : '')?>"></td>
            </tr>
            <tr>
                <th>カテゴリ名</th>
                <td>
                    <select name="category_id">
                        <?php foreach ($categories as $key) :?>
                            <option value="<?=$key['id']?>"<?=(!empty($_POST['category_id']) && $_POST['category_id'] == $key['id'] ? ' selected' : '')?>><?=$key['name']?></option>
                        <?php endforeach;?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>表示順</th>
                <td><input type="text" name="turn" value="<?=(!empty($_POST['turn']) ? $_POST['turn'] : '')?>"></td>
            </tr>
            <tr>
                <th>金額</th>
                <td><input type="text" name="price" value="<?=(!empty($_POST['price']) ? $_POST['price'] : '')?>"></td>
            </tr>
        </div>
    </table>
    <p class="input-button"><input type="submit" value="確認画面へ"></p>
</form>
<?php
require_once('../template/footer.php');
