const addToCart = (id) => {
    fetch("http://myshop/cart/addtocart/" + id + "/") 
    .then(response => response.json())
    .then((result) => {
        if (result['success']) {
            document.getElementById('countCart').innerHTML = result['countItem'];
            document.getElementById('addCart_' + id).classList.add('hiden');
            document.getElementById('removeCart_' + id).classList.remove('hiden');
        }
    })
}

const addToCartFromHome = (id) => {
    fetch("http://myshop/cart/addtocart/" + id + "/") 
    .then(response => response.json())
    .then((result) => {
        if (result['success']) {
            document.getElementById('countCart').innerHTML = result['countItem'];
            document.getElementById('infoAddCart_' + id).classList.add('hiden');
            document.getElementById('infoRemoveCart_' + id).classList.remove('hiden');
        }
    })
}

const toggleLike = (id) => {
    
    let elem1 = document.getElementById('like_' + id).classList.contains('hiden');

    if (!elem1) {
        fetch("http://myshop/like/addtolike/" + id + "/") 
            .then(response => response.json())
            .then((result) => {
                if (result['success']) {
                    document.getElementById('countLike').innerHTML = result['countItem'];
                    document.getElementById('like_' + id).classList.add('hiden');
                    document.getElementById('active_like_' + id).classList.remove('hiden');
                }
                else{
                   alert('Не удалось добавить товар в избранное'); 
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
                }
                else{
                    alert('Не удалось удалить товар из избранное'); 
                 }
            })
    }
    
}

const removeFromCartHome = (id) => {
    fetch("http://myshop/cart/removefromcart/" + id + "/") 
    .then(response => response.json())
    .then((result) => {
        if (result['success']) {
            document.getElementById('countCart').innerHTML = result['countItem'];
            document.getElementById('infoRemoveCart_' + id).classList.add('hiden');
            document.getElementById('infoAddCart_' + id).classList.remove('hiden');
        }
        
    })
}

const removeFromCart = (id) => {
    fetch("http://myshop/cart/removefromcart/" + id + "/") 
    .then(response => response.json())
    .then((result) => {
        if (result['success']) {
            document.getElementById('countCart').innerHTML = result['countItem'];
            document.getElementById('removeCart_' + id).classList.add('hiden');
            document.getElementById('addCart_' + id).classList.remove('hiden');
        }
    })
}

const removeFromCartPage = (id) => {
    fetch("http://myshop/cart/removefromcart/" + id + "/") 
    .then(response => response.json())
    .then((result) => {
        if (result['success']) {
            document.getElementById('countCart').innerHTML = result['countItem'];
        }

        document.getElementById('itemCart_' + id).remove();
        console.log(result['countItem']);
        if(result['countItem'] === 0) {
            document.getElementById('cartNull').classList.remove('hiden');
        }
        totalPrice();
    })
}

const removeFromlikePage = (id) => {
    fetch("http://myshop/like/removefromlike/" + id + "/") 
    .then(response => response.json())
    .then((result) => {
        if (result['success']) {
            document.getElementById('countLike').innerHTML = result['countItem'];
            document.getElementById('itemLike_' + id).remove();
            if(result['countItem'] === 0) {
                document.getElementById('likeNull').classList.remove('hiden');
            }
        }

        
        
    })
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

    if((totalprice.length) > 0) {
        let sum = 0;
        
        for (let i=0; i<totalprice.length; i++) {
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

    if (input > 1) {
        document.getElementById('decrement_' + id).disabled = false;
    }

    document.getElementById('inputCount_' + id).value = input;
    countPrice(id);

}

const decrement = (id) => {
    let input = document.getElementById('inputCount_' + id).value;
    input--;

    if (input <= 1) {
        document.getElementById('decrement_' + id).disabled = true;
    }

    document.getElementById('inputCount_' + id).value = input; 
    countPrice(id);
}