document.addEventListener("DOMContentLoaded", function () {
    var submenuToggles = document.querySelectorAll(".has-submenu > a");
    submenuToggles.forEach(function (toggle) {
        toggle.addEventListener("click", function (e) {
            e.preventDefault();
            var submenu = this.nextElementSibling;
            submenu.classList.toggle("active");
        });
    });

    var pageLinks = document.querySelectorAll(".submenu a");
    pageLinks.forEach(function (link) {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            var page = this.getAttribute("data-page");
            loadPageContent(page);
        });
    });

    function loadPageContent(page) {
        var pageContent = document.getElementById("page-content");
        var powerBIUrls = {
            1: `<iframe title="pagina 1" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=f7bb122a-e9ea-46ea-a5c1-d065a0c1fe0c&autoAuth=true&ctid=64e41dbd-bba8-4169-aecd-8831ae8913ea" frameborder="0" allowFullScreen="true"></iframe>`,
            2: `<iframe title="pagina 2" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=3568635c-7608-4367-9c2c-afc3dc9d2a17&autoAuth=true&ctid=64e41dbd-bba8-4169-aecd-8831ae8913ea" frameborder="0" allowFullScreen="true"></iframe>`,
            3: `<iframe title="pagina 3" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=c802bb61-2696-4788-9004-44c3b6fd9d6f&autoAuth=true&ctid=64e41dbd-bba8-4169-aecd-8831ae8913ea" frameborder="0" allowFullScreen="true"></iframe>`,
            4: `<iframe title="pagina 4" width="1140" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=cfa01ecd-0dcd-4d22-9126-cc89d18ce1ad&autoAuth=true&ctid=64e41dbd-bba8-4169-aecd-8831ae8913ea" frameborder="0" allowFullScreen="true"></iframe>`
        };

        if (powerBIUrls[page]) {
            pageContent.innerHTML = powerBIUrls[page];
        } else {
            pageContent.innerHTML = "<p>Página no encontrada.</p>";
        }
    }
});

