@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/relation" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id">
        </div>
        <div class="form-group">
            <label for="img">IMG</label>
            <input type="file" class="form-control" id="img" name="img" required>
        </div>
        <div class="form-group">
            <label for="img_group">IMG</label>
            <input type="file" class="form-control" id="img_group" name="img_group[]" multiple>
        </div>
        <div class="form-group">
            <label for="context">Context</label>
            <textarea input type="text" class="form-control" id="context" name="context"></textarea>
        </div>

        <button type="submit" class="btn btn-primary submit">新增</button>

    </form>

</div>

@endsection

@section('js')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#context').summernote();
    })

    // $.upload = function (file) {
    //         let out = new FormData();
    //         out.append('file', file, file.name);

    //         $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             }
    //         });

    //         $.ajax({
    //             method: 'POST',
    //             url: '/relation/ajaxupload',
    //             contentType: false,
    //             cache: false,
    //             processData: false,
    //             data: out,
    //             success: function (img) {
    //                 $('#context').summernote('insertImage', img);
    //             },
    //             error: function (jqXHR, textStatus, errorThrown) {
    //                 console.error(textStatus + " " + errorThrown);
    //             }
    //         });
    //     }





    // $.ajaxSetup({
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             }
    //         });

</script>
@endsection
