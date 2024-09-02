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

    <title>予約リスト</title>
</head>

<body>
    <header class="navbar">
        <div class="container-fluid">
            <div class="navbar-brand" style="color: white;">AKARENGA</div>
            <form class="d-flex">
            <a href="/admin/resrve_list.php"class="mx-3"><i class="bi bi-list-task nav-icon"></i></a>
            <a href="/admin/setting.php"><i class="bi bi-gear nav-icon"></i></a>
            </form>
        </div>
    </header>

    <h1>予約リスト</h1>

    <div class="row m-3">
        <div class="col">
            <select class="form-select" aria-label="Default select example">
                <option selected>1月</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col">
            <select class="form-select" aria-label="Default select example">
                <option selected>1日</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>

    <table class="table">
        <tbody>
            <tr>
                <td>1/1(土)</td>
                <td>17:00</td>
                <td>test 4名<br>
                    XXX@XXX.xxx<br>
                    111-111-1111<br>
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXX</td>
            </tr>
            <tr>
                <td>1/1(土)</td>
                <td>17:00</td>
                <td>test 4名<br>
                    XXX@XXX.xxx<br>
                    111-111-1111<br>
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXX</td>
            </tr>
            <tr>
                <td>1/1(土)</td>
                <td>17:00</td>
                <td>test 4名<br>
                    XXX@XXX.xxx<br>
                    111-111-1111<br>
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXX</td>
            </tr>
            <tr>
                <td>1/1(土)</td>
                <td>17:00</td>
                <td>test 4名<br>
                    XXX@XXX.xxx<br>
                    111-111-1111<br>
                    XXXXXXXXXXXXXXXXXXXXXXXXXXXX</td>
            </tr>
        </tbody>
    </table>

    <!-- BootstrapのJavaScriptと依存関係を読み込む -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>