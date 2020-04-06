const registrationUser = (data) => {
    $.ajax({
        type: 'POST',
        url: '/user/create',
        data: data,
        processData: false,
        contentType: false,
        success: (html) => {

        },
        error: (html) => {

        }
    });
}
