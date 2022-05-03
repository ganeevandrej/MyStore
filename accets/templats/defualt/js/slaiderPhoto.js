const containerPhoto = document.querySelector(".slaider-container-Photo");

if (containerPhoto !== null) {
    let positionPhoto = 0;
    const slidesToShowPhoto = 1;
    const slidesToScrollPhoto = 1;
    const trackPhoto = document.querySelector('.slaider-track-Photo');
    const btnPrevPhoto = document.querySelector('.btn-prev-Photo');
    const btnNextPhoto = document.querySelector('.btn-next-Photo');
    const itemsPhoto = document.querySelectorAll('.slaider-item-Photo');
    const countItemsPhoto = itemsPhoto.length;

    const itemWidthPhoto = containerPhoto.clientWidth / slidesToShowPhoto;
    const movepositionPhoto = slidesToScrollPhoto * itemWidthPhoto;

    itemsPhoto.forEach((item) => {
        item.style.minWidth = itemWidthPhoto + 'px';
    });

    btnPrevPhoto.addEventListener('click', () => {
        positionPhoto += movepositionPhoto;
        trackPhoto.style.transform = `translateX(${positionPhoto}px)`;
        checkBtnsPhoto();
    })

    btnNextPhoto.addEventListener('click', () => {
        positionPhoto -= movepositionPhoto;
        trackPhoto.style.transform = `translateX(${positionPhoto}px)`;
        checkBtnsPhoto();
    })

    const checkBtnsPhoto = () => {
        btnPrevPhoto.disabled = positionPhoto === 0;
        btnNextPhoto.disabled = positionPhoto <= -(countItemsPhoto - slidesToShowPhoto) * itemWidthPhoto;
    }

    checkBtnsPhoto();
}
