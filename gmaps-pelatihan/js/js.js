jQuery(document).ready(function($) {
    $("#my_map").gmap3({
      marker:{
        latLng: [-7.808549,110.389546],
        events :{
           click: function(marker, event, context){
              var map = $(this).gmap3("get"),
              infowindow = $(this).gmap3({get:{name:"infowindow"}});
              if(infowindow){
                infowindow.open(map,marker);
                infowindow.setContent('<img src="http://dc299.4shared.com/img/Ph4KDODa/s3/12d8bfb7e58/Chua-Kotak-Diam-diam-Punya-Sid.jpg">');
              }else{
                $(this).gmap3({
                  infowindow:{
                    anchor:marker,
                    options:{content: context.data}
                  }
                });
              }
           },
           
        }
      },
      map:{
        options:{
          zoom: 14
        }
      }
    });
});
