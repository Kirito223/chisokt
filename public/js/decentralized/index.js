import { pagination } from "../Ultils/pagination.js";

var btnModalDecentralized;

window.onload = function () {
    const paginationbox = document.getElementsByClassName("pagination-box");
    pagination(1, 10, null, paginationbox[0]);
    initControl();
    initEvent();
};
function initControl() {
    btnModalDecentralized = document.getElementById("btnModalDecentralized");
}

function initEvent() {
    btnModalDecentralized.onclick = function (e) {
     const modal =    $("#modelDecentralized").modal("show");
    };
}
