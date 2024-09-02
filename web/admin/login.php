<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- 必須のmetaタグ -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BootstrapのCSSを読み込む -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Original CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <title>予約システムログイン</title>
</head>

<body>
    <header>AKARENGA</header>

    <h1>予約システムログイン</h1>

    <form class="card text-center" method="post" action="resrve_list.php">
        <div class="card-body">
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ID">
            </div>
            <div class="mb-3">
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="PASSWORD">
            </div>
            <div class="d-grid gap-2 my-3">
                <button class="btn btn-primary rounded-pill" href="submit">ログイン</button>
            </div>
        </div>
    </form>
        <!-- BootstrapのJavaScriptと依存関係を読み込む -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>