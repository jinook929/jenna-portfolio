const cityImg = document.querySelectorAll(".city-img");
const cityName = document.querySelectorAll(".city-name");

for(let i = 0; i < cityImg.length; i++) {
  cityImg[i].addEventListener("mouseenter", function(){
    cityImg[i].style.transform = "rotate(1deg)";
    cityName[i].style.color = "#ff9735";
  })
}

for(let i = 0; i < cityImg.length; i++) {
  cityImg[i].addEventListener("mouseleave", function(){
    cityImg[i].style.transform = "rotate(0deg)";
    cityName[i].style.color = "#555";
  })
}
