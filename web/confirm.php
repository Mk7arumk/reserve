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
  <title>予約内容確認</title>
</head>

<body>
  <header>AKARENGA</header>

  <h1>予約内容確認</h1>

  <table class="table">
  <tbody>
    <tr>
      <th scope="row">日時</th>
      <td>2024年01月01日 (土) 17時00分</td>
    </tr>
    <tr>
      <th scope="row">人数</th>
      <td>4名</td>
    </tr>
    <tr>
      <th scope="row">氏名</th>
      <td colspan="2">XXXXXXXX</td>
    </tr>
    <tr>
      <th scope="row">メールアドレス</th>
      <td colspan="2">XXX@XXX.xxx</td>
    </tr>
    <tr>
      <th scope="row">電話番号</th>
      <td colspan="2">111-111-1111</td>
    </tr>
    <tr>
      <th scope="row">備考欄</th>
      <td colspan="2">XXXXXXXXXXXXXXXXXXXXXXXXXXXX<br>
      XXXXXXXXXXXXXXXXXXXXXXXXXXXX</td>
    </tr>
  </tbody>
</table>

<div class="d-grid gap-2 mx-3">
  <a class="btn btn-primary rounded-pill" href="complete.php">予約確定</a>
  <a class="btn btn-secondary rounded-pill" href="/">戻る</a>
</div>

  <!-- BootstrapのJavaScriptと依存関係を読み込む -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
