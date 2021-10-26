<?php

class Contest extends Db
{

    public static function insert(array $data)
    {
        $request="INSERT INTO contest VALUES(:id, :game_id, :start_date, :winner_id)";
        $response=self::getDb()->prepare($request);
        echo var_dump($data);
        $response->execute($data);
        
        return self::getDb()->lastInsertId();


    }

    public static function readAll()
    {
        $request="SELECT * FROM contest ORDER BY start_date  DESC";
        $response=self::getDb()->prepare($request);
        $response->execute();
         return $response->fetchAll(PDO::FETCH_ASSOC);


    }


    public static function readOne($id)
    {
        $request="SELECT * FROM contest WHERE id=:id";
        $response= self::getDb()->prepare($request);
        $response->execute($id);
        return $response->fetch(PDO::FETCH_ASSOC);

    }

    public static function delete($id)
    {
        $request="DELETE FROM contest WHERE id=:id";
        $response=self::getDb()->prepare($request);
         return $response->execute($id);

    }

}