 <?php


  $router->get('/', "home.php");
  $router->get('/features', "features.php");
  $router->get('/pricing', "pricing.php");
  $router->get('/notes', "notes/index.php")->only('auth');
  $router->get('/note', "notes/show.php")->only('auth');
  $router->get('/create', "notes/create.php")->only('auth');
  $router->get('/note/edit', "notes/edit.php")->only('auth');

  $router->get('/register', "registers/index.php")->only('guest');
  $router->get('/login', "session/index.php")->only('guest');
  $router->get('/logout', "registers/logout.php")->only('auth');


  $router->patch('/note/edit', "notes/upDate.php")->only('auth');

  $router->post('/create', "notes/addRecored.php")->only('auth');
  $router->post('/register', "registers/create.php");

  $router->delete('/note', "notes/destroy.php");
  $router->post('/login', "session/create.php");
