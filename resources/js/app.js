require('./bootstrap');

// Detech account
const account = searchObj('?', 'account');

function searchObj(character, objName) {
    return window.location.href.split(character + objName + '=')[window.location.href.split(character + objName + '=').length - 1].split('&')[0];
}

// Logout
$('#btn-logout').click(function() {
    window.location.href = '/';
});

for (let i = 0; i < document.querySelectorAll('.btn-confirm').length; i++) {
    document.querySelectorAll('.btn-confirm')[i].onclick = () => {
        console.log('123');
    }
}
