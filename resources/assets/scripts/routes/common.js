// Plugins
import baguetteBox from 'baguettebox.js';
import WOW from 'wowjs';

export default {
  init() {
    // JavaScript to be fired on all pages

    // Click to enlarge
    baguetteBox.run('.wp-block-gallery');
    baguetteBox.run('.wp-block-image');

    // Run wow.js
    window.wow = new WOW.WOW({
      live: false,
    });

    window.wow.init();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
