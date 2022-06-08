<?php
include(VIEW . '/include/header.php');

?>
<div class="text-center">
    <h1>Ajout de jeu</h1>
</div>


<form action="<?= BASE_PATH . '/player/add' ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $player['id'] ?? 0 ?>" >
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Email</label>
        <input type="text" class="form-control" value="<?= $player['email'] ?? "" ?>" name="email" id="formGroupExampleInput" placeholder="email">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">nickname</label>
        <input type="text" name="pseudo" value="<?= $player['nickname'] ?? "" ?>" class="form-control" id="formGroupExampleInput2" placeholder="pseudo">
    </div>


    <button type="submit"> Valider</button>
</form>
<?php

include(VIEW . '/include/footer.php');
?>
