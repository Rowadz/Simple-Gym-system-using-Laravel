$(document).ready(function() {
    var manager_login = $("#manager_login");
    manager_login.submit(function(e) {
        console.log(manager_login.attr('action'));
        e.preventDefault();
        $.ajax({
            url: manager_login.attr('action'),
            type: "POST",
            data: manager_login.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: "Greetings",
                    text: response.success + " you will be transferred to your page",
                    timer: 5000,
                    showConfirmButton: false,
                    type: "success"
                });
                window.location.replace(response.url);

            } else {
                swal({
                    title: 'Something is not right with your data',
                    text: response.errors,
                    timer: 2000,
                    type: "error"
                });
            }
        }).fail(function() {
            swal({
                title: "Fail",
                text: "Something is not right",
                timer: 2000,
                button: true,
                type: 'error'
            });
        });
    });

    var customer_login = $("#customer_login");
    customer_login.submit(function(e) {
        console.log(customer_login.attr('action'));
        e.preventDefault();
        $.ajax({
            url: customer_login.attr('action'),
            type: "POST",
            data: customer_login.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: "Greetings",
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: "success"
                });
                window.location.replace(response.url);
            } else {
                swal({
                    title: 'Something is not right with your data',
                    text: response.errors,
                    timer: 2000,
                    type: "error"
                });
            }
        }).fail(function() {
            swal({
                title: "Fail",
                text: "Something is not right",
                timer: 2000,
                button: true,
                type: 'error'
            });
        });
    });
    var reception_login = $('#reception_login');
    reception_login.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: reception_login.attr('action'),
            type: "POST",
            data: reception_login.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: "Greetings",
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: "success"
                });
                window.location.replace(response.url);
            } else {
                swal({
                    title: ' Something is not right with your data',
                    text: response.errors,
                    timer: 2000,
                    type: "error"
                });
            }
        }).fail(function(e) {
            console.log(e);
            swal({
                title: "Fail",
                text: "Something is not right",
                timer: 2000,
                button: true,
                type: 'error'
            });
        });
    });
    // coach
    var coach_login = $("#coach_login");
    coach_login.submit(function(e) {
        console.log(coach_login.attr('action'));
        e.preventDefault();
        $.ajax({
            url: coach_login.attr('action'),
            type: "POST",
            data: coach_login.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: "Greetings",
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: "success"
                });
                window.location.replace(response.url);
            } else {
                swal({
                    title: 'Something is not right with your data',
                    text: response.errors,
                    timer: 2000,
                    type: "error"
                });
            }
        }).fail(function() {
            swal({
                title: "Fail",
                text: "Something is not right",
                timer: 2000,
                button: true,
                type: 'error'
            });
        });
    });
    $("#goToLogin").click(function() {
        $('html, body').animate({
            scrollTop: $("#HereLogin").offset().top
        }, 1000);
    });

});