<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- 必須のmetaタグ -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BootstrapのCSSを読み込む -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Original CSS -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>設定</title>
</head>

<body>
    <header class="navbar">
        <div class="container-fluid">
            <div class="navbar-brand" style="color: white;">AKARENGA</div>
            <form class="d-flex">
                <a href="/admin/resrve_list.php" class="mx-3"><i class="bi bi-list-task nav-icon"></i></a>
                <a href="/admin/setting.php"><i class="bi bi-gear nav-icon"></i></a>
            </form>
        </div>
    </header>

    <h1>設定</h1>

    <form class="card" method="post">
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">予約可能日</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>1月</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">営業時間</label>
                <div class="row">
                    <div class="col-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>00:00</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-2 text-center pt-2">
                        ～
                    </div>
                    <div class="col-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>00:00</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">1時間当たり予約可能人数</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>1人</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="d-grid gap-2 my-3">
                <button class="btn btn-primary rounded-pill" href="submit">登録</button>
            </div>
        </div>
    </form>

    <!-- BootstrapのJavaScriptと依存関係を読み込む -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>