window.app = {}

function getIP_Data () {
    $.ajax({
        url: "https://ipapi.co/json",
        method: "GET",
        dataType: "json"
    }).always(function(dataOrjqXHR, textStatus, jqXHROrErrorThrown) {
            if (textStatus === "success") {
                window.app.ip_data = dataOrjqXHR
            } else {
                console.error("AJAX Error:", textStatus, jqXHROrErrorThrown);
            }
            document.querySelectorAll('form input').forEach(Form.initilizeInput)
    });
}

class validate {
    static first_name (el) {
        let rgx = /^([A-Za-zíА-Яа-яІіЄєЭэъЇїá0-9\s]{2,50})$/gm
        let result = el.value.match(rgx)
        this.resultValidate(result, el)
    }
    static last_name (el) {
        let rgx = /^([A-Za-zíА-Яа-яІіЄєЭэъЇїá0-9\s]{2,50})$/gm
        let result = el.value.match(rgx)
        this.resultValidate(result, el)
    }
    static email (el) {
        let rgx = /^([a-z\\._0-9]{1,50})@([a-z]{1,50})\.([a-z.]{1,10})$/gm
        let result = el.value.match(rgx)
        this.resultValidate(result, el)
    }
    static phone (el) {
        let rgx = /^\d+$/;
        let result = el.value.match(rgx)
        this.resultValidate(result, el)
    }
    static resultValidate (result, el) {
        if (result) {
            el.classList.remove("failedValidate")
            el.classList.add("successValidate")
        } else {
            el.classList.remove("successValidate")
            el.classList.add("failedValidate")
        }
    }
}

class Form {
    static initilizeInput (el) {
        switch (el.getAttribute("name")) {
            case "first_name":
            case "firstname":
            case "name":
                el.addEventListener('input', () => validate.first_name(el))
                el.setAttribute('required', true)
                el.value = "";
                break;
            case "last_name":
            case "lastname":
            case "second_name":
                el.addEventListener('input', () => validate.last_name(el))
                el.setAttribute('required', true)
                el.value = "";
                break;
            case "email":
                el.addEventListener('input', () => validate.email(el))
                el.setAttribute('required', true)
                el.setAttribute('type', "email")
                el.value = "";
                break;
            case "phone":
                el.addEventListener('input', () => validate.phone(el))
                Utils.dialCode(el)
                el.setAttribute('required', true)
                el.value = "";
                break;
        }
    }
    static validateForm(event, mod=false) {
        event.preventDefault();
        var form = event.target.closest('form');
        var inputs = form.querySelectorAll("input.form-input");
        var hasFailedValidation = false;
        inputs.forEach(function(input) {
            if ($(input).hasClass("successValidate")) {
                input.style.borderColor = "green";
            }
            if (!$(input).hasClass("successValidate")) {
                input.style.borderColor = "red";
                hasFailedValidation = true;
            }
        });
        if (!hasFailedValidation && !mod) {
            form.submit();
            return true
        }
        else if (!hasFailedValidation){
            return true
        }
        return false
    }
}

class Utils {
    static dialCode (el) {
        let iti;
        try {
            iti = window.intlTelInput(el, {
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js",
                initialCountry: window.app.ip_data['country'] || "us",
                separateDialCode: true,
            });
            $('input[name="phonecc"]').val(iti.getSelectedCountryData()['dialCode'])
            el.setAttribute('data-intlTelInput', iti.getSelectedCountryData()['dialCode'])
            el.addEventListener("countrychange", function () {
                $('input[name="phonecc"]').val(iti.getSelectedCountryData()['dialCode'])
                el.setAttribute('data-intlTelInput', iti.getSelectedCountryData()['dialCode'])
            });
        } catch (e) {
            console.log(e);
        }
    }
}


document.addEventListener('DOMContentLoaded', () => {
    const modal = document.querySelector('#custom-modal')
    const closeModal = document.querySelectorAll('#modal-close')
    const nextModal = document.querySelector('#modal-next')

    let inputName = document.querySelector('[data-input-name]');
    let inputNameSecond = document.querySelector('[data-input-second]');
    let inputPhone = document.querySelector('[data-input-phone]');
    let inputNameEmail = document.querySelector('[data-input-email]');

    let changeForm = document.querySelector('[data-form]')
    let modalTitle = document.querySelector('.custom-modal__title')
    const triggers = document.querySelectorAll('[data-modal]')

    triggers.forEach(btn => {
        btn.addEventListener('click', () => {
            $(modal).removeAttr("hidden")
            modal.classList.add('open')
            document.body.style.overflow = 'hidden';
            modalTitle.textContent = 'Send me!'
            changeForm.style.display = 'flex'
            nextModal.style.display = 'block'
            inputName.style.border = '1px solid #9ea6be'
            inputNameSecond.style.border = '1px solid #9ea6be'
            inputNameEmail.style.border = '1px solid #9ea6be'
            inputPhone.style.border = '1px solid #9ea6be'
        })
    })
    nextModal.addEventListener('click', () => {
        let validation_resault = Form.validateForm(event, true)
        if(validation_resault){
            sendAjaxData(event.target.closest('form'))
            //todo как вариант здесь прикрутить еще событие лид FB после отправки данных
        }
    })
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('open')
            document.body.style.overflow = '';
        }
    })
    closeModal.forEach(btn => {
        btn.addEventListener('click', () => {
            modal.classList.remove('open')
            document.body.style.overflow = '';
        })
    })
})


function sendAjaxData(form) {
    event.preventDefault();
    var formData = $(form).serialize()
    $.ajax({
        url: 'api.php',
        method: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response){
            $('.custom-modal__title').text('Thank you for order!');
            $('form#modal').hide()
        },
        error: function(xhr, status, error){
            console.log(error)
        }
    });
}

getIP_Data()