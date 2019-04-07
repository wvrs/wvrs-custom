// Pluhins
import baguetteBox from 'baguettebox.js';

export default {
  init() {
    // JavaScript to be fired on all pages

    // Click to enlarge
    baguetteBox.run('.wp-block-gallery');
    baguetteBox.run('.wp-block-image');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
