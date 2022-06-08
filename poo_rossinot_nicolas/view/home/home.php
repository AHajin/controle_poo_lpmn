<?php




include(VIEW . '/include/header.php');
?>

<div class="text-center">
    <h1>Accueil</h1>
</div>

<div class="row justify-content-around">
<table border="0">
    
    <h1>Jeux :</h1>
<th>Nom :</th>
<th>ID :</th>
<th>Joueurs minimum :</th>
<th>Joueurs maximum :</th>
</tr>
    <?php  foreach ($games as $game):

        ?>
    <div >
        <div >
            <div>
                <tr>
                <td ><?= $game['title']  ?></td>
                <td ><?= $game['id'] ?> </td>
                <td ><?= $game['min_player'] ?> </td>
                <td ><?= $game['max_player'] ?> </td>
    </tr>
                
            </div>
        </div>
    </div>
    <?php  endforeach;  ?>
    </table>
</div>
<div class="row justify-content-around">
<table border="0">
    <tr>
    <h1>Joueurs :</h1>
<th>email :</th>
<th>nickname :</th>
<th>id :</th>
</tr>
    <?php  foreach ($players as $player):

        ?>
    <div >
        <div  >
            <div>
                <tr>

                <td ><?= $player['email']  ?></td>
                <td ><?= $player['nickname'] ?> </td>
                <td ><?= $player['id'] ?> </td>
    </tr>
                
            </div>
        </div>
    </div>
    <?php  endforeach;  ?>
    </table>
</div>
    <hr>
<h1>Contest :</h1>
<div class="row justify-content-around">
<?php  foreach ($contests as $contest):
$currentDate = $contest['start_date'];
// $currentDate = strtotime($contest['start_date']);

        
?>

<div class="col-md-3">
<div class="card" style="<?php if(date('Y-m-d')<=$currentDate){?>background-color:grey;<?php }?>width: 18rem;">
    <div class="card-body">
    <h5 class="card-title">ID de la partie :<?= $contest['id'];?> </h5>

        
        <h5 class="card-title">ID du jeu : <?= $contest['game_id'] ?> </h5>
<h5 class="card-title">ID du gagnant :<?= $contest['winner_id'] ?> </h5>
<h5 class="card-title">Date de début :<?= $contest['start_date'] ?> </h5>
<h5 class="card-title">Nombre d'inscrits :<?= $contest['player_registered']?? 0?> </h5>
        <a href="<?= BASE_PATH.'/contest/add?id='.$contest['id'] ?>" class="btn btn-primary">Gérer</a>
        <a href="<?= BASE_PATH.'/challenger/add?id='.$contest['id'] ?>" class="btn btn-primary">Ajouter un joueur</a>
        <a onclick="return(confirm('Etes vous sur de vouloir supprimer le produit?'))" href="<?= BASE_PATH.'/contest/delete?id='.$product['id'] ?>" class="btn btn-danger">Supprimer</a>
    </div>
</div>
</div>
<?php  endforeach;  ?>
    </div>



<?php


include(VIEW . '/include/footer.php');
?>


