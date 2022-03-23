var modal = 'modelId';
var modalTitle = 'Modal';
var modalSize = '';

function resetModal() {
    modalTitle = 'Modal';
    modalSize = '';


    $('#' + modal + ' .modal-title').html(modalTitle);
    $('#' + modal + ' .modal-dialog').addClass(modalSize)
}

function showFormModal(url, title, size) {

    resetModal();

    modalTitle = title;
    modalSize = size;

    $.ajax({
        type: "GET",
        url: url,
        success: function (response) {
            appendModalBody(response);
            modalShow();
        }
    });
}

function appendModalBody(html) {
    $('#' + modal + ' .modal-body').html(html);
}

function modalShow() {
    $('#' + modal + ' .modal-title').html(modalTitle);
    $('#' + modal + ' .modal-dialog').addClass(modalSize)
    $('#' + modal).modal('show');
}


function modalSubmit() {
    $form = $('#' + modal + '.modal-body form');

    $.ajax({

        type: $(form).attr('method'),
        url: $(form).attr('action'),
        data: $(form).serialize(),
        dataType: "json",

        error: function (response, textStatus, error) {

            console.log(response);

            if(response.status == 200) {
                location.reload();
                return;
            }
            
            resetErrorsFields();

            $.each(response.responseJSON.errors, function (field, value) { 
                console.log(field);
                setErrorField(field, value[0]);
            });
        },

        success: function (response) {
           
        }
    });
}

function resetErrorsFields() {
    $('input, select, textarea').removeClass('is-invalid');
}

function setErrorField(fieldName, error) {
    $('input[name="'+fieldName+'"], select[name="'+fieldName+'"], textarea[name="'+fieldName+'"]')
        .addClass('is-invalid')
        .next().html(error)
}