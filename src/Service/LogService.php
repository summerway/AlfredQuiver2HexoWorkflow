<?php
/**
 * Created by PhpStorm.
 * User: MapleSnow
 * Date: 2019/3/5
 * Time: 6:59 PM
 */

namespace Quiver2Hexo\Service;

class LogService {
    static protected $queue = [];

    static function getQueue(){
        return self::$queue;
    }

    static function error($message){
         BashService::notification("Error",$message);
    }

    static function warning($message){
        BashService::notification("Warning",$message);
    }

    static function success($message){
        BashService::notification("Success",$message);
    }

    static function insert($message){
        array_push(self::$queue,$message);
    }

    static function output(){
        if(self::$queue){
            return implode("\n",self::$queue);
        }

        return false;
    }

}