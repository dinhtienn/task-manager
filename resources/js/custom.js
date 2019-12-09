const account = searchObj('?', 'account');



function searchObj(character, objName) {
    return window.location.href.split(character + objName + '=')[window.location.href.split(character + objName + '=').length - 1].split('&')[0];
}
