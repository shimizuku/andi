<?php
require_once('../../library/library.php');
require_once('../../library/Model/Model.php');
$menu = 2;
if (!empty($_GET['sort']) && !empty($_GET['order'])) {
    $menus = (new Model())->getAllMenu($_GET['sort'], $_GET['order']);
}
if (empty($_GET['sort']) && empty($_GET['order'])) {
    $menus = (new Model())->getAllMenu();
}
if (!empty($_POST['delete'])) {
    (new Model())->deleteMenu($_POST['delete']);
    header('Location: ' . (!empty($_GET['sort']) && !empty($_GET['order']) ? 'list.php?sort=' . $_GET['sort'] . '&order=' . $_GET['order'] : $_SERVER['PHP_SELF']));
    exit;
}
require_once('../template/header.php');
?>
<h3>メニュー一覧</h3>
<table class="list">
    <tr>
        <th><a href="list.php?sort=id&order=ASC">▲</a><p>ID</p><a href="list.php?sort=id&order=DESC">▼</a></th>
        <th><p>メニュー名</p></th>
        <th><a href="list.php?sort=menu_category_id&order=ASC">▲</a><p>カテゴリ名</p><a href="list.php?sort=category&order=DESC">▼</a></th>
        <th><p>表示順</p></th>
        <th><p>作成日時</p></th>
        <th><a href="list.php?sort=updated_at&order=ASC">▲</a><p>更新日時</p><a href="list.php?sort=updated_at&order=DESC">▼</a></th>
        <th><button onclick="location.href='input.php?type=create'">新規登録</button></th>
    </tr>
    <?php foreach ($menus as $key) :?>
        <tr>
            <td><?=$key['id']?></td>
            <td><?=$key['name']?></td>
            <td><?=$key['category']?></td>
                <td><?=$key['turn']?></td>
                <td><?=$key['created_at']?></td>
                <td><?=$key['updated_at']?></td>
                <td>
                    <form action="<?=(!empty($_GET['sort']) && !empty($_GET['order']) ? 'list.php?sort=' . $_GET['sort'] . '&order=' . $_GET['order'] : $_SERVER['PHP_SELF'])?>" method="post">
                        <button type="button" onclick="location.href='input.php?type=edit&id=<?=$key['id']?>'">編集</button>
                        <button type="submit" onclick="return confirm('本当に削除しますか？')" id="delete" name="delete" value="<?=$key['id']?>">削除</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
</table>
<?php
require_once('../template/footer.php');
