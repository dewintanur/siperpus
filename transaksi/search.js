var nil;
$("option").click(function() {
    var val = $(this).attr("value");
    nil = val;
    $.post("search.php", {
            cari: nil,
        },
        function(data, status) {
            $(".ser").html(data);
        });
});
$("#key").keyup(function() {
    var val = $(this).val();
    nil = val;
    $.post("search.php", {
            cari: nil,
        },
        function(data, status) {
            $(".ser").html(data);
        });
});
