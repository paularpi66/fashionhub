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


const plus = document.querySelector(".plus"),
minus = document.querySelector(".minus"),
num = document.querySelector(".num");

let a = 1;
plus.addEventListener("click", ()=>{
    a++;
    a = (a < 10) ? "0" + a : a;
    num.innerText = a;
    console.log(a);
});
minus.addEventListener("click", ()=>{
    if(a > 0) {
        a--;
        a = (a < 10) ? "0" + a : a;
        num.innerText = a;
        console.log(a);
    }
});

  // Change Main Product Image on Thumbnail Click
  $('#item-list .item img').on('click', function(){
    var largeImgUrl = $(this).attr('src');
    $('#iproductmainimg').attr('src', largeImgUrl);
});

