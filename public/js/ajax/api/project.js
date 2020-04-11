/**
 * Изменение текущего проекта
 **/
const changeProject = (id_selected, successCallback, errorCallback) => {
    $.ajax({
        type: PATCH,
        url: `${PROJECT_API}/selected`,
        data: {
            id_selected: id_selected
        },
        success: successCallback,
        error: errorCallback
    });
};

/**
 * Создание проекта
 */
const createProject = (data, successCallback, errorCallback) => {
    $.ajax({
        type: POST,
        url: `${PROJECT_API}/create`,
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        data: data,
        success: successCallback,
        error: errorCallback
    });
}