const addToCart = (id) => {
    fetch("http://myshop/cart/addtocart/" + id + "/") 
    .then(response => response.json())
    .then((result) => {
        if (result['success']) {
            console.log(result);
            document.getElementById('cartCountItems').innerHTML = result['countItem'];
        }
        else {
            console.log(result);
            document.getElementById('addCart_' + id).style.display = 'block';
            document.getElementById('removeCart_' + id).style.display = 'none';
        }
    })
}

const removeToCart = (id) => {
    return true;
}