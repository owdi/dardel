$(document).ready(function() {

    $('#addUserForm').css('color', 'black');

    $('#addUserForm').click(function() {
        $('#showUserList').css('color', '');
        $('#addUserForm').css('color', 'black');
        $('#user_form').show();
        $('#user_list').hide();
    });

    $('#showUserList').click(function() {
        $('#showUserList').css('color', 'black');
        $('#addUserForm').css('color', '');                
        $('#user_list').show();
        $('#user_form').hide();
    });

    //category form
    $('#addCategoryForm').css('color', 'black');

    $('#addCategoryForm').click(function() {
        $('#showCategoryList').css('color', '');
        $('#addCategoryForm').css('color', 'black');
        $('#category_form').show();
        $('#category_list').hide();
    });

    $('#showCategoryList').click(function() {
        $('#showCategoryList').css('color', 'black');
        $('#addCategoryForm').css('color', '');                
        $('#category_list').show();
        $('#category_form').hide();
    });

    setTimeout(function(){
        $('.error').fadeOut( "slow" );
    }, 2000);
});