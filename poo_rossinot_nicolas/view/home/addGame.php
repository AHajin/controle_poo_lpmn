<?php
include(VIEW . '/include/header.php');

?>
<div class="text-center">
    <h1>Ajout de jeu</h1>
</div>


<form action="<?= BASE_PATH . '/game/add' ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $game['id'] ?? 0 ?>" >
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nom</label>
        <input type="text" class="form-control" value="<?= $game['title'] ?? "" ?>" name="title" id="formGroupExampleInput" placeholder="Nom du jeu">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">joueurs minimum</label>
        <input type="text" name="min_player" value="<?= $game['min_player'] ?? "" ?>" class="form-control" id="formGroupExampleInput2" placeholder="Nombre de joueurs minimum">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">joueurs maximum</label>
        <input type="text" name="max_player" value="<?= $game['min_player'] ?? "" ?>" class="form-control" id="formGroupExampleInput2" placeholder="Nombre de joueurs maximum">
    </div>


    <button type="submit"> Valider</button>
</form>
<?php

include(VIEW . '/include/footer.php');
?>
