require('sweetalert');

module.exports = function (email) {
    if (validateEmail(email)) {
        $.post('/', {email: email}).done(function () {
            swal('Отлично!', 'Теперь вы узнаете об этом первым', 'success')
        })
            .fail(function () {
                swal('Ошбика!', 'Неправильный email', 'error')
            })
    }
    else {
        swal('Ошбика!', 'Неправильный email', 'error')
    }
};

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}