<?php

class Game extends Db
{

    public static function insert(array $data)
    {
        $request="INSERT INTO game VALUES (:id, :title, :min_player, :max_player)";
        $response=self::getDb()->prepare($request);
        $response->execute($data);
        return self::getDb()->lastInsertId();


    }

    public static function readAll()
    {
        $request="SELECT * FROM game";
        $response=self::getDb()->prepare($request);
        $response->execute();
         return $response->fetchAll(PDO::FETCH_ASSOC);


    }

    public static function readOne($id)
    {
        $request="SELECT * FROM game WHERE id=:id";
        $response= self::getDb()->prepare($request);
        $response->execute($id);
        return $response->fetch(PDO::FETCH_ASSOC);

    }

    public static function delete($id)
    {
        $request="DELETE FROM game WHERE id=:id";
        $response=self::getDb()->prepare($request);
         return $response->execute($id);

    }

}