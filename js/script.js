
const prev = document.getElementById('prev-btn')
const next = document.getElementById('next-btn')
const list = document.getElementById('item-list')

const itemWidth = 150
const padding = 10

prev.addEventListener('click',()=>{
  list.scrollLeft -= itemWidth + padding
})

next.addEventListener('click',()=>{
  list.scrollLeft += itemWidth + padding
})

// global qty counter
let a = 1;

function setProductAmount() {
  var productPrice = parseFloat(document.getElementById('productPrice').textContent);
  document.getElementById('productAmount').textContent = productPrice * a * 1.25;
  console.log(a);
}

function qtyCounter() {
  num = document.querySelector(".num");
  itemCounter = document.getElementById("itm-cnt-bag");
  
  document.querySelector(".plus").addEventListener("click", ()=>{
    a++;
    num.innerText = (a < 10) ? "0" + a : a;
    itemCounter.innerText = a;
    setProductAmount();
  });

  document.querySelector(".minus").addEventListener("click", ()=>{
      if(a > 1) {
          a--;
          num.innerText = (a < 10) ? "0" + a : a;          
          itemCounter.innerText = a;
          setProductAmount();
      }
  });

  num.innerText = (a < 10) ? "0" + a : a;
  setProductAmount();
}
qtyCounter();

function modalQtyCounter() {
  plus = document.getElementById("modalPlus"),
  minus = document.getElementById("modalMinus"),
  num = document.getElementById("modalNum");

  plus.addEventListener("click", ()=>{
      a++;
      num.innerText = (a < 10) ? "0" + a : a;
      var productPrice = parseFloat(document.getElementById('productPrice').textContent);
      document.getElementById('modalProductAmount').textContent = productPrice * a * 1.25;
      console.log(a);
  });
  minus.addEventListener("click", ()=>{
      if(a > 1) {
          a--;
          num.innerText = (a < 10) ? "0" + a : a;
          var productPrice = parseFloat(document.getElementById('productPrice').textContent);
          document.getElementById('modalProductAmount').textContent = productPrice * a * 1.25;
          console.log(a);
      }
  });
}


  // Change Main Product Image on Thumbnail Click
  $('#item-list .item img').on('click', function(){
    var largeImgUrl = $(this).attr('src');
    $('#iproductmainimg').attr('src', largeImgUrl);
});

// update product amount
var productPrice = parseFloat(document.getElementById('productPrice').textContent);
var productQty = parseInt(document.getElementById('productQty').textContent);
document.getElementById('productAmount').textContent = productPrice * productQty * 1.25;
console.log(productPrice);
console.log(productQty);
console.log(productQty * productPrice * 1.25);


// Populate modal with product details
function afterModalOpen() {
  document.getElementById('modalProductImage').src = document.getElementById('iproductmainimg').getAttribute('src');
  document.getElementById('modalProductName').textContent = document.getElementById('productName').textContent;
  document.getElementById('modalProductSubtitle').textContent = document.getElementById('productSubtitle').textContent;

  // set size
  var getSelectedSize = document.querySelector( 'input[name="flexRadioDefault"]:checked');   
  if(getSelectedSize != null) {
    document.getElementById('modalProductSize').textContent = getSelectedSize.value;
  }

  // set qty
  document.getElementById('modalNum').textContent = parseFloat(document.getElementById('productQty').textContent);
  modalQtyCounter();
  var productQty = parseInt(document.getElementById('modalNum').textContent);
  document.getElementById('modalProductAmount').textContent = productPrice * productQty * 1.25;

  // set color
  var getSelectedColor = document.querySelector( 'input[name="color"]:checked');   
  if(getSelectedColor != null) {
    var parent = getSelectedColor.parentNode;
    document.getElementById('modalProductColor').classList = parent.classList;
    document.getElementById('modalProductColor').value = getSelectedColor.value;
  }
}

// Show the modal
const productModal = new bootstrap.Modal(document.getElementById('productModal'));
productModal.show();

function buyNow() {
  a = 1;
  qtyCounter();
  saveData();
}

function saveData() {
  // Extract data from HTML elements
  var imgPath = document.getElementById('modalProductImage').getAttribute('src');
  var qty = parseInt(document.getElementById('modalNum').textContent);
  var color = document.getElementById('modalProductColor').value;
  var size = document.getElementById('modalProductSize').textContent;

  // Create a form element
  var form = document.createElement('form');
  form.method = 'POST';
  form.action = 'set_data.php'; // PHP script to handle data

  // Create hidden input fields for the data
  var inputImgPath = document.createElement('input');
  inputImgPath.type = 'hidden';
  inputImgPath.name = 'imgPath';
  inputImgPath.value = imgPath;

  var inputQty = document.createElement('input');
  inputQty.type = 'hidden';
  inputQty.name = 'qty';
  inputQty.value = qty;

  var inputColor = document.createElement('input');
  inputColor.type = 'hidden';
  inputColor.name = 'color';
  inputColor.value = color;

  var inputSize = document.createElement('input');
  inputSize.type = 'hidden';
  inputSize.name = 'size';
  inputSize.value = size;

  // Append inputs to the form
  form.appendChild(inputImgPath);
  form.appendChild(inputQty);
  form.appendChild(inputColor);
  form.appendChild(inputSize);

  // Append the form to the document body (not visible to the user)
  document.body.appendChild(form);

  // Submit the form
  form.submit();
};
