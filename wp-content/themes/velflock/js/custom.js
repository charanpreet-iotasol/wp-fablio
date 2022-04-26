jQuery('.gallery').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery: {
        enabled:true,
        navigateByImgClick:true, 
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function (item) {
            return item.el.attr('title') + '<small>by velflock Limited.</small>';
        }
    },
  });

