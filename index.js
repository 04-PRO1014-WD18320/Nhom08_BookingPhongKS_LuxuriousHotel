let index = 0;

function aotoSlide(){
    let image = document.getElementsByClassName('mySlide');
    if (index >= image.length) {
        index =0;
    }
    for(let i = 0; i< image.length; i++){
        image[i].style.display = 'none';
    }
    image[index].style.display = 'block';
    index++;
    aotoimage = setTimeout(aotoSlide,2000);
}
aotoSlide();




const favoriteIcons = document.querySelectorAll('.fa-heart');
favoriteIcons.forEach(icon => {
  icon.addEventListener('click', () => {
    if (icon.classList.contains('favorite')) {
      // Nếu đã được yêu thích (màu đỏ), thực hiện xóa khỏi yêu thích
      icon.style.color = ''; // Trở lại màu gốc
      icon.classList.remove('favorite'); // Xóa class 'favorite'
      // Hiển thị thông báo xóa khỏi yêu thích
      swal({
        title: "Đã xóa khỏi yêu thích!",
        text: "Bạn đã xóa phòng khỏi mục Yêu thích.",
        icon: "success",
      });
    } else {
      // Nếu chưa được yêu thích, thực hiện thêm vào yêu thích
      icon.style.color = 'red'; // Đặt màu đỏ
      icon.classList.add('favorite'); // Thêm class 'favorite'
      // Hiển thị thông báo thêm vào yêu thích
      swal({
        title: "Tuyệt!",
        text: "Bạn đã thêm phòng vào mục Yêu thích!",
        icon: "success",
      });
    }
  });
});


function myNut() {
  let email = document.getElementById('email');
  let regexEmail = /^\b[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b$/;
  let checkEmail = regexEmail.test(email.value);
  if (email.value === "" || email.value === null) {
      alert("Vui lòng nhập Email");
  } else if (!checkEmail) {
      alert('Email không hợp lệ');
  }
}