function getWishlistItems(){
    let items = Cookies.get("wishlist");
    if (items && items.length > 0){
        items = items.split(",");
    }
    else{
        items = [];
    }
    items = items.map(Number)
    return items;
}

function getCartItems(){
    let cart = Cookies.get("cart");
    if (cart){
        cart = JSON.parse(cart);
    }else{
        cart = {};
    }
    return cart;
}

function checkItemExistsInWishlist(product_id){
    let items = getWishlistItems();
    return items.includes(parseInt(product_id));
}

function changeWishlistText(product_id){
    const span = document.getElementById("addToWishlistText");
    if (checkItemExistsInWishlist(product_id)){
        span.innerHTML = "Remove from wishlist";
    }else{
        span.innerHTML = "Add to wishlist";
    }
}

function addNumbersToIcons() {
    let wishlistLength = getWishlistItems().length;
    if (wishlistLength > 0){
        document.getElementById("wishlistIcon").innerHTML = '<div class="bg-primary w-[15px] h-[15px] text-[10px] absolute rounded-full -right-2 -top-2">'+wishlistLength+'</div> <i class="iconify iconify-inline" data-icon="clarity:heart-line" ></i>';
    }else{
        document.getElementById("wishlistIcon").innerHTML = '<i class="iconify iconify-inline" data-icon="clarity:heart-line" ></i>';
    }

    let cartLength = Object.keys(getCartItems()).length;
    if (cartLength > 0){
        document.getElementById("cartIcon").innerHTML = '<div class="bg-primary w-[15px] h-[15px] text-[10px] absolute rounded-full -right-2 -top-2" >'+cartLength+'</div> <i class="iconify iconify-inline" data-icon="clarity:shopping-cart-line" > </i>';
    }else{
        document.getElementById("cartIcon").innerHTML = '<i class="iconify iconify-inline" data-icon="clarity:shopping-cart-line" > </i>';
    }
}

function addItemToCard(product_id, quantity){
    let cart = getCartItems();

    let newItem = true;
    for (const [index, item] of Object.entries(cart)) {
        if (parseInt(index) === parseInt(product_id) ){
            cart[product_id] = quantity;
            newItem = false;
        }
    }
    if (newItem){
        cart[product_id] = quantity;
    }

    Cookies.set("cart", JSON.stringify(cart));
    changeWishlistText(product_id);
    addNumbersToIcons();
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Product is added to Cart',
        showConfirmButton: false,
        timer: 1500
    });
}

function addOrRemoveItemToWishlist(product_id){
    product_id = parseInt(product_id);
    let items = getWishlistItems();
    let message = "Product is added to Wishlist";
    if (items.includes(product_id)) {
        items = items.filter(function(item) {
            return  parseInt(item) !== parseInt(product_id)
        });
        message = "Product is removed from Wishlist";

    }else{
        items.push(product_id);
    }
    Cookies.set("wishlist", items.join());
    changeWishlistText(product_id);
    addNumbersToIcons();
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: message,
        showConfirmButton: false,
        timer: 1500
    });
}

function getConsigneeAndAddressDetails(url){
    const checkoutDetails = {
        "name": document.getElementById("name").value,
        "surname": document.getElementById("surname").value,
        "email": document.getElementById("email").value,
        "phone": document.getElementById("phone").value,
        "address": document.getElementById("address").value,
        "address2": document.getElementById("address2").value,
        "area": document.getElementById("area").value,
        "state": document.getElementById("state").value,
        "country": document.getElementById("country").value,
    };
    Cookies.set("checkoutDetails", JSON.stringify(checkoutDetails));
    location.href = url;
}
