$(document).ready(function () {
    // Efek fade in pada elemen .main dengan durasi 1.5 detik
    $(".main").fadeIn(1500);

    // Efek hover untuk gambar pada kelas .additional-images
    $(".additional-images img").hover(
        function () {
            $(this).animate({ width: "+=10%", height: "+=10%" }, "fast");
        },
        function () {
            $(this).animate({ width: "-=10%", height: "-=10%" }, "fast");
        }
    );

    // Efek smooth scroll saat menavigasi
    $('a[href^="#"]').on("click", function (event) {
        var target = $($(this).attr("href"));
        if (target.length) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: target.offset().top }, 1000);
        }
    });
});
