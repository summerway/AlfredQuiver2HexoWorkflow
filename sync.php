<?php
/**
 * Created by PhpStorm.
 * User: MapleSnow
 * Date: 2019/3/6
 * Time: 6:11 PM
 */

require __DIR__.'/vendor/autoload.php';

$quiver = new \Quiver2Hexo\Quiver();

if(!file_exists('.env')){
    $quiver->initConfig();
    return ;
}

$env = Dotenv\Dotenv::create(__DIR__);
$env->load();

$option = end($argv);

switch ($option){
    case '-r':
        $quiver->rollback();
        break;
    case '-rd':
        if($quiver->rollback()){
            echo 'T';
        }else{
            echo 'F';
        }
        break;
    case '-d':
        echo $quiver->sync();
        break;
    case '-s':
    default:
        echo $quiver->sync();
        break;
}