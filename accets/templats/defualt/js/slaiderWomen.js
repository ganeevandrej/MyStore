const container = document.querySelector(".slaider-container-Wumen");

if (container !== null) {
    let position = 0;
    const slidesToShow = 5;
    const slidesToScroll = 1;
    const track = document.querySelector('.slaider-track-Wumen');
    const btnPrev = document.querySelector('.btn-prev-Wumen');
    const btnNext = document.querySelector('.btn-next-Wumen');
    const itemsWumen = document.querySelectorAll('.slaider-item-Wumen');
    const countItemsWumen = itemsWumen.length;

    const itemWidth = container.clientWidth / slidesToShow;
    const movePosition = slidesToScroll * itemWidth;

    itemsWumen.forEach((item) => {
        item.style.minWidth = itemWidth + 'px';
    });

    btnPrev.addEventListener('click', () => {
        position = position + movePosition;
        track.style.transform = `translateX(${position}px)`;
        checkBtns();
    })

    btnNext.addEventListener('click', () => {
        position = position - movePosition;
        track.style.transform = `translateX(${position}px)`;
        checkBtns();
    })

    const checkBtns = () => {
        btnPrev.disabled = position === 0;
        btnNext.disabled = position <= -(countItemsWumen - slidesToShow) * itemWidth;
    }

    checkBtns();
}

