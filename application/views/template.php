<!DOCTYPE html>
<head>
  <meta charset="utf-8"/>
  <title>程序预览</title>
  <link rel="shortcut icon" href="/media/favicon.ico?ver=0.1" /> 
  <?php echo HTML::style(STATIC_HOME_URL.'/media/pure/pure-min.css'); ?>
  <style>
    .pure-g {
      margin-left: 50px;
    }
  </style>
<body>
<div class="pure-g">
  <div class="pure-u-1">
    <h1>测试用例</h1>
    <ul>
    <li><?php echo HTML::anchor('test_sigup', '用户相关入口'); ?> </li>
    <li><?php echo HTML::anchor('test_article', '文章相关入口'); ?> </li>
    <li><?php echo HTML::anchor('test_markdown', 'markdown语法支持'); ?> </li>
    <li><?php echo HTML::anchor('test_cache', '缓存测试'); ?> </li>
    </ul>
  </div>
</div>
</body>
</html>

