<script>
    var page = 1;
    $(document).ready(function() {

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            page = $(this).attr('href').split('page=')[1];
            var link = $(this).attr('href').split('?')[0];
            var id = link.split('exam/')[1].split('/')[0];
            fetch_data(id, page);
        });

        function fetch_data(id, page) {
            $.ajax({
                url: "/exam/" + id + "/fetch_data?page=" + page,
                success: function(data) {
                    $('#table_data').html(data);
                }
            });
        }

    });

    function choosetheAnswer(answer) {
        var id = answer.value.split('_')[0];
        var mach = answer.value.split('_')[1];
        var dapan = answer.value.split('_')[2];
        var form_data = $(this).serialize();
        $.ajax({
            url: "/exam/" + id + "/saveAnswer?mach=" + mach + "&dapan=" + dapan,
            type: "POST",
            enctype: 'multipart/form-data',
            dataType: 'json',
            cache: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr) {
                console.log(xhr.responseText)
            }
        });
    }
</script>