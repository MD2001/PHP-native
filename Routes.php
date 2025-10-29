 <?php


   $router->get('/', "Controllers/home.php");
   $router->get('/features', "Controllers/features.php");
   $router->get('/pricing', "Controllers/pricing.php");
   $router->get('/notes', "Controllers/notes/index.php")->only('auth');
   $router->get('/note', "Controllers/notes/show.php")->only('auth');
   $router->get('/create', "Controllers/notes/create.php")->only('auth');
   $router->get('/note/edit', "Controllers/notes/edit.php")->only('auth');

   $router->get('/register', "Controllers/registers/index.php")->only('guest');
   $router->get('/login', "Controllers/session/index.php")->only('guest');
   $router->get('/logout', "controllers/registers/logout.php")->only('auth');


   $router->patch('/note/edit', "Controllers/notes/upDate.php")->only('auth');

   $router->post('/create', "Controllers/notes/addRecored.php")->only('auth');
   $router->post('/register', "Controllers/registers/create.php");

   $router->delete('/note', "Controllers/notes/destroy.php");
$router->post('/session/create', "Controllers/session/create.php");