$(document).ready(function() {

    //user form
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

    //specification form
     $('#addSepcificationForm').css('color', 'black');

    $('#addSepcificationForm').click(function() {
        $('#showCategoryList').css('color', '');
        $('#addSepcificationForm').css('color', 'black');
        // $('#specification_form').show();
        // $('#specification_update_form').hide();
    });

    $('#showCategoryList').click(function() {
        $('#showCategoryList').css('color', 'black');
        $('#addSepcificationForm').css('color', '');                
        // $('#specification_update_form').show();
        // $('#specification_form').hide();
    });

    setTimeout(function(){
        $('.error').fadeOut( "slow" );
    }, 2000);

    
    $( "#language_category").change(function() {
        $('#chooseLanguageForInsert').submit();
    });

    $( "#languageCategoryForUpdate").change(function() {
        $('#chooseLanguageForUpdate').submit();
    });
    




});