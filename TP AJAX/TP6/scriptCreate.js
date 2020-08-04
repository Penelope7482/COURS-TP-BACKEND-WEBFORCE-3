(function () {

    $("#createButton").on('click', function () {

        let value = $("#value").val(); ;
        let title = $("#title").val();
        
        $.ajax({
            url: 'https://stats.naminilamy.fr/',
            type: 'post',
            dataType: 'json',
            data: JSON.stringify({'value' : value, 'title' : title}),
            contentType: 'application/json',
        });
    });
})();



