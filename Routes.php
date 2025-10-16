 <?php


   $router->get('/', "Controllers/home.php");
   $router->get('/features', "Controllers/features.php");
   $router->get('/pricing', "Controllers/pricing.php");

   $router->get('/notes', "Controllers/notes/index.php");
   $router->get('/note', "Controllers/notes/show.php");
   $router->get('/create', "Controllers/notes/create.php");

   $router->post('/create', "Controllers/notes/addRecored.php");

   $router->delete('/note', "Controllers/notes/destroy.php");
