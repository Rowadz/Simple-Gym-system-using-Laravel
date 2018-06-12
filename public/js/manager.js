$(document).ready(function() {
    var add_coach = $('#add_coach');
    add_coach.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: add_coach.attr('action'),
            type: "POST",
            data: add_coach.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: "coach Added",
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: 'success'
                });
                $(':input', '#add_coach').removeAttr('checked').removeAttr('selected').
                not(':button, :submit, :reset, :hidden,:radio,:checkbox').val('');
            } else {
                swal({
                    title: 'Something is not right with your data',
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

    $('.deleteBTN').click(function() {
        swal({
                title: "Are you sure?",
                text: "Once deleted, All the data about the coach will be gone",
                type: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $(this).parent().parent().fadeOut();
                    //$(this).parent().parent().addClass('animated hinge');
                    $.ajax({
                        url: '/manger/fire-coach',
                        type: 'POST',
                        data: {
                            id: (this).id
                        },
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }).
                    done(function(response) {
                        if (response.success) {

                            swal({
                                title: "Fired",
                                text: response.success,
                                timer: 2000,
                                button: false,
                                type: 'success'
                            });

                        } else {
                            swal({
                                title: 'Something wrong happend',
                                text: response.errors,
                                timer: 2000,
                                type: "error"
                            });
                        }
                    }).
                    fail(function() {
                        swal({
                            title: 'Something wrong happend',
                            text: "OOPS!",
                            timer: 2000,
                            type: "error"
                        });
                    });
                } else {
                    swal("The coach is safe!");
                }
            });
    });
    var add_reception = $('#add_reception');
    add_reception.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: add_reception.attr('action'),
            type: "POST",
            data: add_reception.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: "Done!",
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: 'success'
                });
                $(':input', '#add_reception').removeAttr('checked').removeAttr('selected').
                not(':button, :submit, :reset, :hidden,:radio,:checkbox').val('');
            } else {
                swal({
                    title: 'Something is not right with your data',
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
    $('.deleteBTN_rece').click(function() {
        swal({
                title: "Are you sure?",
                text: "Once deleted, All the data about the this reception employee will be gone",
                type: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $(this).parent().parent().fadeOut();
                    $.ajax({
                        url: '/manger/fire-rece',
                        type: 'POST',
                        data: {
                            id: (this).id
                        },
                        dataType: 'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }).
                    done(function(response) {
                        if (response.success) {

                            swal({
                                title: "Fired",
                                text: response.success,
                                timer: 2000,
                                button: false,
                                type: 'success'
                            });

                        } else {
                            swal({
                                title: 'Something wrong happend',
                                text: response.errors,
                                timer: 2000,
                                type: "error"
                            });
                        }
                    }).
                    fail(function() {
                        swal({
                            title: 'Something wrong happend',
                            text: "OOPS!",
                            timer: 2000,
                            type: "error"
                        });
                    });
                } else {
                    swal("The coach is safe!");
                }
            });
    });

    var add_product = $('#add_product');
    add_product.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: add_product.attr('action'),
            type: "POST",
            data: add_product.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: "Product Added",
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: 'success'
                });
                $(':input', '#add_product').removeAttr('checked').removeAttr('selected').
                not(':button, :submit, :reset, :hidden,:radio,:checkbox').val('');
            } else {
                swal({
                    title: 'Something is not right with your data',
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
    var add_machine = $('#add_machine');
    add_machine.submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: add_machine.attr('action'),
            type: "POST",
            data: add_machine.serialize(),
            dataType: 'json'
        }).done(function(response) {
            if (response.success) {
                swal({
                    title: "Machine Added",
                    text: response.success,
                    timer: 5000,
                    button: false,
                    type: 'success'
                });
                $(':input', '#add_machine').removeAttr('checked').removeAttr('selected').
                not(':button, :submit, :reset, :hidden,:radio,:checkbox').val('');
            } else {
                swal({
                    title: 'Something is not right with your data',
                    text: response.errors,
                    timer: 2000,
                    type: "error"
                });
            }
        }).fail(function() {
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
});