$(document).ready(function() {
    // search bar
    $("#q").keyup(function() {


        $("#msg").hide();
        let q = $("#q").val();
        if (q != '') {
            $("#table").html('');
            $.ajax({
                type: "POST",
                url: "search.php",
                data: { q: q },
                success: function(data) {
                    $("#table").html(data);
                }
            });
        } else {
            // $("#table").load("includes/load.php");
            $("#table").html('');
            $.ajax({
                type: "",
                url: "",
                data: { q: q },
                success: function(data) {
                    $("#table").html(data);
                }
            });
        }
    });
});