
<?php
 require_once __DIR__."/../vendor/autoload.php";
 require_once __DIR__."/../src/RepeatCounter.php";
 date_default_timezone_set('America/Los_Angeles');


$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

$app->get("/", function() use ($app){
        return $app['twig']->render('home.html.twig');
    });

$app->post("/results", function() use ($app){
        $result = new RepeatCounter;
        $new_result = $result->countRepeats($_POST['input1'], $_POST['input2']);
        return $app['twig']->render('results.html.twig', array('results' => $new_result));
});
    return $app;

 ?>
