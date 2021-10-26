<?php

class HomeController
{

    public static function accueil()
    {

        $games = Game::readAll();
        $players = Player::readAll();
        $contests = Contest::readAll();
        $lists = Player::readall();

        include(VIEW . '/home/home.php');

    }

    public static function manageContest()
    {
        $match = Contest::readOne([
            'id'=>$_GET['id']
        ]);

    }

    public static function listChallenger()
    {
        if (!empty($_GET)):
            $challengers = Challenger::readAll([

                'id' => $_GET['id']
            ]);
            $lists = Challenger::readAllPlayer();

        endif;

        
        include(VIEW . '/home/addChallenger.php');


    }


    public static function registerChallenger()
{
        if (isset($_POST['inscription'])):

            Challenger::insert([
                'player_id' => $_POST['ajout'],
                'contest_id' => $_GET['id'],
            ]);
             header('location:../');
            exit();
        endif;



        include(VIEW . '/home/addChallenger.php');


    }


    public static function addGame()
    {

        if (!empty($_GET)):
            $game = Game::readOne([
                'id' => $_GET['id']
            ]);

        endif;

        if (!empty($_POST)):

            Game::insert([
                'id' => $_POST['id'],
                'title' => $_POST['title'],
                'min_player' => $_POST['min_player'],
                'max_player' => $_POST['max_player'],
            ]);

            header('location:../');
            exit();
        endif;


        include(VIEW . '/home/addGame.php');


    }

    public static function deleteGame()
    {

        Game::delete([
            'id' => $_GET['id']
        ]);

        header('location:../');
        exit();

    }

    public static function addPlayer()
    {

        if (!empty($_GET)):
            $player = Player::readOne([
                'id' => $_GET['id']
            ]);

        endif;

        if (!empty($_POST)):

            Player::insert([
                'id' => $_POST['id'],
                'email' => $_POST['email'],
                'pseudo' => $_POST['pseudo'],
            ]);

            header('location:../');
            exit();
        endif;


        include(VIEW . '/home/addPlayer.php');



    }

    public static function deletePlayer()
    {

        Player::delete([
            'id' => $_GET['id']
        ]);

        header('location:../');
        exit();

    }
    public static function addContest()
    {

        if (!empty($_GET)):
            $contest = Contest::readOne([
                'id' => $_GET['id']
            ]);

        endif;

        if (!empty($_POST)):

            Contest::insert([
                'id' => $_POST['id'] ?? NULL,
                'game_id' => $_POST['game_id'] ?? NULL,
                'start_date' => $_POST['start_date'] ?? NULL,
                'winner_id' =>$_POST['winner_id'] ?? NULL,
                'player_registered' =>$_POST['player_registered'] ?? NULL,
            ]);
            header('location:../');
            exit();
        endif;


        include(VIEW . '/home/addContest.php');


    }

    public static function deleteContest()
    {

        Contest::delete([
            'id' => $_GET['id']
        ]);

        header('location:../');
        exit();

    }



}