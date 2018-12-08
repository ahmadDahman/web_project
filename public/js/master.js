$(document).ready(function () {
    repate();
    $("#finjob-selected").click(function ()
        {
            $("#bu").before("<div id='reg-form-file' class=\"form-group row\">" +
                "<label for=\"cvfile\" class=\"col-md-4 col-form-label text-md-right\">CV : </label>" +
                "<div class=\"col-md-6\">" +
                "<div class=\"form-group\">" +
                "<input type=\"file\" class=\"form-control-file border\" name=\"cvfile\" id=\"cvfile\">" +
                "</div></div></div>"
            );
        }
    );

    $("#business-selected").click(function ()
    {
        $("#reg-form-file").remove();
    })

    function repate() {
        var $message = "Welcome In Our Website IN Our Website You Can Find Job Or Advertising A Job All It Easy".split('').reverse(),
            $timeout = 100;

        var outputSlowly = setInterval(function() {

            $('#welcome').append($message.pop());

            if ($message.length === 0)
            {
                clearInterval(outputSlowly);
                $("#welcome").empty();
                repate();
            }

        }, $timeout);
    }



});



