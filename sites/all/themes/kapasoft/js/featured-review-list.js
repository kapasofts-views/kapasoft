


var data = {
    type:'featuredTestimonials'
};
socket.send(JSON.stringify(data));

socket.on('reviews', function (data) {
        var rentalId = (data.rentalUnitId == 'null')? 2 : data.rentalUnitId;
        jQuery('#testimonial-list').append('<p><div class="span3"><img alt="' + finalTestimonialMap[rentalId][0].alt
            + '" class="img-circle" src="' + finalTestimonialMap[rentalId][0].url + '"></div><blockquote >'
            + data.content + '</p><small>'  + data.submittedBy + ' '
            + Date.create(data.dateReceived).format('{Month} {d}, {yyyy}') + '</small></blockquote></p>');
});