(function(jQuery){
    jQuery(document).ready(function(){
       
var fileurl = "http://localhost/three/wp-content/themes/magista/";
var fileurl1 = "http://localhost/three/wp-content/themes/magista";

	    jQuery("#style-switcher h2 a").click(function(e){
            e.preventDefault();
            var div = jQuery("#style-switcher");
            console.log(div.css("left"));
            if (div.css("left") === "-185px") {
                jQuery("#style-switcher").animate({
                    left: "0px"
                });
            } else {
                jQuery("#style-switcher").animate({
                  left: "-185px"
                });
            }
        });
  
  });
})(this.jQuery);
