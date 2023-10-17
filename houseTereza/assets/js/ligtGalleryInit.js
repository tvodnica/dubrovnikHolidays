  /**
   * Initiate gallery lightbox 
   */

   lightGallery(document.getElementById('lightgallery'), {
    plugins: [lgThumbnail],
    selector: '.gallery-lightbox',
    download: false,
    share: false
  });
