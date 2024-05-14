<!DOCTYPE html>

<html>

<head>

    <title>Laravel 9 Drag and Drop File Upload with Dropzone JS - ItSolutionStuff.com</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

</head>

<body>

    

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <h1>Laravel 9 Drag and Drop File Upload with Dropzone JS - ItSolutionStuff.com</h1>

    

            <div class="upload__box">
  <div class="upload__btn-box">
    <label class="upload__btn">
      <p>Upload images</p>
      <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
    </label>
  </div>
  <div class="upload__img-wrap"></div>
</div>

        </div>

    </div>

</div>

    

<script type="text/javascript">

  

        Dropzone.autoDiscover = false;

  

        var dropzone = new Dropzone('#image-upload', {

              thumbnailWidth: 200,

              maxFilesize: 1,

              acceptedFiles: ".jpeg,.jpg,.png,.gif"

            });

  

</script>

    

</body>

</html>