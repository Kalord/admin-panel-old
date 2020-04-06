const getValidationRulesLoginForm = () => {
    return {
        '#login' : {
            stringValidator: [],
            lengthValidator: [8, 30]
        },
        '#password' : {
            stringValidator: [],
            lengthValidator: [8, 255]
        }
    };
};

const getErrorMessageLoginForm = () => {
    return {
        '#login' : {
            stringValidator: 'Некорректные данные',
            lengthValidator: 'Поле должно быть больше 8 символов и меньше 30 символов'
        },
        '#password' : {
            stringValidator: 'Некорректные данные',
            lengthValidator: 'Поле должно быть больше 8 символов'
        }
    }
}
