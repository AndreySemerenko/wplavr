$(function(){
    $(".button-email").click(function() {
        let form_data = $("#subscribe").serialize();
        let templateUrl = object_name.templateUrl;
        $.ajax({
            type: 'POST',
            url: templateUrl + '/action_ajax_form.php',
            data: form_data,
            success: function(data){
                alert('все ок' + data);
            }
        });
        return false;
    });
});