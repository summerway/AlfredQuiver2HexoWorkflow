<?php
/**
 * Created by PhpStorm.
 * User: MapleSnow
 * Date: 2019/3/4
 * Time: 11:16 AM
 */

namespace Quiver2Hexo\Service;

class BashService{

    static function configEnv(){
        LogService::warning("Please config .env first");
        return shell_exec("cp env.example .env && open .env");
    }

    static function pwd($path){
        if(empty($path)){
            return false;
        }
        return trim(shell_exec("cd {$path} && pwd"));
    }

    static function rm($path){
        return shell_exec("rm -rf {$path}");
    }

    static function mkdir($path){
        return shell_exec("mkdir -p $path");
    }

    /**
     * @param string $path hexo base path
     * @return string
     */
    static function hexoDeploy($path){
        return shell_exec("cd {$path} && hexo g -d");
    }

    /**
     * @param string $path hexo base path
     * @return string
     */
    static function hexoServer($path){
        if($pid = self::getProcessId("hexo")){
            self::kill($pid);
        }
        return shell_exec("cd {$path} && (hexo s &)");
    }

    static function getProcessId($process){
        return shell_exec("pgrep {$process}");
    }

    static function kill($process){
        return shell_exec("kill -9 {$process}");
    }

    static function notification($title,$message){
        return shell_exec("osascript -e 'display notification \"{$message}\" with title \"{$title}\"'");
    }
}
