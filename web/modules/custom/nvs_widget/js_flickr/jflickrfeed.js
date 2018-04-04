
/*
 * Copyright (C) 2009 Joel Sutherland
 * Licenced under the MIT license
 * http://www.newmediacampaigns.com/page/jquery-flickr-plugin
 *
 * Available tags for templates:
 * title, link, date_taken, description, published, author, author_id, tags, image*
 */
jQuery(document).ready(function($){
    var id_data = jQuery('#flickr-5708711ee1be7').attr('data-id');
    var count_data = jQuery('#flickr-5708711ee1be7').attr('data-count');
    var count_data_n = Number(count_data);
    jQuery.getJSON('http://api.flickr.com/services/feeds/photos_public.gne?ids='+id_data+'&lang=en-us&format=json&jsoncallback=?', function(data){
        jQuery.each(data.items, function(index, item){
            if(index >= count_data_n){
                return false;
            }
            jQuery("<img/>").attr({ src : item.media.m.replace('_m','_s'), class : "img-responsive"}).appendTo("#flickr-5708711ee1be7")
            /*<li><a href="#"><img width="60" height="60" src="images/default/gallery-thumb-01.jpg" class="img-responsive" alt="Thumb"></a></li>*/
              .wrap("<li><a class='flicker-popup-link cursor-zoom' href='" + item.media.m.replace('_m','_b') + "'></a></li>");
              
            /*$('.flicker-popup-link').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                fixedContentPos: true,
                mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                image: {
                    verticalFit: true
                },
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 600, // duration of the effect, in milliseconds
                    easing: 'ease', // CSS transition easing function
                    opener: function(element) {
                        return element.find('img');
                    }
                }
            });*/
        });
    });
});