<?php
include(VIEW . '/include/header.php');

?>
<style>
    table,th,td{
        border : 1px solid black;
    }

</style>
<div class="text-center">
    <h1>Ajout de match</h1>
</div>
<?php
?>
<?php echo '<form action="'.BASE_PATH.'/challenger/register?id='.$_GET['id'].'" method="POST" enctype="multipart/form-data">'; ?>
    <select name='ajout' id='ajout' class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
    <?php  foreach ($lists as $list):
    echo' 
  <option value="'.$list['id'].'">'.$list['nickname'].'   '.$list['email'].'</option>

';  endforeach;?> </select>

    <button type="submit" name="inscription" > Inscrire</button>
</form>
</br></br></br>
<table border="2">
    
    <h1>Joueurs :</h1>
<th>Pseudo </th>
<th >Email </th>
</tr>
    <?php  foreach ($challengers as $challenger ):
        $player_id=$challenger['player_id'];
        $nickname=$challenger['nickname'];
        
    echo'<div >
        <div >
            <div>
                <tr>
                <td >'.$nickname.'</td>
                <td >'.$challenger['email'].'</td>
                      </tr>
                
            </div>
        </div>
    </div>';
    endforeach; 
     ?>
</div>



<?php

include(VIEW . '/include/footer.php');
?>
