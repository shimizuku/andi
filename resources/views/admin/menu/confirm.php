<?php
require_once('../../library/library.php');
$menu = 2;
$categories = (new Model())->getCategory();
$type = (!empty($_GET['type']) && $_GET['type'] == 'edit' ? '編集' : '登録');
require_once('../template/header.php');
?>
<h3>メニュー<?=$type?>確認</h3>
<form action="result.php<?=(!empty($_GET['type'])? '?type=' . $_GET['type'] : '')?>" method="post">
<table class="tables">
    <?php if ($type == '編集') :?>
        <input type="hidden" name="id" value="<?=$_POST['id']?>">
        <tr>
            <th>ID</th>
            <td><?=$_POST['id']?></td>
        </tr>
    <?php endif;?>
    <tr>
        <th>メニュー名</th>
        <td><?=$_POST['name']?></td>
    </tr>
    <tr>
        <th>カテゴリ名</th>
        <td><?=$categories[array_search($_POST['category_id'], array_column($categories, 'id'))]['name']?></td>
    </tr>
    <tr>
        <th>表示順</th>
        <td><?=$_POST['turn']?></td>
    </tr>
    <tr>
        <th>金額</th>
        <td><?=$_POST['price']?></td>
    </tr>
</table>
<input type="hidden" name="name" value="<?=$_POST['name']?>">
<input type="hidden" name="category_id" value="<?=$_POST['category_id']?>">
<input type="hidden" name="turn" value="<?=$_POST['turn']?>">
<input type="hidden" name="price" value="<?=$_POST['price']?>">
<p class="input-button">
    <input formaction="input.php<?=(!empty($_GET['type'])? '?type=' . $_GET['type'] : '')?>" type="submit" value="修正"><input type="submit" value="<?=$type?>完了">
</p>
</form>
<?php
require_once('../template/footer.php');
