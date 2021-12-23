<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('keyup', '#search', function() {
            var value = $(this).val();

            $.ajax({
                type: "GET",
                url: 'admin/khoahoc/search',
                data: {
                    keyword: value
                },
                dataType: "json",
                success: function(response) {
                    $('#listKH').html(response);
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
                    } else {
                        $("#dqlchuonghoc").show();
                        if (res[1] == 'chuonghoc') {
                            alert('Vui lòng tạo chương học trước khi tạo bài học!');
                            $('#dlophoc').html('');
                            $('#dchuonghoc').html('');
                            $("#dtenbai").hide();
                            $("#dvideo").hide();
                            $("#dtructuyen").hide();
                        } else {
                            $("#dtenbai").show();
                            if (res[0] == 'video') {
                                $('#dlophoc').html('');
                                $('#dchuonghoc').html(res[1]);
                                $("#dvideo").show();
                                $("#dtructuyen").hide();
                            } else {
                                $('#dlophoc').html(res[0]);
                                $('#dchuonghoc').html(res[1]);
                                $("#dvideo").hide();
                                $("#dtructuyen").show();
                            }
                        }
                    }
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
                    } 
                    else if (res == "video"){
                        $('#dbaihoc').html('');
                        $("#dtenbaithi").hide();
                        $("#dtructuyen").hide();
                        alert("Đây là khóa học video.\nBạn cần tạo bài học trước để gán bài thi vào!")
                    }
                    else {
                        $('#dbaihoc').html(res);
                        $("#dtenbaithi").show();
                        $("#dtructuyen").hide();
                    }
                }
            });
        });
    });
</script>