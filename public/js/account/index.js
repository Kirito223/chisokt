import { pagination } from "../Ultils/pagination.js";

var btnModalAddAccount, updateAccount, changePassword, btndeleteAccount;

window.onload = function () {
    const paginationbox = document.getElementsByClassName("pagination-box");
    pagination(1, 10, null, paginationbox[0]);
    initControl();
    initEvent();
};
function initControl() {
    updateAccount = document.getElementById("updateAccount");
    btnModalAddAccount = document.getElementById("btnModalAddAccount");
    changePassword = document.getElementById("changePassword");
    btndeleteAccount = document.getElementById("deleteAccount");
}

function initEvent() {
    btnModalAddAccount.onclick = function (e) {
        $("#modelAddAccount").modal("show");
    };
    updateAccount.onclick = function (e) {
        updateInfomationAccount();
    };
    changePassword.onclick = function (e) {
        changePasswordAccount();
    };
    btndeleteAccount.onclick = function(e){
        deleteAccount();
    }
}

function updateInfomationAccount() {
    $("#modelUpdateAccount").modal("show");
}

function changePasswordAccount() {
    $("#modelChangePassword").modal("show");
}

function deleteAccount() {
    Swal.fire({
        title: "Bạn muốn xóa tài khoản này không?",
        text: "Bạn sẽ không thể khôi phục lại tài khoản này!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Đồng ý",
        cancelButtonText: "Không",
    }).then((result) => {
        if (result.value) {
            Swal.fire("Đã xóa!", "Đã xóa tài khoản khỏi hệ thống", "success");
        }
    });
}
