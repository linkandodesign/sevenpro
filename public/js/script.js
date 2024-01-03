const swiperCursos = new Swiper(".swiper-cursos", {
  direction: "horizontal",
  loop: true,
  slidesPerView: 4,
  spaceBetween: 27,
  navigation: {
    nextEl: ".nossos-cursos-btn-next",
    prevEl: ".nossos-cursos-btn-prev",
  },
  breakpoints: {
    1440: {
      slidesPerView: 4,
      spaceBetween: 27,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 27,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
  },
});

const swiperAreas = new Swiper(".swiper-areas", {
  direction: "horizontal",
  loop: true,
  slidesPerView: 4,
  spaceBetween: 27,
  navigation: {
    nextEl: ".areas-btn-next",
    prevEl: ".areas-btn-prev",
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
  },
  breakpoints: {
    1440: {
      slidesPerView: 4,
      spaceBetween: 27,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 27,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
  },
});

const swiperTodosCursos = new Swiper(".swiper-todos-cursos", {
  direction: "horizontal",
  loop: true,
  slidesPerView: 4,
  spaceBetween: 27,
  navigation: {
    nextEl: ".todos-cursos-btn-next",
    prevEl: ".todos-cursos-btn-prev",
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
  },
  breakpoints: {
    1440: {
      slidesPerView: 4,
      spaceBetween: 27,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 27,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    320: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
  },
});