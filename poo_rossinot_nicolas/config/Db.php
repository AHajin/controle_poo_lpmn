<?php

class Db
{

    protected static function getDb()
    {
        try {
            $bdd= new PDO('mysql:host='.CONFIG['db']['host'].';dbname='.CONFIG['db']['dbname'].';charset=utf8;port='.CONFIG['db']['port'], CONFIG['db']['username'], CONFIG['db']['password'],[
                'ATTR_ERRMODE'=>PDO::ERRMODE_EXCEPTION,

            ]);
            return $bdd;
        }catch (Exception $e){

            var_dump($e);
        die;
        }




    }


}