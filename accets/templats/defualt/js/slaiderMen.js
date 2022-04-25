const containerMen = document.querySelector(".slaider-container-Men");

if (containerMen !== null) {
    let positionMen = 0;
    const slidesToShowMen = 5;
    const slidesToScrollMen = 1;
    const trackMen = document.querySelector('.slaider-track-Men');
    const btnPrevMen = document.querySelector('.btn-prev-Men');
    const btnNextMen = document.querySelector('.btn-next-Men');
    const itemsMen = document.querySelectorAll('.slaider-item-Men');
    const countItemsMen = itemsMen.length;

    const itemWidthMen = containerMen.clientWidth / slidesToShowMen;
    const movepositionMen = slidesToScrollMen * itemWidthMen;

    itemsMen.forEach((item) => {
        item.style.minWidth = itemWidthMen + 'px';
    });

    btnPrevMen.addEventListener('click', () => {
        positionMen += movepositionMen;
        trackMen.style.transform = `translateX(${positionMen}px)`;
        checkBtnsMen();
    })

    btnNextMen.addEventListener('click', () => {
        positionMen -= movepositionMen;
        trackMen.style.transform = `translateX(${positionMen}px)`;
        checkBtnsMen();
    })

    const checkBtnsMen = () => {
        btnPrevMen.disabled = positionMen === 0;
        btnNextMen.disabled = positionMen <= -(countItemsMen - slidesToShowMen) * itemWidthMen;
    }

    checkBtnsMen();
}

