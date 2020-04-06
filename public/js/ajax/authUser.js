/**
 * Авторизация пользователя
 *
 * @param dataForAuth
 */
const authUser = (data) => {
    $.ajax({
        type: 'POST',
        url: '/session/start',
        data: data,
        processData: false,
        contentType: false,
        success: (html) => {

        },
        error: (html) => {

        }
    })
};
