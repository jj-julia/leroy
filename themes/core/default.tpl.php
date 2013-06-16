<!doctype html>
<html lang='en'> 
<head>
  <meta charset='utf-8'/>
  <title><?=$title?></title>
  <link rel='shortcut icon' href='<?=$favicon?>'/>
  <link rel='stylesheet' href='<?=$stylesheet?>'/>
</head>
<body>
  <div id='wrap-header'>
    <div id='header'>
      <div id='login-menu'>
        <?=login_menu()?>
      </div>
      <hgroup id='banner'>
        <img class='site-logo' src='<?=$logo?>' alt='logo' width='<?=$logo_width?>' height='<?=$logo_height?>' />
        <h1 class='site-title'><?=$header?></p>
        <h2 class='site-slogan'><?=$slogan?></p>
      </hgroup>
    </div>
  </div>
  <div id='wrap-main'>
    <div id='main' role='main'>
      <?=get_messages_from_session()?>
      <?=@$main?>
      <?=render_views()?>
    </div>
  </div>
  <div id='wrap-footer'>
    <div id='footer'>
      <?=$footer?>
      <?=get_debug()?>
    </div>
  </div>
</body>
</html>