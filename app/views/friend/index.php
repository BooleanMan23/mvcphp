<div class = "container mt-5">
    <div class= "row">
        <div class= "col-6">
            <h3>Friend List</h3>

            <?php  foreach($data['friends'] as $friend) : ?>
            <li><?= $friend['friend_name']?></li>
            <li><?= $friend['friend_number']?></li>
            <li><?= $friend['friend_email']?></li>

            <?php endforeach ?>
        </div>
    
    </div>
</div>