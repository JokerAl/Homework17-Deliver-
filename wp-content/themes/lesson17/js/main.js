(function ($, undefined) {
    $(document).ready(function () {
        $(".cross").hide();
        $(".menu").hide();
        $(".hamburger").click(function () {
            $(".menu").slideToggle("slow", function () {
                $(".hamburger").hide();
                $(".cross").show();
            });
        });

        $(".cross").click(function () {
            $(".menu").slideToggle("slow", function () {
                $(".cross").hide();
                $(".hamburger").show();
            });
        });
        $(".fa-search").toggle( function () {
                $("#search-input").hide("slow");

        },function () {
            $("#search-input").show("slow");

        });

    });
})(jQuery);



