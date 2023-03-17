<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="CodeHim">
  <title>Product Page</title>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div style="max-width: 1500px; max-height: 1400px">
    <div>
      <?php
      include 'components/header.php';
      ?>
    </div>
    <main>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
            <h4 class="badge-pill badge-light mt-3 mb-3 p-2 text-center" style="background-color:aqua">Products</h4>
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                <div class="shadow-sm card mb-3 product">
                  <img class="product-img" src="./img/img1.jpg" alt="prd1" onmouseover="animateImg(this)" onmouseout="normalImg(this)" />
                  <div class="card-body">
                    <h5 class="card-title text-info bold product-name">Container</h5>
                    <p class="card-text text-success product-price">200 Rs.</p>
                    <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" data-action="add-to-cart">Add to cart</button>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                <div class="shadow-sm card mb-3 product">
                  <img class="product-img" src="./img/img2.jpg" alt="prd2" onmouseover="animateImg(this)" onmouseout="normalImg(this)" />
                  <div class="card-body">
                    <h5 class="card-title text-info product-name">Watter Bottle</h5>
                    <p class="card-text text-success product-price">3000 Rs.</p>
                    <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" data-action="add-to-cart">Add to cart</button>
                  </div>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                <div class="shadow-sm card mb-3 product">
                  <img class="product-img" src="./img/img3.jpg" alt="prd3" onmouseover="animateImg(this)" onmouseout="normalImg(this)" />
                  <div class="card-body">
                    <h5 class="card-title text-info product-name">Bath Combos</h5>
                    <p class="card-text text-success product-price">2000 Rs.</p>
                    <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" data-action="add-to-cart">Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                <div class="shadow-sm card mb-3 product">
                  <img class="product-img" src="./img/img4.jpg" alt="prd3" onmouseover="animateImg(this)" onmouseout="normalImg(this)" />
                  <div class="card-body">
                    <h5 class="card-title text-info product-name">Bath Combos Kit</h5>
                    <p class="card-text text-success product-price">2500 Rs.</p>
                    <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" data-action="add-to-cart">Add
                      to cart</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                <div class="shadow-sm card mb-3 product">
                  <img class="product-img" src="./img/img5.jpg" alt="prd3" onmouseover="animateImg(this)" onmouseout="normalImg(this)" />
                  <div class="card-body">
                    <h5 class="card-title text-info product-name">Choker Necklace</h5>
                    <p class="card-text text-success product-price">4000 Rs.</p>
                    <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" data-action="add-to-cart">Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                <div class="shadow-sm card mb-3 product">
                  <img class="product-img" src="./img/img6.jpg" alt="prd3" onmouseover="animateImg(this)" onmouseout="normalImg(this)" />
                  <div class="card-body">
                    <h5 class="card-title text-info product-name">Choker</h5>
                    <p class="card-text text-success product-price">2000 Rs.</p>
                    <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" data-action="add-to-cart">Add
                      to cart</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                <div class="shadow-sm card mb-3 product">
                  <img class="product-img" src="./img/img7.jpg" alt="prd3" onmouseover="animateImg(this)" onmouseout="normalImg(this)" />
                  <div class="card-body">
                    <h5 class="card-title text-info product-name">Necklace</h5>
                    <p class="card-text text-success product-price">5000 Rs.</p>
                    <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" data-action="add-to-cart">Add to cart</button>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
                <div class="shadow-sm card mb-3 product">
                  <img class="product-img" src="./img/img8.jpg" alt="prd3" onmouseover="animateImg(this)" onmouseout="normalImg(this)" />
                  <div class="card-body">
                    <h5 class="card-title text-info product-name">Mobile</h5>
                    <p class="card-text text-success product-price">10200 Rs.</p>
                    <button class="btn badge badge-pill badge-secondary mt-2 float-right" type="button" data-action="add-to-cart">Add
                      to cart</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
            <h4 class="badge-pill badge-light mt-3 mb-3 p-2 text-center" style="background-color:aqua;">Cart</h4>
            <div class="cart"></div>
          </div>
        </div>
      </div>

    </main>
  </div>




  <script>
    "use strict";
    let cart = [];
    let cartTotal = 0;
    const cartDom = document.querySelector(".cart");
    const addtocartbtnDom = document.querySelectorAll('[data-action="add-to-cart"]');

    addtocartbtnDom.forEach(addtocartbtnDom => {
      addtocartbtnDom.addEventListener("click", () => {
        const productDom = addtocartbtnDom.parentNode.parentNode;
        const product = {
          img: productDom.querySelector(".product-img").getAttribute("src"),
          name: productDom.querySelector(".product-name").innerText,
          price: productDom.querySelector(".product-price").innerText,
          quantity: 1
        };

        const IsinCart = cart.filter(cartItem => cartItem.name === product.name).length > 0;
        if (IsinCart === false) {
          cartDom.insertAdjacentHTML("beforeend", `
  <div class="d-flex flex-row shadow-sm card cart-items mt-2 mb-3 animated flipInX">
    <div class="p-2">
        <img src="${product.img}" alt="${product.name}" style="max-width: 50px;"/>
    </div>
    <div class="p-2 mt-3">
        <p class="text-info cart_item_name">${product.name}</p>
    </div>
    <div class="p-2 mt-3">
        <p class="text-success cart_item_price">${product.price}</p>
    </div>
    <div class="p-2 mt-3 ml-auto">
        <button class="btn badge badge-secondary" type="button" data-action="increase-item">&plus;
    </div>
    <div class="p-2 mt-3">
      <p class="text-success cart_item_quantity">${product.quantity}</p>
    </div>
    <div class="p-2 mt-3">
      <button class="btn badge badge-info" type="button" data-action="decrease-item">&minus;
    </div>
    <div class="p-2 mt-3">
      <button class="btn badge badge-danger" type="button" data-action="remove-item">&times;
    </div>
  </div> `);

          if (document.querySelector('.cart-footer') === null) {
            cartDom.insertAdjacentHTML("afterend", `
      <div class="d-flex flex-row shadow-sm card cart-footer mt-2 mb-3 animated flipInX">
        <div class="p-2">
          <button class="btn badge-danger" type="button" data-action="clear-cart">Clear Cart
        </div>
        <div class="p-2 ml-auto">
          <button class="btn badge-dark" type="button" data-action="check-out">Pay <span class="pay"></span> 
            &#10137;
        </div>
      </div>`);
          }

          addtocartbtnDom.innerText = "In cart";
          addtocartbtnDom.disabled = true;
          cart.push(product);

          const cartItemsDom = cartDom.querySelectorAll(".cart-items");
          cartItemsDom.forEach(cartItemDom => {

            if (cartItemDom.querySelector(".cart_item_name").innerText === product.name) {

              cartTotal += parseInt(cartItemDom.querySelector(".cart_item_quantity").innerText) *
                parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
              document.querySelector('.pay').innerText = cartTotal + " Rs.";

              // increase item in cart
              cartItemDom.querySelector('[data-action="increase-item"]').addEventListener("click", () => {
                cart.forEach(cartItem => {
                  if (cartItem.name === product.name) {
                    cartItemDom.querySelector(".cart_item_quantity").innerText = ++cartItem.quantity;
                    cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
                      parseInt(cartItem.price) + " Rs.";
                    cartTotal += parseInt(cartItem.price)
                    document.querySelector('.pay').innerText = cartTotal + " Rs.";
                  }
                });
              });

              // decrease item in cart
              cartItemDom.querySelector('[data-action="decrease-item"]').addEventListener("click", () => {
                cart.forEach(cartItem => {
                  if (cartItem.name === product.name) {
                    if (cartItem.quantity > 1) {
                      cartItemDom.querySelector(".cart_item_quantity").innerText = --cartItem.quantity;
                      cartItemDom.querySelector(".cart_item_price").innerText = parseInt(cartItem.quantity) *
                        parseInt(cartItem.price) + " Rs.";
                      cartTotal -= parseInt(cartItem.price)
                      document.querySelector('.pay').innerText = cartTotal + " Rs.";
                    }
                  }
                });
              });

              //remove item from cart
              cartItemDom.querySelector('[data-action="remove-item"]').addEventListener("click", () => {
                cart.forEach(cartItem => {
                  if (cartItem.name === product.name) {
                    cartTotal -= parseInt(cartItemDom.querySelector(".cart_item_price").innerText);
                    document.querySelector('.pay').innerText = cartTotal + " Rs.";
                    cartItemDom.remove();
                    cart = cart.filter(cartItem => cartItem.name !== product.name);
                    addtocartbtnDom.innerText = "Add to cart";
                    addtocartbtnDom.disabled = false;
                  }
                  if (cart.length < 1) {
                    document.querySelector('.cart-footer').remove();
                  }
                });
              });

              //clear cart
              document.querySelector('[data-action="clear-cart"]').addEventListener("click", () => {
                cartItemDom.remove();
                cart = [];
                cartTotal = 0;
                if (document.querySelector('.cart-footer') !== null) {
                  document.querySelector('.cart-footer').remove();
                }
                addtocartbtnDom.innerText = "Add to cart";
                addtocartbtnDom.disabled = false;
              });

              document.querySelector('[data-action="check-out"]').addEventListener("click", () => {
                if (document.getElementById('paypal-form') === null) {
                  checkOut();
                }
              });
            }
          });
        }
      });
    });

    function animateImg(img) {
      img.classList.add("animated", "shake");
    }

    function normalImg(img) {
      img.classList.remove("animated", "shake");
    }

    function checkOut() {
      let paypalHTMLForm = `
  <form id="paypal-form" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="upload" value="1">
    <input type="hidden" name="business" value="gmanish478@gmail.com">
    <input type="hidden" name="currency_code" value="INR">`;

      cart.forEach((cartItem, index) => {
        ++index;
        paypalHTMLForm += ` <input type="hidden" name="item_name_${index}" value="${cartItem.name}">
    <input type="hidden" name="amount_${index}" value="${cartItem.price.replace("Rs.","")}">
    <input type="hidden" name="quantity_${index}" value="${cartItem.quantity}">`;
      });

      paypalHTMLForm += `<input type="submit" value="PayPal" class="paypal">
  </form><div class="overlay">Please wait...</div>`;
      document.querySelector('body').insertAdjacentHTML("beforeend", paypalHTMLForm);
      document.getElementById("paypal-form").submit();
    }
  </script>


</body>

</html>