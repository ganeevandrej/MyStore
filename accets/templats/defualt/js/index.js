const checkCheckBox = () => {
    elem = document.getElementById('userCheck');

    if (elem.checked) {
        document.getElementById('checkBlock').classList.remove('hiden');
    }
    else
        document.getElementById('checkBlock').classList.add('hiden');
}

const timeElem = (elem) => {
    setTimeout(function () {
        elem.classList.add('hiden');
    }, 2000);
}

const addToCart = (id, user) => {
    if (user) {
        fetch("http://myshop/cart/addtocart/" + id + "/")
            .then(response => response.json())
            .then((result) => {
                if (result['success']) {
                    document.getElementById('countCart').innerHTML = result['countItem'];
                    document.getElementById('addCart_' + id).classList.add('hiden');
                    document.getElementById('removeCart_' + id).classList.remove('hiden');
                    document.getElementById('textBlockOk').innerHTML = 'Товар добавлен в корзину';
                    document.getElementById('recoveryBlockOk').classList.remove('hiden');
                    let elem = document.getElementById('recoveryBlockOk');
                    timeElem(elem);
                }
            })
    }
    else alert('Зарегестрируйтесь или войдите в систему');
}

const addToCartFromHome = (id, user) => {

    if (user) {
        fetch("http://myshop/cart/addtocart/" + id + "/")
            .then(response => response.json())
            .then((result) => {
                if (result['success']) {
                    document.getElementById('countCart').innerHTML = result['countItem'];
                    document.getElementById('infoAddCart_' + id).classList.add('hiden');
                    document.getElementById('infoRemoveCart_' + id).classList.remove('hiden');
                    document.getElementById('textBlockOk').innerHTML = 'Товар добавлен в корзину';
                    document.getElementById('recoveryBlockOk').classList.remove('hiden');
                    let elem = document.getElementById('recoveryBlockOk');
                    timeElem(elem);
                }
            })
    }
    else alert('Зарегестрируйтесь или войдите в систему');
}

const toggleLike = (id, user) => {

    let elem1 = document.getElementById('like_' + id).classList.contains('hiden');

    if (user) {

        if (!elem1) {
            fetch("http://myshop/like/addtolike/" + id + "/")
                .then(response => response.json())
                .then((result) => {
                    if (result['success']) {
                        document.getElementById('countLike').innerHTML = result['countItem'];
                        document.getElementById('like_' + id).classList.add('hiden');
                        document.getElementById('active_like_' + id).classList.remove('hiden');
                        document.getElementById('textBlockOk').innerHTML = 'Товар добавлен в избранное';
                        document.getElementById('recoveryBlockOk').classList.remove('hiden');
                        let elem = document.getElementById('recoveryBlockOk');
                        timeElem(elem);
                    }
                })
        }
        else {
            fetch("http://myshop/like/removefromlike/" + id + "/")
                .then(response => response.json())
                .then((result) => {
                    if (result['success']) {
                        document.getElementById('countLike').innerHTML = result['countItem'];
                        document.getElementById('active_like_' + id).classList.add('hiden');
                        document.getElementById('like_' + id).classList.remove('hiden');
                        document.getElementById('textBlockNo').innerHTML = 'Товар удален из избранное';
                        document.getElementById('recoveryBlockNo').classList.remove('hiden');
                        let elem = document.getElementById('recoveryBlockNo');
                        timeElem(elem);
                    }
                })
        }
    }
    else alert('Зарегестрируйтесь или войдите в систему');
}

const removeFromCartHome = (id, user) => {

    if (user) {
        fetch("http://myshop/cart/removefromcart/" + id + "/")
            .then(response => response.json())
            .then((result) => {
                if (result['success']) {
                    document.getElementById('countCart').innerHTML = result['countItem'];
                    document.getElementById('infoRemoveCart_' + id).classList.add('hiden');
                    document.getElementById('infoAddCart_' + id).classList.remove('hiden');
                    document.getElementById('textBlockNo').innerHTML = 'Товар удален из корзины';
                    document.getElementById('recoveryBlockNo').classList.remove('hiden');
                    let elem = document.getElementById('recoveryBlockNo');
                    timeElem(elem);
                }

            })
    }
    else alert('Зарегестрируйтесь или войдите в систему');
}

const removeFromCart = (id, user) => {

    if (user) {
        fetch("http://myshop/cart/removefromcart/" + id + "/")
            .then(response => response.json())
            .then((result) => {
                if (result['success']) {
                    document.getElementById('countCart').innerHTML = result['countItem'];
                    document.getElementById('removeCart_' + id).classList.add('hiden');
                    document.getElementById('addCart_' + id).classList.remove('hiden');
                    document.getElementById('textBlockNo').innerHTML = 'Товар удален из корзины';
                    document.getElementById('recoveryBlockNo').classList.remove('hiden');
                    let elem = document.getElementById('recoveryBlockNo');
                    timeElem(elem);
                }
            })
    }
    else alert('Зарегестрируйтесь или войдите в систему');
}

const removeFromCartPage = (id, user) => {

    if (user) {
        fetch("http://myshop/cart/removefromcart/" + id + "/")
            .then(response => response.json())
            .then((result) => {
                if (result['success']) {
                    document.getElementById('countCart').innerHTML = result['countItem'];
                }

                document.getElementById('itemCart_' + id).remove();
                console.log(result['countItem']);
                if (result['countItem'] === 0) {
                    document.getElementById('cartNull').classList.remove('hiden');
                }
                totalPrice();
            })
    }
    else alert('Зарегестрируйтесь или войдите в систему');
}

const removeFromlikePage = (id, user) => {

    if (user) {
        fetch("http://myshop/like/removefromlike/" + id + "/")
            .then(response => response.json())
            .then((result) => {
                if (result['success']) {
                    document.getElementById('countLike').innerHTML = result['countItem'];
                    document.getElementById('itemLike_' + id).remove();
                    if (result['countItem'] === 0) {
                        document.getElementById('likeNull').classList.remove('hiden');
                    }
                }
            })
    }
    else alert('Зарегестрируйтесь или войдите в систему');
}

const countPrice = (id) => {
    let p = document.getElementById('inputCount_' + id).value;
    let c = document.getElementById('cartPrice_' + id).getAttribute('value');

    let result = p * c;

    document.getElementById('totalPrice_' + id).innerHTML = result;
    document.getElementById('totalPrice_' + id).setAttribute('value', result);
    totalPrice();
}

const totalPrice = () => {
    let totalprice = document.getElementsByClassName('total-price');
    console.log(totalprice);

    if ((totalprice.length) > 0) {
        let sum = 0;

        for (let i = 0; i < totalprice.length; i++) {
            sum += +(totalprice[i].getAttribute('value'));
        }

        document.getElementById('totalAmount').innerHTML = sum + '.00 ₽';
    }
    else {
        document.getElementById('cartBlock').style.display = 'none';
        document.getElementById('cartNull').style.display = 'block';
    }


}

const increment = (id) => {
    let input = document.getElementById('inputCount_' + id).value;
    input++;
    document.querySelector('.inputCount_' + id).innerHTML = input;

    if (input > 1) {
        document.getElementById('decrement_' + id).disabled = false;
    }

    document.getElementById('inputCount_' + id).value = input;
    countPrice(id);

}

const decrement = (id) => {
    let input = document.getElementById('inputCount_' + id).value;
    input--;
    document.querySelector('.inputCount_' + id).innerHTML = input;

    if (input <= 1) {
        document.getElementById('decrement_' + id).disabled = true;
    }

    document.getElementById('inputCount_' + id).value = input;
    countPrice(id);
}

const checkedCallok = () => {
    if (!document.querySelector('#self').checked === true) {
        document.querySelector('#self').checked = true;
        document.querySelector('#delivery').innerHTML = 0;
        let elemDelivery = document.querySelector('#inpTitlePrice').value;
        elemDelivery = +elemDelivery - +300;
        console.log(elemDelivery);
        document.querySelector('#titlePrice').innerHTML = elemDelivery;
        document.querySelector('#inpTitlePrice').value = elemDelivery;
    }
}

const checkedCalldel = () => {
    if (!document.querySelector('#courier').checked === true) {
        document.querySelector('#courier').checked = true;
        document.querySelector('#delivery').innerHTML = 300;
        let elemDelivery = document.querySelector('#inpTitlePrice').value;
        elemDelivery = +elemDelivery + +300;
        console.log(elemDelivery);
        document.querySelector('#titlePrice').innerHTML = elemDelivery;
        document.querySelector('#inpTitlePrice').value = elemDelivery;
    }
}

const messageok = (message) => {
    console.log(message);
    alert(message);
}

const togleLikeFromProsuct = (id, user) => {
    debugger
    let elem1 = document.getElementById('productLikeOk_' + id).classList.contains('hiden');

    if (user) {
        if (!elem1) {
            fetch("http://myshop/like/addtolike/" + id + "/")
                .then(response => response.json())
                .then((result) => {
                    if (result['success']) {
                        document.getElementById('countLike').innerHTML = result['countItem'];
                        document.getElementById('productLikeOk_' + id).classList.add('hiden');
                        document.getElementById('productLikeNo_' + id).classList.remove('hiden');
                        document.getElementById('textBlockOk').innerHTML = 'Товар добавлен в избранное';
                        document.getElementById('recoveryBlockOk').classList.remove('hiden');
                        let elem = document.getElementById('recoveryBlockOk');
                        timeElem(elem);
                    }
                })
        }
        else {
            fetch("http://myshop/like/removefromlike/" + id + "/")
                .then(response => response.json())
                .then((result) => {
                    if (result['success']) {
                        document.getElementById('countLike').innerHTML = result['countItem'];
                        document.getElementById('productLikeNo_' + id).classList.add('hiden');
                        document.getElementById('productLikeOk_' + id).classList.remove('hiden');
                        document.getElementById('textBlockNo').innerHTML = 'Товар удален из избранное';
                        document.getElementById('recoveryBlockNo').classList.remove('hiden');
                        let elem = document.getElementById('recoveryBlockNo');
                        timeElem(elem);
                    }
                })
        }
    }
    else alert('Зарегестрируйтесь или войдите в систему');
}

const reColor = (name) => {
    elem = document.querySelector('#' + name);
    elem.classList.toggle('btn-recolor');
}

const description = () => {
    document.querySelector('.description-text').classList.remove('hiden');
    document.querySelector('.setting-product').classList.add('hiden');
    document.querySelector('.reviews-product').classList.add('hiden');
}

const setting = () => {
    document.querySelector('.description-text').classList.add('hiden');
    document.querySelector('.setting-product').classList.remove('hiden');
    document.querySelector('.reviews-product').classList.add('hiden');
}

const reviews = () => {
    document.querySelector('.description-text').classList.add('hiden');
    document.querySelector('.setting-product').classList.add('hiden');
    document.querySelector('.reviews-product').classList.remove('hiden');
}

// const open = (categories) => {
//     debugger
//     let elem = document.getElementById('form');
//     // elem.addEventListener('change', function(){
//     //     elem.submit(categories);
//     // });
// }

let elem = document.getElementById('form');
    console.log(elem);
    elem.addEventListener('change', function(){
        elem.submit();
    });