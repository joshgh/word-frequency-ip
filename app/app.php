<?php
    date_default_timezone_set("America/Los_Angeles");

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register (new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post('/result', function() use($app) {
        $newRepeatCounter = new RepeatCounter;
        $phraseInput = $_POST['phrase'];
        $wordInput = $_POST['word'];
        $result = $newRepeatCounter->countRepeats($phraseInput, $wordInput);

        return $app['twig']->render('result.html.twig', array('result' => $result));
    });

    return $app;
 ?>
