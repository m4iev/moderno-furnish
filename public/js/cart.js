const itemStock = parseInt(document.getElementById("stok-barang").innerHTML);
const amountField = document.getElementById("jumlah");
const cartForm = document.getElementById("form-keranjang");

function increaseAmount() {
  if (amountField.value < itemStock) {
    amountField.value++;
  }
}

function decreaseAmount() {
  if (amountField.value > 1) {
    amountField.value--;
  }
}

function submitForm() {
  cartForm.submit();
}
