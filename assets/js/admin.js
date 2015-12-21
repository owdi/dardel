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
        $('#specification_form').show();
        $('#specification_update_form').hide();dort
    });

    $('#showCategoryList').click(function() {
        $('#showCategoryList').css('color', 'black');
        $('#addSepcificationForm').css('color', '');                
        $('#specification_update_form').show();
        $('#specification_form').hide();
    });

    setTimeout(function(){
        $('.error').fadeOut( "slow" );
    }, 2000);


    var language = $('#language');
    var category = $('#category');
     
    // chargement des régions
    $.ajax({
        url: 'specification.php',
        data: 'go', // on envoie $_GET['go']
        dataType: 'json', // on veut un retour JSON
        success: function(json) {
            $.each(json, function(index, value) { // pour chaque noeud JSON
                // on ajoute l option dans la liste
                category.append('<option value="'+ index +'">'+ value +'</option>');
            });
        }
    });
 
    // à la sélection d une région dans la liste
    language.on('change', function() {
        var val = $(this).val(); // on récupère la valeur de la région
 
        if(val != '') {
            category.empty(); // on vide la liste des départements
             
            $.ajax({
                url: 'specification.php',
                data: 'id_category='+ val, // on envoie $_GET['id_region']
                dataType: 'json',
                success: function(json) {
                    $.each(json, function(index, value) {
                        category.append('<option value="'+ index +'">'+ value +'</option>');
                    });
                }
            });
        }
    });

});