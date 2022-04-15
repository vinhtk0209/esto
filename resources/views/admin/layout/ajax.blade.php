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
                    html = '<div class="alert alert-success">Thêm bài học thành công</div>';
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
                    $('.modal-title').text("Sửa chương học");
                    $('#luu').text("Sửa");
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
                        alert('Đây là khóa học trực tuyến.\nVui lòng tạo lớp học trước khi tạo bài học!');
                        document.getElementById('VIDEO').removeAttribute('required');
                        document.getElementById('LINK').removeAttribute('required');
                        document.getElementById('TGBD').removeAttribute('required');
                        document.getElementById('TGKT').removeAttribute('required');
                    } else {
                        $("#dqlchuonghoc").show();
                        if (res[1] == 'chuonghoc') {
                            alert('Vui lòng tạo chương học trước khi tạo bài học!');
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
                        alert("Đây là khóa học video.\nBạn cần tạo bài học trước để gán bài thi vào!")
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