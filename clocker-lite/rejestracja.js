$('.submit-button').on('click', function(event){
    var checkEmail = $("#check-email")
    var checkPassword = $("#check-password")
    var checkPassword2 = $("#check-password-again")
    
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

    if (checkPassword.val() !== checkPassword2.val()) {
        checkPassword2.removeClass('correct')
        checkPassword2.addClass('wrong')
        return;
    }

    checkPassword2.removeClass('wrong');
    checkPassword2.addClass('correct');

})