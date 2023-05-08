document.querySelectorAll('.imagen-container img').forEach( imagen => {
    imagen.addEventListener('click', () => {
        document.querySelector('.popup-imagen').style.display = 'block';
        document.querySelector('.modal-imagen img').style.display = 'block';
        document.querySelector('.modal-imagen img').src = imagen.getAttribute('src');
        document.querySelector('body').style.overflowY = 'hidden';
    });
});

document.querySelector('.popup-imagen span').onclick = () => {
    document.querySelector('.popup-imagen').style.display = 'none';
    document.querySelector('.modal-imagen img').style.display = 'none';
    document.querySelector('body').style.overflowY = 'scroll';
}
