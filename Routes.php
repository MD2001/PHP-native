 <?php


    $router->get('/', "Controllers/home.php");
    $router->get('/features', "Controllers/features.php");
    $router->get('/pricing', "Controllers/pricing.php");
    $router->get('/notes', "Controllers/notes/index.php");
    $router->get('/note', "Controllers/notes/show.php");
    $router->get('/create', "Controllers/notes/create.php");
    $router->get('/note/edit', "Controllers/notes/edit.php");
    $router->get('/register', "Controllers/registers/index.php");

    $router->patch('/note/edit', "Controllers/notes/upDate.php");

    $router->post('/create', "Controllers/notes/addRecored.php");
    $router->post('/register', "Controllers/registers/login.php");

    $router->delete('/note', "Controllers/notes/destroy.php");
