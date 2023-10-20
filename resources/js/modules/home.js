import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

export const homeFunc = () => {
  
    // MVのスライダー
    {
      new Splide( '.splide', {
        type      : 'loop',
        perPage   : 1,
        pagination: true,
        arrows    : false,
        autoplay  : true,
        interval  : 3000,
        pauseOnFocus: false,
      }).mount();
    }
}
