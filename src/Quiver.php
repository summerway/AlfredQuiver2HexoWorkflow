<?php
/**
 * Quiver2Hexo - converts quiver notes written by markdown to Hexo blog posts
 *
 * @author Maple Snow <summerweiace@163.com>
 */


namespace Quiver2Hexo;

use Quiver2Hexo\Service\BashService;
use Quiver2Hexo\Service\HexoService;
use Quiver2Hexo\Service\LogService;
use Quiver2Hexo\Service\QuiverService;
use Exception;

/**
 * Class Transform
 * @package Quiver2Hexo
 */
class Quiver{

    public function initConfig(){
        BashService::configEnv();
    }

    /**
     * @return array|bool
     */
    public function sync() {
        $HexoService = new HexoService();
        try{
            $HexoService->initPost();
            (new QuiverService)->sync();
            $HexoService->backupPost();
        }catch (Exception $e){
            $HexoService->reset();
            LogService::error("Sync failed: ".$e->getMessage());
            return false;
        }

        if($message=LogService::output()){
            return $message;
        }else{
            LogService::warning("Nothing changed");
            return false;
        }

    }

    /**
     * 回滚
     * @return bool
     */
    public function rollback(){
        return (new HexoService)->rollback();
    }
}


