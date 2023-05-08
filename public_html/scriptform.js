/* SCRIPT FORMULÁRIO */

const btnLogin = document.querySelector(".btn-login");
const form = document.querySelector("form");

btnLogin.addEventListener("click", event => {
    event.preventDefault();
    form.classList.add("form-hide");
});

const fields = document.querySelectorAll("[required]")

function ValidateField(field) {
    // logica para verificar se existem erros
    function verifyErrors() {
        let foundError = false;

        for(let error in field.validity) {
            // se não for customError
            // então verifica se tem erro
            if (field.validity[error] && !field.validity.valid ) {
                foundError = error
            }
        }
        return foundError;
    }

    function customMessage(typeError) {
        const messages = {
            text: {
                valueMissing: "Por favor, preencha este campo!"
            },
            email: {
                valueMissing: "O Email é obrigatório.",
                typeMismatch: "Por favor, preencha com um email válido."
            },
            number: {
                valueMissing: "Por favor, preencha este campo!"
            },
            checkbox: {
                valueMissing: "Por favor, verifique os termos!"
            }
        }

        return messages[field.type][typeError]
    }

    function setCustomMessage(message) {
        const spanError = field.parentNode.querySelector("span.error")

        if (message) {
            spanError.classList.add("active")
            spanError.innerHTML = message
        } else {
            spanError.classList.remove("active")
            spanError.innerHTML = ""
        }
    }

    return function() {

        const error = verifyErrors()

        if(error) {
            const message = customMessage(error)
            field.style.borderColor = "red"
            setCustomMessage(message)
        } else {
            field.style.borderColor = "green"
            setCustomMessage()
        }
    }
}


function customValidation(event) {

    const field = event.target
    const validation = ValidateField(field)

    validation()

}

for( field of fields ){
    field.addEventListener("invalid", event => {
        // eliminar o bubble
        event.preventDefault()

        customValidation(event)
    })
    field.addEventListener("blur", customValidation)
}


document.querySelector("form")
    .addEventListener('submit', event => {
        console.log("enviar o formulário")
    });
      
    /* */

    (function() {

        $('#live-chat header').on('click', function() {
    
            $('.chat').slideToggle(300, 'swing');
            $('.chat-message-counter').fadeToggle(300, 'swing');
    
        });
    
        $('.chat-close').on('click', function(e) {
    
            e.preventDefault();
            $('#live-chat').fadeOut(300);
    
        });
    
    }) ();