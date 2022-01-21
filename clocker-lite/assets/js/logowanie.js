$('.submit-button').on('click', function(event){
    var checkEmail = $("#check-email")
    var checkPassword = $("#check-password")
    
    let result = checkEmail.val().includes("@");
    
    if (checkEmail.val().length<3 || checkEmail.val().length>30 || result==false) {
        checkEmail.removeClass('correct');
        checkEmail.addClass('wrong');
        return;
    }

    checkEmail.removeClass('wrong');
    checkEmail.addClass('correct');

    if (checkPassword.val().length<7){
        checkPassword.removeClass('correct')
        checkPassword.addClass('wrong');
        return;
    }
    
    checkPassword.removeClass('wrong');
    checkPassword.addClass('correct');


    //Wysylanie formularza
    $("#login-form").submit();





})