$( document ).ready(function() {
    $('.burger').on('click', function() {
        $('.right-nav').slideToggle();
    })

    $('.exit-zone').on('click', function() {
        $('.modify-group').hide();
    });
});

function modifyGroup(id) {
    $('.modify-group').show();
    $('.modify-group').css('display', 'flex');
    $('.modify-hidden').val(id);
}