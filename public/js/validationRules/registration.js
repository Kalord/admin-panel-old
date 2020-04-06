const getValidationRulesRegistrationForm = () => {
    return {
        '#name' : {
            stringValidator: [],
            lengthValidator: [3, 30]
        },
        '#login' : {
            stringValidator: [],
            lengthValidator: [8, 30]
        },
        '#email' : {
            emailValidator: []
        },
        '#password' : {
            stringValidator: [],
            lengthValidator: [8, 255],
            equalValidator:  [`'${$('#password_confirmation').val()}'`]
        }
    };
};

const getErrorMessageRegistrationForm = () => {
    return {
        '#name' : {
            stringValidator: 'Некорректные данные',
            lengthValidator: 'Поле должно быть больше 3 символов и меньше 30 символов'
        },
        '#login' : {
            stringValidator: 'Некорректные данные',
            lengthValidator: 'Поле должно быть больше 8 символов и меньше 30 символов'
        },
        '#email' : {
            emailValidator: 'Некорректная почта'
        },
        '#password' : {
            stringValidator: 'Некорректные данные',
            lengthValidator: 'Поле должно быть больше 8 символов',
            equalValidator:  'Пароли несовпадают'
        }
    }
}
