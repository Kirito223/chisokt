export function pagination(startPage, totalPage, handlerPage, container) {
    const nav = document.createElement("nav");
    nav.setAttribute("aria-label", "Page navigation example");

    const ul = document.createElement("ul");
    ul.setAttribute("class", "pagination");

    for (let page = startPage; page < totalPage + 1; page++) {
        let li = document.createElement("li");
        li.setAttribute("class", "page-item");

        let a = document.createElement("a");
        a.setAttribute("class", "page-link");
        a.textContent = page;
        a.onClick = function (e) {
            e.prevertDefault();
            handlerPage();
        };

        li.appendChild(a);
        ul.appendChild(li);
    }

    nav.appendChild(ul);

    container.appendChild(nav);
}
