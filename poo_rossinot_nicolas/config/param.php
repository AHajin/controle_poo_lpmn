<?php
//die('coucou');
spl_autoload_register(function ($classname) {

    // $possibility est un tableau des différents points d'entrés possible de nos classes incluse
    $possibility = ['config', 'src/controller', 'src/model'];
    foreach ($possibility as $folder):  // on boucle sur nos différentes possibilité et vérifions si un fichier existe avec file_exists
        $file = '../' . $folder . '/' . $classname . '.php';

    //die(var_dump($file));
        if (file_exists($file)): // si oui on inclus le fichier de classe en question

        //die( var_dump($file));
            require_once($file);

        endif;

    endforeach;

});

    $url = $_SERVER['REQUEST_URI'];  // ic récupération de l'url actuelle

    // $request=explode('/', $url); on ne choisit pas l'explode sur le séparateur car le retour du tableau peut être trop long et variable d'un projet à un autre
    $request = explode('index.php', $url);

   // die(var_dump($request));
    if (count($request) > 1):

        $requestRoute=$request[1];
        $requestRoute=explode('?', $requestRoute)[0];


    else:
        $requestRoute='';


    endif;

$paths= array_keys($routes);

if (in_array($requestRoute, $paths)){
    $finalRequest=$routes[$requestRoute];
    $class=$finalRequest[0];
    $method=$finalRequest[1];
    $class::$method();
//}else{
//   header('location:../404.php');
//    die;
}


;