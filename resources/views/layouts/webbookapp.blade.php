<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <style media="screen">
      body {
        width: 800px;
        margin: auto;
        margin-top: 0px;
        color: #222222;
      }
      .header {
        background: linear-gradient(lightgray, white);
        padding-top: 1px;
        width: 800px;
        /* position:fixed; */
        position:sticky;
        top:0;
      }
      .content {
        /* margin-top: 2rem; */
        margin-bottom: 2rem;
        /* padding-top: 146px; */
      }
      .footer {
        text-align: right;
        background: linear-gradient(white, lightgray);
        padding-right: 1rem;
        padding-top: 5px;
        padding-bottom: 3px;
        margin-bottom: 0;
      }
      .logo {
        margin: 0 5px 0 5px;
      }
      .header h1 a{
        color: #4B4E6D;
        text-decoration: none;
        padding-left: 1rem;
      }
      .header h3 {
        padding-left: 2rem;
      }
      .copyright {
        color: #4B4E6D;
      }
      .errorMsg {
        color: Red;
        font-size: 80%;
      }
      .wf-roundedmplus1c, button, small, body {
        font-family: "M PLUS Rounded 1c";
      }
      button {
        /* 角丸 */
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
      }
      .menu_wrap {
        margin-left: 2rem;
      }
      .menu_wrap button {
        margin-right: 3px;
        padding: 0.5rem 1rem 0.5rem 1rem;
        background-color: #EEE;
      }
      button.logout_button{
        margin-right: 0.5rem;
      }
      button.logout_button:hover {
        background-color: #CCC;
      }
      button.member:hover{
        background-color: #8497dc;
      }
      button.document:hover{
        background-color: #8bdc84;
      }
      button.circulation:hover{
        background-color: #dccd84;
      }
      button.returns:hover{
        background-color: #dc9184;
      }
    </style>
    <!-- fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
    <!-- フォント -->
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
  </head>
  <body>
    <!-- ヘッダー -->
    <div class="header wf-roundedmplus1c">
      <h1><a href="/after_login_top"><i class="fas fa-book-open logo"></i>図書管理システム</a></h1>
      <h3>@yield('title')</h3>
    </div>

    <!-- コンテンツ入れるとこ -->
    <div class="content wf-roundedmplus1c">
      @yield('content')
    </div>

    <!-- フッター -->
    <div class="footer wf-roundedmplus1c">
      <button type="button" class="logout_button" name="logout_button" onclick="location.href='./login'">ログアウト</button>
      <small class="copyright">copyright 2020 teamOkada.</small>
    </div>
  </body>
</html>
