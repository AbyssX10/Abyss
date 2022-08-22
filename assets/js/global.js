const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.intersectionRatio > 0) {
            let id = $(entry.target).attr("id");
            entry.target.classList.add('visible');
            $("a").removeClass("active");

            console.log(id);

            let anchors = $("a");

            for (let i = 0; i < anchors.length; i++) {
                if ($(anchors[i]).attr("data-section") == id) {
                    $(anchors[i]).addClass("active");
                }
            }
        } else {
            entry.target.classList.remove('visible');
        }
    });
});

const anchors = document.querySelectorAll(".section");

anchors.forEach((entry) => {
    observer.observe(entry);
});

$(document).ready(() => {
    $("a").click(function () {
        /*$("a").removeClass("active");
        $(this).toggleClass("active");*/
    });
});