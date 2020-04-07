/**
 * Validation form script
 */
const lengthValidator = (data, min, max) => {
    return data.length >= min && data.length <= max;
};

const emailValidator = (data) => {
    return data.match(/^\S+@\S+\.\S+$/);
};

const equalValidator = (dataOne, dataTwo) => {
    return dataOne === dataTwo;
};

const typeValidator = (data, type) => {
    return typeof data === type;
};

const stringValidator = (data) => {
    return typeValidator(data, 'string');
};

const integerValidator = (data) => {
    return typeValidator(data, 'integer');
};

const _errorMessages = {
    lengthValidator:  'Uncorrect length',
    emailValidator:   'Uncorrect email',
    equalValidator:   'Not equal',
    typeValidator:    'Type error',
    stringValidator:  'Is not a string',
    integerValidator: 'Is not a integer'
};

const getDefaultErrorMessage = (validator) => {
    return _errorMessages[validator];
};

const getMessage = (key, validator, messages) => {
    let messageList = messages[key];

    if(!messageList || !messageList[validator]) return getDefaultErrorMessage(validator);

    return messageList[validator];
}

const showErrorMessage = (validateElement, message, validator) => {
    validateElement.css('border', '#a94442 solid 1px');
    validateElement.after(`<span class="error-hint">${message}</span>`);
};

const hideErrorMessage = (validateElement) => {
    validateElement.css('border', '');
    let next = validateElement.next();
    if(next.hasClass('error-hint')) next.remove();
}

const hideAllErrorMessages = () => {
    $('.error-hint').remove();
}

const runValidation = (rules, messages = {}) => {
      for(let rule in rules) {
          let validateElement = $(rule);
          if(!validateElement.get(0)) continue;

          let validators = rules[rule];

          for(let validator in validators) {
              let params = validators[validator];

              if(typeof params != 'object') continue;

              params.insert(0, `'${validateElement.val()}'`);
              params = params.join(', ');

              let resultValidation = eval(`${validator}(${params})`);

              hideErrorMessage(validateElement);

              if(!resultValidation)
              {
                  showErrorMessage(validateElement, getMessage(rule, validator, messages), validator);
              }
          }
      }

      let result = !$('.error-hint').get(0);
      if(result) hideAllErrorMessages();

      return result;
};
