<script type="text/javascript">
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var value = $(this).val();

            $.ajax({
                type: "GET",
                url: 'admin/khoahoc/search?keyword=' + value,
                dataType: "json",
                processData: false,
                success: function(response) {
                    $('#listKH').html(response[0]);
                    if (response[1] == 'none')
                        $('#paginate').hide();
                    else $('#paginate').show();
                }
            });
        });

        $('#search').on('keyup', function() {
            var value = $(this).val();

            $.ajax({
                type: "GET",
                url: 'admin/lophoc/search?keyword=' + value,
                dataType: "json",
                processData: false,
                success: function(response) {
                    $('#listLH').html(response[0]);
                    if (response[1] == 'none')
                        $('#paginate').hide();
                    else $('#paginate').show();
                }
            });
        });

        $('#search').on('keyup', function() {
            var value = $(this).val();

            $.ajax({
                type: "GET",
                url: 'admin/chuonghoc/search?keyword=' + value,
                dataType: "json",
                processData: false,
                success: function(response) {
                    $('#listCH').html(response[0]);
                    if (response[1] == 'none')
                        $('#paginate').hide();
                    else $('#paginate').show();
                }
            });
        });

        $('#search').on('keyup', function() {
            var value = $(this).val();

            $.ajax({
                type: "GET",
                url: 'admin/baihoc/search?keyword=' + value,
                dataType: "json",
                processData: false,
                success: function(response) {
                    $('#listBH').html(response[0]);
                    if (response[1] == 'none')
                        $('#paginate').hide();
                    else $('#paginate').show();
                }
            });
        });

        $('#search').on('keyup', function() {
            var value = $(this).val();

            $.ajax({
                type: "GET",
                url: 'admin/baithi/search?keyword=' + value,
                dataType: "json",
                processData: false,
                success: function(response) {
                    $('#listBT').html(response[0]);
                    if (response[1] == 'none')
                        $('#paginate').hide();
                    else $('#paginate').show();
                }
            });
        });

        $('#search').on('keyup', function() {
            var value = $(this).val();

            $.ajax({
                type: "GET",
                url: 'admin/baithi/them/{id}/nganhangcauhoi/search?keyword=' + value,
                dataType: "json",
                processData: false,
                success: function(response) {
                    $('#listnganhangcauhoi').html(response[0]);
                    if (response[1] == 'none')
                        $('#paginate').hide();
                    else $('#paginate').show();
                },
                error: function(xhr) {
                    console.log(xhr.responseText)
                }
            });
        });

        $('#sample_form').on('submit', function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url: "admin/khoahoc/them/baihoc",
                type: "POST",
                data: form_data,
                enctype: 'multipart/form-data',
                dataType: 'json',
                cache: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    html = '<div class="alert alert-success">Th??m b??i h???c th??nh c??ng</div>';
                    $('#form_result').html(html);
                    $('#listbaihoc').append(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText)
                }
            });
        });

        $('#themkhoahoc').on('submit', function(event) {
            event.preventDefault();
            var form_data = $(this).serialize();

            $.ajax({
                url: "admin/khoahoc/them",
                type: "POST",
                data: form_data,
                enctype: 'multipart/form-data',
                dataType: "json",
                cache: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function() {},
                error: function(xhr) {
                    console.log(xhr.responseText)
                }
            });
        });


        $(document).on('click', '.edit', function() {
            var id = $(this).attr('id');
            $.ajax({
                url: "admin/chuonghoc/sua/" + id,
                type: "GET",
                dataType: "json",
                cache: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(html) {
                    $('#sample_form_chuonghoc').attr('action', "admin/chuonghoc/sua/" + id);
                    $('#TENCHUONG').val(html.chuonghoc.TENCHUONG);
                    $('#MAKHchuong').val(html.chuonghoc.MAKH);
                    $('.modal-title').text("S???a ch????ng h???c");
                    $('#luu').text("S???a");
                }
            })
        });

        $(document).on('change', '#MAKH', function() {
            var value = document.getElementById('MAKH').selectedOptions[0].value;
            $.ajax({
                type: "POST",
                url: "admin/baihoc/them/hinhthuc?key=" + value,
                enctype: 'multipart/form-data',
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    if (res[0] == 'tructuyen') {
                        $('#dlophoc').html('');
                        $('#dchuonghoc').html('');
                        $("#dtenbai").hide();
                        $("#dvideo").hide();
                        $("#dtructuyen").hide();
                        $("#dqlchuonghoc").hide();
                        alert('????y l?? kh??a h???c tr???c tuy???n.\nVui l??ng t???o l???p h???c tr?????c khi t???o b??i h???c!');
                        document.getElementById('VIDEO').removeAttribute('required');
                        document.getElementById('LINK').removeAttribute('required');
                        document.getElementById('TGBD').removeAttribute('required');
                        document.getElementById('TGKT').removeAttribute('required');
                    } else {
                        $("#dqlchuonghoc").show();
                        if (res[1] == 'chuonghoc') {
                            alert('Vui l??ng t???o ch????ng h???c tr?????c khi t???o b??i h???c!');
                            $('#dlophoc').html('');
                            $('#dchuonghoc').html('');
                            $("#dtenbai").hide();
                            $("#dvideo").hide();
                            $("#dtructuyen").hide();
                            document.getElementById('VIDEO').removeAttribute('required');
                            document.getElementById('LINK').removeAttribute('required');
                            document.getElementById('TGBD').removeAttribute('required');
                            document.getElementById('TGKT').removeAttribute('required');
                        } else {
                            $("#dtenbai").show();
                            if (res[0] == 'video') {
                                $('#dlophoc').html('');
                                $('#dchuonghoc').html(res[1]);
                                $("#dvideo").show();
                                $("#dtructuyen").hide();
                                document.getElementById('VIDEO').setAttribute('required');
                                document.getElementById('LINK').removeAttribute('required');
                                document.getElementById('TGBD').removeAttribute('required');
                                document.getElementById('TGKT').removeAttribute('required');
                            } else {
                                $('#dlophoc').html(res[0]);
                                $('#dchuonghoc').html(res[1]);
                                $("#dvideo").hide();
                                $("#dtructuyen").show();
                                document.getElementById('VIDEO').removeAttribute('required');
                                document.getElementById('LINK').setAttribute('required');
                                document.getElementById('TGBD').setAttribute('required');
                                document.getElementById('TGKT').setAttribute('required');
                            }
                        }
                    }
                }
            });
        });

        $(document).on('change', '#MADMcauhoi', function() {
            var value = document.getElementById('MADMcauhoi').selectedOptions[0].value;
            $.ajax({
                type: "POST",
                url: "admin/baithi/them/-1/nganhangcauhoi/monhoc?key=" + value,
                enctype: 'multipart/form-data',
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    $('#listnganhangcauhoi').html(res);
                }
            });
        });

        $(document).on('change', '#MAKHbaithi', function() {
            var value = document.getElementById('MAKHbaithi').selectedOptions[0].value;
            $.ajax({
                type: "POST",
                url: "admin/baithi/them/1/hinhthuc?key=" + value,
                enctype: 'multipart/form-data',
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    if (res == 'tructuyen') {
                        $('#dbaihoc').html('');
                        $("#dtenbaithi").show();
                        $("#dtructuyen").show();
                        document.getElementById('TENBT').setAttribute('required');
                    } else if (res == "video") {
                        $('#dbaihoc').html('');
                        $("#dtenbaithi").hide();
                        $("#dtructuyen").hide();
                        document.getElementById('TENBT').removeAttribute('required');
                        alert("????y l?? kh??a h???c video.\nB???n c???n t???o b??i h???c tr?????c ????? g??n b??i thi v??o!")
                    } else {
                        $('#dbaihoc').html(res);
                        $("#dtenbaithi").show();
                        $("#dtructuyen").hide();
                    }
                }
            });
        });
    });
</script>