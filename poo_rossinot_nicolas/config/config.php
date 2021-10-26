<?php

const CONFIG=
[
    'db'=>['host'=>'localhost',
           'dbname'=>'poo_rossinot_nicolas',
           'port'=>3306,
           'username'=>'root',
           'password'=>''
    ],
    'base_url'=>'http://localhost/poo_rossinot_nicolas/'

  ];

   const BASE_PATH= CONFIG['base_url'].'public/index.php';  // constante d'accés à index.php
   const CONTROLLER=__DIR__.'/../src/controller'; // constante d'acces au dossier controller
   const VIEW=__DIR__.'/../view'; // constante d'acces au dossier view




$routes=[
    ''=>['HomeController', 'accueil'],
    '/'=>['HomeController', 'accueil'],
    '/contest/manage'=>['HomeController','manageContest'],
    '/challenger/add'=>['HomeController','listChallenger'],
    '/challenger/register'=>['HomeController','registerChallenger'],
    
    '/game/add'=>['HomeController', 'addGame'],
    '/game/delete'=>['HomeController', 'deleteGame'],
    '/player/add'=>['HomeController', 'addPlayer'],
    '/player/delete'=>['HomeController', 'deletePlayer'],
    '/contest/add'=>['HomeController', 'addContest'],
    '/contest/delete'=>['HomeController', 'deleteContest'],
    '/category/add'=>['HomeController', 'addCategory'],
    '/category/list'=>['HomeController', 'listCategory'],
    '/category/delete'=>['HomeController', 'deleteCategory']






]








;