var socket = io.connect(MIN_CONFIG.getDriverUrl());

jQuery(document).ready(function($){
    socket = io.connect(MIN_CONFIG.getDriverUrl());//sends connections request to server from which the page was loaded.(triggers 'connection' event at server)

    //for every form there is .alert element for displaying messages from server. The object messageBox contains the one .alert box from the form submitted by user last
    var messageBox = {
        selector: '.alert',
        element: function (){
            return $(this.selector);
        }
    };

//waiting for message to arrive. Once received, renders on page
    socket.on('message', function (data) {
        data = JSON.parse(data);
        if(data.type == "ERROR"){
            messageBox.element().addClass('alert-error').append('<span>' + data.message + '</span>').fadeIn(2000);
        }else{
            messageBox.element().append('<span>' + data.message + '</span>').fadeIn(2000);
        }
    });

    $('#submitInq').click(function(){
        $("#inquiry-form-small .alert").alert('close');
        var data = {
            content: $('#inqContent').val(),
            email: $('#userEmail').val(),
            type:'postInq'
        };
        socket.send(JSON.stringify(data));

        //sets first message box to use
        messageBox.selector = '#inquiry-form-small .alert';
        $('#inqContent').val('');
        $('#userEmail').val('');
        return false;
    });

    $('#submitPropertyInq').click(function(){
        $("#inquiry-form .alert").alert('close');
        $('#inquiry-form .control-group').removeClass('error');
        var preventRobots = $('#inquiry-form .preventRobots').val()
        if(preventRobots == ''){
            var data = {
                content: $('#inqPropertyContent').val(),
                rentalUnit: $('#inquiry-form .rentalUnit').val(),
                email: $('#propertyUserEmail').val(),
                type:'postInq'
            };
            socket.send(JSON.stringify(data));
        }else{
            $('#inquiry-form .control-group').addClass('error');
            $('#inquiry-form .alert').first().addClass('alert-error').append('<span>Unfortunately, your inquiry was not received. Please, ensure the red boxed field is blank</span>').fadeIn(2000);
        }
        //sets first message box to use
        messageBox.selector = '#inquiry-form .alert';
        $('#inqPropertyContent').val('');
        $('#propertyUserEmail').val('');
        return false;
    });

    $('#testimonialSubmitBt').click(function(){
        $("#testimonial-form .alert").alert('close');
        $('#testimonial-form .control-group').removeClass('error');
        var preventRobots = $('#testimonial-form .preventRobots').val()
        if(preventRobots == ''){
            var data = {
                title:$('#reviewTitle').val(),
                content: $('#reviewContent').val(),
                recommendedFor: $('#recommendedFor').val(),
                rentalUnit: $('#testimonial-form .rentalUnit').val(),
                submittedBy: $('#submittedBy').val(),
                type:'postReview'
            };
            socket.send(JSON.stringify(data));
        }else{
            $('#testimonial-form .control-group').addClass('error');
            $('#testimonial-form .alert').addClass('alert-error').append('<span>Unfortunately, your inquiry was not received. Please, ensure the red boxed field is blank</span>').fadeIn(2000);
        }
        //sets which alert message box to use for replay message
        messageBox.selector = '#testimonial-form .alert';
        $('#reviewTitle').val('');
        $('#reviewContent').val('');
        $('#recommendedFor').val('');
        $('#submittedBy').val('');
        return false;
    });

//ContactUs Form processed by attaching event to the button contactUsSubmitBy
    $('#contactUsSubmitBt').click(function(){
        $("#contact-us-form .alert").alert('close');
            var data = {
                name:$('#contact-us-form .name').val(),
                email: $('#contact-us-form .email').val(),
                phone: $('#contact-us-form .phone').val(),
                message: $('#contact-us-form .message').val(),
                type:'postContactUs'
            };
            socket.send(JSON.stringify(data));

        //sets which alert message box to use for replay message
        messageBox.selector = '#contact-us-form .alert';
        $('#contact-us-form .name').val('');
        $('#contact-us-form .email').val('');
        $('#contact-us-form .phone').val('');
        $('#contact-us-form .message').val('');
        return false;
    });

    $('#testimonial-list').load(function(){
        alert('testimonial loaded');
    });

    //attaching event that appends back DOM elements removed by Twitter Boostrap when closing message box
    $(document).on('closed','#inquiry-form .alert', function () {
        $('#inquiry-form .message-section').append('<div class="alert alert-block"><button type="button" class="close" data-dismiss="alert">×</button></div>');
    });
    $(document).on('closed','#inquiry-form-small .alert', function () {
        $('#inquiry-form-small .message-section').append('<div class="alert alert-block"><button type="button" class="close" data-dismiss="alert">×</button></div>');
    });
    $(document).on('closed','#testimonial-form .alert', function () {
        $('#testimonial-form .message-section').append('<div class="alert alert-block"><button type="button" class="close" data-dismiss="alert">×</button></div>');
    });

    $(document).on('closed','#contact-us-form .alert', function () {
        $('#contact-us-form .message-section').append('<div class="alert alert-block"><button type="button" class="close" data-dismiss="alert">×</button></div>');
    });


//        $('#setname').click(function(){
//            socket.emit("set_name", {name:
//                $('#nickname').val() });
//        });
});

//jQuery('#testimonial-list').load(function(){
//    alert('testimonial loaded');
//});