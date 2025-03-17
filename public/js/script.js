let nextDom = document.getElementById("next");
let prevDom = document.getElementById("prev");

let carouselDom = document.querySelector(".carousel");
let SliderDom = carouselDom.querySelector(".carousel .list");
let thumbnailBorderDom = document.querySelector(".carousel .thumbnail");
let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll(".item");
let timeDom = document.querySelector(".carousel .time");

thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);

let timeRunning = 3000;
let timeAutoNext = 7000; // Délai avant le défilement automatique

let runTimeOut;
let runNextAuto = setTimeout(() => {
  nextDom.click(); // Déclencher le défilement automatique
}, timeAutoNext);

// Fonction pour déplacer le carrousel
function showSlider(type) {
  let SliderItemsDom = SliderDom.querySelectorAll(".carousel .list .item");
  let thumbnailItemsDom = document.querySelectorAll(
    ".carousel .thumbnail .item"
  );

  if (type === "next") {
    // Déplacer le premier élément à la fin
    SliderDom.appendChild(SliderItemsDom[0]);
    thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
    carouselDom.classList.add("next");
  } else {
    // Déplacer le dernier élément au début
    SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
    thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
    carouselDom.classList.add("prev");
  }

  // Réinitialiser le délai d'animation
  clearTimeout(runTimeOut);
  runTimeOut = setTimeout(() => {
    carouselDom.classList.remove("next");
    carouselDom.classList.remove("prev");
  }, timeRunning);

  // Réinitialiser le défilement automatique
  clearTimeout(runNextAuto);
  runNextAuto = setTimeout(() => {
    nextDom.click();
  }, timeAutoNext);
}

// Événements pour les boutons
nextDom.onclick = function () {
  showSlider("next");
};

prevDom.onclick = function () {
  showSlider("prev");
};


//NOS PRODUITS CAROUSSEL
document.addEventListener("DOMContentLoaded", function () {
  const carousel = document.querySelector(".product-carousel");
  const prevButton = document.getElementById("prev-product");
  const nextButton = document.getElementById("next-product");
  const productItems = document.querySelectorAll(".product-item");
  let currentIndex = 0;
  const itemsToShow = 3;

  function updateCarousel() {
    const offset = -currentIndex * (100 / itemsToShow);
    carousel.style.transform = `translateX(${offset}%)`;
  }

  let autoScroll;

  function startAutoScroll() {
    autoScroll = setInterval(() => {
      if (currentIndex < productItems.length - itemsToShow) {
        currentIndex++;
      } else {
        currentIndex = 0;
      }
      updateCarousel();
    }, 3000);
  }

  // Démarrer le défilement automatique
  startAutoScroll();

  nextButton.addEventListener("click", () => {
    if (currentIndex < productItems.length - itemsToShow) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    updateCarousel();
    resetAutoScroll();
  });

  prevButton.addEventListener("click", () => {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = productItems.length - itemsToShow;
    }
    updateCarousel();
    resetAutoScroll();
  });

  function resetAutoScroll() {
    clearInterval(autoScroll);
    startAutoScroll();
  }

  // Mettre à jour le carrousel au chargement
  updateCarousel();
});
