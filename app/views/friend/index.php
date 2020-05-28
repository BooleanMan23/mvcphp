<div class = "container mt-5">
    <div class= "row">
    <div class= "col-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFriendModal">
            Add a friend
        </button>
            <h3>Friend List</h3>
                <ul class = "list-group">
                    <?php  foreach($data['friends'] as $friend) : ?>
                        <li class = "list-group-item d-flex justify-content-between align-items-center">
                            <?= $friend['friend_name']; ?>
                            <a href="<?=BASEURL;?>/friend/detail/<?=$friend['friend_id']?>" class="badge badge-primary">Detail</a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <div class="modal fade" id="addFriendModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Add Friend</h5>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                    <div class="modal-body">
                    <form action="<?=BASEURL;?>/friend/add" method = "POST">
                            <div class="form-group">
                                <label for="friendNameInput">Friend Name</label>
                                <input type="text" class="form-control" id="friendNameInput" name = "friendNameInput">
                            </div>
                            <div class="form-group">
                                <label for="friendNumberInput">Friend Number</label>
                                <input type="number" class="form-control" id="friendNumberInput" name ="friendNumberInput">
                            </div>
                            <div class="form-group">
                                <label for="friendEmailInput">Friend Email</label>
                                <input type="email" class="form-control" id="friendEmailInput" name ="friendEmailInput">
                            </div>
                    </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Add</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                    </div>
                </div>
             </div>
        </div>
    </div> 
</div>