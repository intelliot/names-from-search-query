
<body style="padding: 20px">

<input id="query" style="font-size: 24pt" size="64" />

<div id="names" style="padding-top: 16px; font-size: 21pt; font-family: sans-serif"></div>

<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>

<script>
$('#query').on('input', function() {
    var query = $(this).val();
    $.ajax({
        method: "GET",
        url: "names.php",
        data: { query: query }
    })
    .done(function(result) {
        $('#names').html(result);
    });
});
</script>

</body>

