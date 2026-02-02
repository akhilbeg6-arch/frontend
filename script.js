// const bar = document.getElementById('bar');
// const close = document.getElementById('close');
// const nav = document.getElementById('navbar');

// if(bar){
//     bar.addEventListener('click', () => {
//         nav.classList.add('active');  
//     })
// }

// if(close){
//     close.addEventListener('click', () => {
//         nav.classList.remove('active');  
//     })
// }


// function addToCart(name, price, image) {
//   let cart = JSON.parse(localStorage.getItem("cart")) || [];
//   let item = cart.find(p => p.name === name);

//   if (item) item.qty++;
//   else cart.push({ name, price, image, qty: 1 });

//   localStorage.setItem("cart", JSON.stringify(cart));
//   alert("Added: " + image);
// }






function addToCart(name, price, image) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // check if product already exists
  let existingProduct = cart.find(item => item.name === name);

  if (existingProduct) {
    existingProduct.qty += 1;
  } else {
    cart.push({
      name: name,
      price: price,
      image: image,
      qty: 1
    });
  }

  localStorage.setItem("cart", JSON.stringify(cart));
  alert("Product added to cart!");
}




