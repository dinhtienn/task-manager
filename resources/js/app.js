// Detech account
const account = searchObj('?', 'account');

function searchObj(character, objName) {
    return window.location.href.split(character + objName + '=')[window.location.href.split(character + objName + '=').length - 1].split('&')[0];
}

// Logout
$('#btn-logout').click(function() {
    window.location.href = '/';
});

$('.btn-dang-phat-trien').click(() => {
    Swal.fire(
        'Sorry!',
        'Tính năng đang trong quá trình phát triển!',
        'warning'
    );
});
