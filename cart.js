let cart = JSON.parse(localStorage.getItem("cart")) || [];
let cartItems = document.getElementById("cart-items");
let grandTotal = 0;


cart.forEach((item, index) => {
  let total = item.price * item.qty;
  grandTotal += total;

  cartItems.innerHTML += `
    <tr>
      <td>
        <img src="${item.image}" width="50" />
        ${item.name}
      </td>
      <td>&#8377;${item.price}</td>
      <td>${item.qty}</td>
      <td>&#8377;${total}</td>
      <td>
        <button onclick="removeItem(${index})">X</button>
      </td>
    </tr>
  `;
});

document.getElementById("grand-total").innerText =
  "Grand Total: \u20B9" + grandTotal;

  

function removeItem(index) {
  cart.splice(index, 1);
  localStorage.setItem("cart", JSON.stringify(cart));
  location.reload();
}


