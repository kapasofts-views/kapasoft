(function($) {

var google_conversion_id = 986902179;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "";
var google_conversion_value = 10;

var conversionLabels = {
    'contact': "zQjXCJ3t3wUQo93L1gM"
};


function trackConversion(label) {
    google_conversion_label = conversionLabels[label];

    document.write = function(text) {
        $('#content').append(text);
    };

    $.getScript('https://www.googleadservices.com/pagead/conversion.js');
};


$(document).ready(function(){
    $("#app-contact").bind("click",function(event){
        if('submitButton' == event.target.name){
            trackConversion('contact');
        }
    });
});

})(jQuery);

