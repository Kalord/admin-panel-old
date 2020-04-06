const getValidationRulesLoginForm = () => {
    return {
        '#login' : {
            stringValidator: [],
            lengthValidator: [8, 30]
        },
        '#password' : {
            stringValidator: [],
            lengthValidator: [8, 30]
        }
    };
};
