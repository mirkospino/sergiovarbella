export default {
  init() {
    var splide = new Splide('.splide', {
      type: 'loop',
      rewind: true,
      perPage: 3,
      autoplay: true,
      gap: '1rem',
    });
    splide.mount();
  },
};
