<?php
include(VIEW . '/include/header.php');

?>
<div class="text-center">
    <h1>Ajout de match</h1>
</div>


<form action="<?= BASE_PATH . '/contest/add' ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $contest['id->null'] ?? 0 ?>" >
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">ID jeux</label>
        <input type="text" class="form-control" value="<?= $contest['game_id'] ?? "" ?>" name="game_id" id="formGroupExampleInput" placeholder="ID du jeu">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Date de début :</label>
        <input type="date" name="start_date" value="<?= $contest['start_date'] ?? "" ?>" class="form-control" id="formGroupExampleInput2" placeholder="date ">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">ID du gagnant :</label>
        <input type="text" name="winner_id" value="<?= $contest['winner_id'] ?? "" ?>" class="form-control" id="formGroupExampleInput2" placeholder="id du gagnant ">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Nombre de joueurs enregistré :</label>
        <input type="text" name="player_registered" value="<?= $contest['player_registered'] ??  "" ?>" class="form-control" id="formGroupExampleInput2" placeholder="players ">
    </div>

    <button type="submit"> Valider</button>
</form>
<?php

include(VIEW . '/include/footer.php');
?>
