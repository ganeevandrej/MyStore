const containerPopular = document.querySelector(".slaider-container-Popular");

if (containerPopular !== null) {
    let positionPopular = 0;
    const slidesToShowPopular = 5;
    const slidesToScrollPopular = 1;
    const trackPopular = document.querySelector('.slaider-track-Popular');
    const btnPrevPopular = document.querySelector('.btn-prev-Popular');
    const btnNextPopular = document.querySelector('.btn-next-Popular');
    const itemsPopular = document.querySelectorAll('.slaider-item-Popular');
    const countItemsPopular = itemsPopular.length;

    const itemWidthPopular = (containerPopular.clientWidth / slidesToShowPopular);
    const movepositionPopular = slidesToScrollPopular * itemWidthPopular;

    itemsPopular.forEach((item) => {
        item.style.minWidth = itemWidthPopular + 'px';
    });

    btnPrevPopular.addEventListener('click', () => {
        positionPopular += movepositionPopular;
        trackPopular.style.transform = `translateX(${positionPopular}px)`;
        checkBtnsPopular();
    })

    btnNextPopular.addEventListener('click', () => {
        positionPopular -= movepositionPopular;
        trackPopular.style.transform = `translateX(${positionPopular}px)`;
        checkBtnsPopular();
    })

    const checkBtnsPopular = () => {
        btnPrevPopular.disabled = positionPopular === 0;
        btnNextPopular.disabled = positionPopular <= -(countItemsPopular - slidesToShowPopular) * itemWidthPopular;
    }

    checkBtnsPopular();
}



