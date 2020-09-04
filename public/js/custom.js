

// h�m g�n tooltip tr�n v�o textbox
function assignToolTipBootStrapToTextBox(arrayInput, title) {
    // n?u l� m?ng th� l?p t?ng ??i t??ng
    if (Object.prototype.toString.call(arrayInput) === '[object Array]') {
        for (var i = 0; i < arrayInput.length; ++i) {
            var input = arrayInput[i];
            input.attr('title', title);
            input.tooltip('show');
            input.tooltip({
                placement: "auto top"
            });
        }
    } else {
        arrayInput.attr('title', title);
        arrayInput.tooltip('show');
        arrayInput.tooltip({
            placement: "auto top"
        });
    }
}

// h�m t� ?? n?n c�c input
function highlightInput(arrayInput) {
    // n?u l� m?ng th� l?p t?ng ??i t??ng
    if (Object.prototype.toString.call(arrayInput) === '[object Array]') {
        for (var i = 0; i < arrayInput.length; ++i) {
            var input = arrayInput[i];
            input.css('background-color', '#FFEDEF');
        }
    } else {
        arrayInput.css('background-color', '#FFEDEF');
    }
}
//assignToolTipBootStrapToTextBoxl� g�n tooltip cho c�i textbox nh?p l?i
// highlightInputl� d�ng ?? t� ?? c�i input l?i
// // reset c�c input  v? tr?ng th�i ban ??u, c� ngh?a l� b? t� ??, ho?c b? tooltip b�o l?i
function resetInputHasTooltip() {
    // b? t� ?? c�c required input
    unHighlightInput(new Array($('#txtUserName'), $('#txtRePassword'), $('#txtEmail')));
    // h?y tooltip c?a c�c required input
    destroyToolTipBootStrapFromTextBox(new Array($('#txtUserName'), $('#txtRePassword'), $('#txtEmail')));
}
// h�m b? t� ?? n?n c�c input
function unHighlightInput(arrayInput) {
    // n?u l� m?ng th� l?p t?ng ??i t??ng
    if (Object.prototype.toString.call(arrayInput) === '[object Array]') {
        for (var i = 0; i < arrayInput.length; ++i) {
            var input = arrayInput[i];
            input.css('background-color', '');
        }
    } else {
        arrayInput.css('background-color', '');
    }
}
// h�m h?y tooltip tr�n tr�n textbox
function destroyToolTipBootStrapFromTextBox(arrayInput) {
    // n?u l� m?ng th� l?p t?ng ??i t??ng
    if (Object.prototype.toString.call(arrayInput) === '[object Array]') {
        for (var i = 0; i < arrayInput.length; ++i) {
            var input = arrayInput[i];
            input.tooltip('destroy');
        }
    } else {
        arrayInput.tooltip('destroy');

    }
}


function hideloader() {
    //document.getElementById('loading').style.display = "none";
    $('#loading').css('display','none');
}




