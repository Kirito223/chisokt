import { pagination } from "../Ultils/pagination.js";

window.onload = function () {
    const paginationbox = document.getElementsByClassName("pagination-box");
    pagination(1, 10,null, paginationbox[0]);
};
