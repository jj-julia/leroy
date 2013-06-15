<!doctype html>
<html lang='en'> 
<head>
  <meta charset='utf-8'/>
  <title><?=$title?></title>
  <link rel='stylesheet' href='<?=$stylesheet?>'/>
  <link rel='shortcut icon' href='<?=$favicon?>'/>
</head>
<body>
  <div id='wrap-header'>
    <div id='header'>
    <hgroup id='banner'>
      <img class='site-logo' src='<?=$logo?>' alt='logo' width='<?=$logo_width?>' height='<?=$logo_height?>' />
      <h1 class='site-title'><?=$header?></h1>
      <h2 class='site-slogan'><?=$slogan?></h2>
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