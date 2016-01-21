<?php

/**
 * Example application.
 *
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */

 // see <http://symfony.com/doc/current/components/console/introduction.html>
use Samovar\FFTConsole\Command;
use Symfony\Component\Console\Application;

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('xdebug.var_display_max_depth', -1);

require __DIR__.'/vendor/autoload.php';

$application = new Application('Samovar FFTConsole');
$application->add(new Command\VisualizationEqualizerCommand());
$application->add(new Command\TestRenderCommand());
$application->add(new Command\WavInfoCommand());
$application->add(new Command\SinusAnimateCommand());

$application->run();
