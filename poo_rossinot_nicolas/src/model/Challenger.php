<?php

class Challenger extends Db
{
    public static function insert(array $data)
    {
        $request="INSERT INTO player_contest (player_id,contest_id) VALUES(:player_id, :contest_id)";
        $response=self::getDb()->prepare($request);
        echo var_dump($data);
        $response->execute($data);
        
        return self::getDb()->lastInsertId();


    }

    public static function readAll($id)
    {
        $request="SELECT * FROM player_contest as pc, player as p where pc.contest_id=:id and pc.player_id=p.id ORDER BY pc.id ";
        $response=self::getDb()->prepare($request);
        $response->execute($id);
         return $response->fetchAll(PDO::FETCH_ASSOC);


    }
    public static function readAllPlayer()
    {
        $request="SELECT * FROM player";
        $response=self::getDb()->prepare($request);
        $response->execute();
         return $response->fetchAll(PDO::FETCH_ASSOC);


    }
    



}