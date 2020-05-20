<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style media="screen">
      .errorMsg{
        color: Red;
        font-size: 80%;
      }
    </style>
  </head>
  <body>
    <!-- ヘッダー -->
    <div class="header">
      <h1><a href="/after_login_top">図書管理システム</a></h1>
      <h2><?php echo $__env->yieldContent('title'); ?></h2>
    </div>

    <!-- コンテンツ入れるとこ -->
    <div class="content">
      <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- フッター -->
    <div class="footer">
      <button type="button" name="logout_button" onclick="location.href='./login'">ログアウト</button>
      <small>copyright 2020 teamOkada.</small>
    </div>
  </body>
</html>
<?php /**PATH C:\Users\student\Desktop\webbookapp\resources\views/layouts/webbookapp.blade.php ENDPATH**/ ?>