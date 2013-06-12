var rentalId = jQuery('#rentalUnitId').val();


var data = {
    type:'getTestimonial',
    rentalId: jQuery('#rentalUnitId').val()
};
socket.send(JSON.stringify(data));

socket.on('reviews', function (data) {
    data.each(function(review){
        //if rental id not provided, default to property with id 2 @ToDo need to make it configurable
        var rentalId = (review.rentalUnitId == 'null')? 2 : review.rentalUnitId;
        jQuery('#testimonial-list').append('<div class="row"><div class="span3"><img alt="' + finalTestimonialMap[rentalId][0].alt
            + '" class="img-circle" src="' + finalTestimonialMap[rentalId][0].url + '"> </div><div class="span6"><blockquote><p>'
            + review.content + '</p><small class="guest">' + review.submittedBy
            + ' ' + Date.create(review.dateReceived).format('{Month} {d}, {yyyy}') + '</small></blockquote></div></div><hr>');
    });
});