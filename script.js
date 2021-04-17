




Array.from(document.querySelectorAll(".navigation-button")).forEach(item => {
  item.onclick = () => {
    item.parentElement.parentElement.classList.toggle("change");
  };
});

Array.from(document.querySelectorAll(".card-button")).forEach(item => {
  item.onclick = () => {
    location.href="booking.html";
  }
})

Array.from(document.querySelectorAll(".btn btn-finish btn-fill btn-danger btn-wd")).forEach(item => {
  item.onclick = () => {
    location.href = "index.html";
  }
})