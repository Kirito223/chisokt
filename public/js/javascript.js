
$('#frmLogin').keypress(function (event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
        kiem_tra();
    }
});


$(document).on('click', '.close', function () {
    $(this).parent().hide();
});

function kiem_tra() {
    var txtND_ACCOUNT = $('#txtND_ACCOUNT');
    var txtND_PASSWORD = $('#txtND_PASSWORD');
    var hasError = validateEmptyValue(new Array(txtND_ACCOUNT, txtND_PASSWORD));


    if (!hasError) {

        var postData = {
            txtND_ACCOUNT: txtND_ACCOUNT.val(),
            txtND_PASSWORD: txtND_PASSWORD.val()
        };

        $.ajax({
            type: "POST",
            url: "./dang_nhap/kiem_tra",
            dataType: 'json',
            data: postData,
            async: true,
            beforeSend: function () {
                $('#btLogin').button('loading');
            },
            success: function (result) {
                if ($.trim(result.result) == 'ok') {
                    showMessage('.alert', 'success', 'danger', 'Đăng nhập thành công', 5000);
                    window.location.reload();
                } else if ($.trim(result.result) == 'change') {
                    showMessage('.alert', 'success', 'danger', 'Đăng nhập thành công', 5000);
                    $('#modal_change_password').html(result.template).modal('show').on('shown.bs.modal', function () {
                        $('#nd_password_new').focus();

                        $('#frmChangePassword').submit(function (e) {
                            e.preventDefault();
                            e.stopImmediatePropagation();
                            $.ajax({
                                type: "POST",
                                url: "dang_nhap/doi_mat_khau",
                                dataType: 'json',
                                data: $(this).serialize(),
                                async: true,
                                beforeSend: function () {
                                    $('#btnSave').button('loading');
                                },
                                success: function (result) {
                                    if ($.trim(result.result) == 'ok') {
                                        showMessage('.alert', 'success', 'danger', 'Thay đổi mật khẩu thành công', 5000);
                                        window.location.reload();
                                    } else {
                                        showMessage('.alert', 'danger', 'success', result.mes, 5000);
                                    }
                                },
                                complete: function () {
                                    $('#btnSave').button('reset');
                                    $('#modal_change_password').modal('hide').html('');
                                },
                                error: function (error) {
                                    showMessage('.alert', 'danger', 'success', error, 5000);
                                }
                            });
                        });
                    });
                } else {
                    showMessage('.alert', 'danger', 'success', result.mes, 5000);
                }
            },
            complete: function () {
                $('#btLogin').button('reset');
            },
            error: function (error) {
                showMessage('.alert', 'danger', 'success', error, 5000);
            }
        });
    } else {
        showMessage('.alert', 'danger', 'success', 'Vui lòng điền đầy đủ thông tin', 5000);
    }
}


function validatePassword() {
    if ($('#nd_password_new').val() != $('#nd_repeat_password_new').val()) {
        $('#nd_repeat_password_new').get(0).setCustomValidity('Mật khẩu không giống nhau');
    } else {
        $('#nd_repeat_password_new').get(0).setCustomValidity('');
    }
}



function showMessage(div, state, old_state, text, second) {
    $(div).show();
    $(div).children('span').html(text);
    $(div).removeClass('alert-' + old_state);
    $(div).addClass('alert-' + state);

    if (second) {
        $(div).delay(second).fadeOut("slow");
    }
}




