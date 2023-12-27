<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=ROOT_URL?>/css/admin-common.css" rel="stylesheet">
    <title><?=SITE_NAME?>　管理画面</title>
</head>
<body>
    <div class="wrapper">
        <main>
            <header>
                <p class="greeting">ログイン名[<?=h($_SESSION['_auth_admin']['name'])?>]さん、ご機嫌いかがですか？</p>
                <a href="<?=ADMIN_ROOT_URL?>/logout.php" class="logout">ログアウトする</a>
            </header>
            <h1><?=SITE_NAME?></h1>
            <nav>
                <ul>
                    <li class="nav">
                        <a href="<?=ADMIN_ROOT_URL?>/top.php" class="nav<?=$menu == 1 ? ' current' : ''?>">top</a>
                    </li>
                    <li class="nav">
                        <a href="<?=ADMIN_ROOT_URL?>/menu/list.php" class="nav<?=$menu == 2 ? ' current' : ''?>">メニュー管理</a>
                    </li>
                    <li class="nav">
                        <a href="" class="nav<?=$menu == 3 ? ' current' : ''?>">△△管理</a>
                    </li>
                    <li class="nav">
                        <a href="" class="nav<?=$menu == 4 ? ' current' : ''?>">✕✕管理</a>
                    </li>
                </ul>
            </nav>
            <div class="contents-area">
