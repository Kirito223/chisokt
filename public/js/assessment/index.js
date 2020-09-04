var btnReportAttach;

window.onload = function () {
    initControl();
    loadData();
    initEvent();
};
function initControl() {
    btnReportAttach = document.getElementById("btnReportAttach");
}

function initEvent() {
    btnReportAttach.onclick = function (e) {
        $("#modelAssessmentFileAttach").modal("show");
    };
}

function loadData() {
    $("#tableAssessment").treetable();
    let page = [];
    for (let index = 1; index < 150; index++) {
        page.push({ name: `Number${index}` });
    }

    $("#pagination-box-assessment").pagination({
        alias: {
            pageNumber: "page",
        },
        dataSource: page,
        callback: function (data, pagination) {
            console.log(data);
        },
    });
}
