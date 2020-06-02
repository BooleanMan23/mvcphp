$(function(){
    $('#addFriendButton').on('click', function(){
        $('#exampleModalLabel').html("Add Friend");
        $('.modal-footer button[type=submit]').html('Add');
        $('#friendNameInput').val('');
        $('#friendNumberInput').val('');
        $('#friendEmailInput').val('');
    });


    $('.updateFriendButton').on('click', function () { 
        $('#exampleModalLabel').html("Update Friend");
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action', 'http://localhost/mvc/public/friend/update');
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/mvc/public/friend/getUpdate',
            data: {id : id},
            method: 'post',
            dataType : 'json',
            success: function(data){
                $('#friendNameInput').val(data.friend_name);
                $('#friendNumberInput').val(data.friend_number);
                $('#friendEmailInput').val(data.friend_email);
                $('#friend_id').val(data.friend_id);
            }
        });
    
    
    });
});