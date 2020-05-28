<div class = "container mt-5">
    <div class= "row">
        <div class= "col-6">
            <h3>Friend List</h3>
            <ul class = "list-group">
                <?php  foreach($data['friends'] as $friend) : ?>
                    <li class = "list-group-item d-flex justify-content-between align-items-center">
                        <?= $friend['friend_name']; ?>
                        <a href="<?=BASEURL;?>/friend/detail/<?=$friend['friend_id']?>" class="badge badge-primary">Detail</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>