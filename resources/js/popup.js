const popup = document.querySelector('.popup-notification');
const btnClosePopup = document.querySelector('.btn-close-popup');
const popupWrapShadow = document.querySelector('.popup-wrap-shadow');

 if (btnClosePopup) btnClosePopup.onclick = () => { closePopup() };
if (popupWrapShadow) popupWrapShadow.onclick = () => { closePopup() };

// Gọi đến function để hiển thị Popup
// status: success | error | warning | normal
export function displayNotiPopup(status = 'normal', title = '', message = '') {
    document.querySelector('.popup-title').innerHTML = title;
    document.querySelector('.popup-message').innerHTML = message;
    removeClassByPrefix(popup, 'status-');
    popup.classList.add(`status-${ status }`);
    openPopup();
}

function openPopup() {
    popup.style.top = `${ window.pageYOffset + 0.2 * window.innerHeight }px`;
    popupWrapShadow.style.top = `${ window.pageYOffset }px`;
    popup.style.display = 'flex';
    popupWrapShadow.style.display = 'block';
    popup.style.opacity = '1';
    popupWrapShadow.style.opacity = '1';
    document.querySelector('body').style.overflow = 'hidden';
}

function closePopup() {
    popup.style.opacity = '0';
    popupWrapShadow.style.opacity = '0';
    document.querySelector('body').style.overflow = 'auto';

    setTimeout(() => {
        popup.style.display = 'none';
        popupWrapShadow.style.display = 'none';
    }, 300);
}

function removeClassByPrefix(el, prefix) {
    var regex = new RegExp('\\b' + prefix + '.*?\\b', 'g');
    el.className = el.className.replace(regex, '');
    return el;
}
