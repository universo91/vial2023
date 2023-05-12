document.querySelectorAll('.imagen-container img').forEach( imagen => {
    imagen.addEventListener('click', () => {
        document.querySelector('.popup-imagen').style.display = 'block';
        document.querySelector('.modal-imagen').style.display = 'block';
        document.querySelector('.modal-imagen img').style.display = 'block';
        document.querySelector('.modal-imagen img').src = imagen.getAttribute('src');
        window.scrollTo(0,0)
        document.querySelector('body').style.overflowY = 'hidden';
    });
});

document.querySelector('.modal-imagen span').onclick = () => {
    document.querySelector('.popup-imagen').style.display = 'none';
    document.querySelector('.modal-imagen img').style.display = 'none';
    document.querySelector('.modal-imagen').style.display = 'none';
    document.querySelector('body').style.overflowY = 'scroll';
}

document.querySelector('.popup-imagen').onclick = () => {
    document.querySelector('.popup-imagen').style.display = 'none';
    document.querySelector('.modal-imagen img').style.display = 'none';
    document.querySelector('.modal-imagen').style.display = 'none';
    document.querySelector('body').style.overflowY = 'scroll';
}
