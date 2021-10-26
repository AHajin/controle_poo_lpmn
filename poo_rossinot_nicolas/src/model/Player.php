<?php

class Player extends Db
{

    public static function insert(array $data)
    {
        $request="INSERT INTO player VALUES (:id, :email, :pseudo)";
        $response=self::getDb()->prepare($request);
        $response->execute($data);
        return self::getDb()->lastInsertId();


    }

    public static function readAll()
    {
        $request="SELECT * FROM player";
        $response=self::getDb()->prepare($request);
        $response->execute();
         return $response->fetchAll(PDO::FETCH_ASSOC);


    }

    public static function readOne($id)
    {
        $request="SELECT * FROM player WHERE id=:id";
        $response= self::getDb()->prepare($request);
        $response->execute($id);
        return $response->fetch(PDO::FETCH_ASSOC);

    }

    public static function delete($id)
    {
        $request="DELETE FROM player WHERE id=:id";
        $response=self::getDb()->prepare($request);
         return $response->execute($id);

    }

}