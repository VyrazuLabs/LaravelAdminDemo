// Author:Juhi Agarwal
/*
-------------------------------------
-------------------------------------
Dashboard Admin Section Jquery Starts
--------------------------------------
---------------------------------------
*/

// Hall Booking Request,call of the table
  

  $('.add-more-videos').click(function(){
    $('.add-more-blocks').append('<div class="add-text-box">'
      +'<input type="text" class="form-control" placeholder="Enter Video Link">'
      +'</div>');
  });


/*
-------------------------------------
-------------------------------------
Dashboard User Section Jquery Starts
--------------------------------------
---------------------------------------
*/

//hall list carousel of the hall listing gallery images
$(document).ready(function() {
 
  $("#hall-list").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

  //hall list for booking in the users section

  $(".hall-list").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

  // datatable call function of hall booking user section

  $("#hall-booking-user").DataTable({
    "ordering": false
  });

  $("#self-service").DataTable();
 
});


/*
-------------------------------------
-------------------------------------
Frontend Jquery Starts
--------------------------------------
---------------------------------------
*/

  // On click Chairman-In-Council  page of the about hadlia menu make the tab chairman in council active

  function chairmanLink(){
    window.location = "present-municipality-board.php";
        if ( document.readyState !== 'complete' ){
          $(".simplefilter li:nth-child(3)").trigger('click');
        }  
        else{
          return false;
        }
  }

$(document).ready(function() {

  $('#chairmanLink').click();

  // auto scroll of the tabs content section (main page)

    if ($('.tabpanel-news-scroll').height() > $('.tab-news-parent').height()) {
        setInterval(function () {

            start();
       }, 3000); 
   
    }
});

function animateContent(direction) {  
    var animationOffset = $('.tab-news-parent').height() - $('.tabpanel-news-scroll').height()-30;
    if (direction == 'up') {
        animationOffset = 0;
    }

    console.log("animationOffset:"+animationOffset);
    $('.tabpanel-news-scroll').animate({ "marginTop": (animationOffset)+ "px" }, 5000);
}

  function up(){
      animateContent("up")
  }
  function down(){
      animateContent("down")
  }

  function start(){
   setTimeout(function () {
      down();
  }, 2000);
   setTimeout(function () {
      up();
  }, 2000);
     setTimeout(function () {
      console.log("wait...");
  }, 5000);
  }

$(document).ready(function(){

    // owl carousel of the town map pages

    var owl;
    
    function customPager() {

        $.each(this.owl.userItems, function (i) {

            var titleData = jQuery(this).find('img').attr('title');
            var paginationLinks = jQuery('.owl-controls .owl-pagination .owl-page span');

        $(paginationLinks[i]).append(titleData);

        });

    }

        $('#town-maps').owlCarousel({
            navigation: false, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            afterInit: customPager,
            afterUpdate: customPager,
        });


    // owl carousel of the ward information
   
        var sync1 = $(".happy-moments");
        var sync2 = $(".happy-moments-2");
       
        sync1.owlCarousel({
          singleItem : true,
          slideSpeed : 1000,
          navigation: true,
          pagination:false,
          afterAction : syncPosition,
          responsiveRefreshRate : 200,
          navigationText: [
            "<i class='fa fa-hand-o-left'></i>",
            "<i class='fa fa-hand-o-right'></i>"
            ]
        });
       
        sync2.owlCarousel({
          items : 3,
          itemsDesktop      : [1199,10],
          itemsDesktopSmall     : [979,10],
          itemsTablet       : [768,8],
          itemsMobile       : [479,4],
          pagination:false,
          responsiveRefreshRate : 100,
          afterInit : function(el){
            el.find(".owl-item").eq(0).addClass("synced");
          }
        });
       
        function syncPosition(el){
          var current = this.currentItem;
          $(".happy-moments-2")
            .find(".owl-item")
            .removeClass("synced")
            .eq(current)
            .addClass("synced")
          if($(".happy-moments-2").data("owlCarousel") !== undefined){
            center(current)
          }
        }
       
        $(".happy-moments-2").on("click", ".owl-item", function(e){
          e.preventDefault();
          var number = $(this).data("owlItem");
          sync1.trigger("owl.goTo",number);
        });
       
        function center(number){
          var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
          var num = number;
          var found = false;
          for(var i in sync2visible){
            if(num === sync2visible[i]){
              var found = true;
            }
          }
       
          if(found===false){
            if(num>sync2visible[sync2visible.length-1]){
              sync2.trigger("owl.goTo", num - sync2visible.length+2)
            }else{
              if(num - 1 === -1){
                num = 0;
              }
              sync2.trigger("owl.goTo", num);
            }
          } else if(num === sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", sync2visible[1])
          } else if(num === sync2visible[0]){
            sync2.trigger("owl.goTo", num-1)
          }
          
        }

    // owl carousel main slider -- home page
   
    $("#main-slider").owlCarousel({
   
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true
   
    });

    //owl carousel of the recent works section in main frontent page

    $("#recent-works").owlCarousel({
   
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 3,
        lazyLoad : true,
        navigationText: [
        "<i class='icon-chevron-left icon-white'><</i>",
        "<i class='icon-chevron-right icon-white'>></i>"
        ],
   
    });

    //owl carousel of the gallery section in the main page

    $("#gallery-section").owlCarousel({
   
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        navigationText: [
        "<i class='icon-chevron-left icon-white'><</i>",
        "<i class='icon-chevron-right icon-white'>></i>"
        ],
   
    });

    // bind change event to select option of the gis map page..

    $('#gis-option').on('change', function () {
        initGisOptionSelected();
        return false;
    });

    //owl carousel in hall-booking section

    $(".house_gallery").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      paginationSpeed : 400,
      singleItem:true
 
    });

    // Auth:Raju 

    // For tab section in the present municipal board page

    //Initialize filterizr with default options
    $('.filtr-container').filterizr();

    $('.to-hide-block1').click(function(){
        $('.hide-on-clk-tom').hide();
    });

    $('#show-on-clk-bck1').click(function(){
      $('.hide-on-clk-tom').show();
    });

    // tab section code ends

    //owl carousel for job description page
     $("#job-desp-pge").owlCarousel({
   
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true,
        navigationText: [
        "<i class='icon-chevron-left icon-white'><</i>",
        "<i class='icon-chevron-right icon-white'>></i>"
        ],
      });

     // Auth:Raju

});

/* This function returns the name of the file without extension */
function gisNameBack(filename){
    filename = filename.replace(/\\/g, '/');
    filename = filename.replace( /([a-z])([A-Z])/g, "$1 $2");
    var filename = filename.substring(filename.lastIndexOf('/')+1, filename.lastIndexOf('.'));
    return filename;
}

// this is the extension to eliminate the php files from gis.map select option

function getFileExtension(filename) {
  var fileExtension;
  fileExtension = filename.substr((filename.lastIndexOf('.') + 1));
  return fileExtension;
}

// map section ajax call kml

  $.ajax({
      //This will retrieve the contents of the folder if the folder is configured as 'browsable'
      url: 'kml/gis-map.php',
      success: function (data) {

          var KmlFiles = jQuery.parseJSON(data);

          $.each(KmlFiles, function(i, kmlItem) {
             
              var phpFiles = getFileExtension(kmlItem);
              if(kmlItem == '.' || kmlItem == '..' || phpFiles == 'php'){
                 // this is where I am checking that if file name is '.' & '..' & '.php' then I am doing nothing
              }
              else {
                $("#gis-option").append( '<option value='+kmlItem+' name='+kmlItem+'>'+gisNameBack(kmlItem)+'</option>');
                
              }
          });
      }
  });


// map section page gis.php
/**
 * @fileoverview Sample showing capturing a KML file click
 *   and displaying the contents in a side panel instead of
 *   an InfoWindow
 */

/**
 * Initializes the map and calls the function that creates polylines.
 */
function initGisOptionSelected() {
  var map;
  var optionSelected = $("#gis-option").find("option:selected").val();
  var urlOfGisOption = 'http://haldiamunicipality.org/new/kml/'+ optionSelected;
  var src = urlOfGisOption;
  console.log(src);
  map = new google.maps.Map(document.getElementById('map'), {
    center: new google.maps.LatLng(22.0636705, 88.0227686),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.TERRAIN
  });
  loadKmlLayer(src, map);
}

/**
 * Adds a KMLLayer based on the URL passed. Clicking on a marker
 * results in the balloon content being loaded into the right-hand div.
 * @param {string} src A URL for a KML file.
 */
function loadKmlLayer(src, map) {
  
  var kmlLayer = new google.maps.KmlLayer(src, {
    suppressInfoWindows: false,
    preserveViewport: false,
    map: map
  });
  google.maps.event.addListener(kmlLayer, 'click', function(event) {
    // var content = event.featureData.infoWindowHtml;
    // var testimonial = document.getElementById('capture');
    // testimonial.innerHTML = content;
  });
}

// sidebar onclick icon slide left or right the menu in mobile view

jQuery('#sidebar-slide').click(function () {
  jQuery('#left-menu-cat').slideToggleWidth();
});

jQuery.fn.extend({
  slideRight: function() {
    return this.each(function() {
      jQuery(this).animate({width: 'show'});
    });
  },
  slideLeft: function() {
    return this.each(function() {
      jQuery(this).animate({width: 'hide'});
    });
  },
  slideToggleWidth: function() {
    return this.each(function() {
      var el = jQuery(this);
      if (el.css('display') == 'none') {
        el.slideRight();
      } else {
        el.slideLeft();
      }
    });
  }
});

//map section gis page click function
// MAP-ON CLICK
 $('.overlay').click(function () {
  $('#map').css("pointer-events", "all");
});

$( ".overlay" ).mouseleave(function() {
  $('#map').css("pointer-events", "none"); 
});

// ajax call for the polling station in department menu polling station

 $.ajax({

    type: 'GET',
    url: '/polling-data/polling.php',
    dataType:'JSON', 
    success: function(result){
      var trHTML = '';
      var data = jQuery.parseJSON(result);
      $.each(data, function(i, item) {
          trHTML = '<tr><td>' + item.pollingStationNo + '</td><td>' + item.pollingStation + '</td><td>'+ item.pollingVotersStrength + '</td><td>'+ item.pollingArea + '</td></tr>';
          $('#polling-station > tbody').append(trHTML);
          console.log(result);
    });

  }});










