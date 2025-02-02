<!DOCTYPE html>
<html lang="en">


<!-- errors-403.html  21 Nov 2019 04:05:02 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>403 - ERROR</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('/assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ url('/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ url('/assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{ url('/assets/img/favicon.ico')}}' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>403</h1>
            <div class="page-description">
              You do not have access to this page.
            </div>
            <div class="page-search">
              <!-- <form>
                <div class="form-group floating-addon floating-addon-not-append">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-search"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-lg">
                        Search
                      </button>
                    </div>
                  </div>
                </div>
              </form> -->
              <div class="mt-3">
                <a href="{{url('/')}}">Back to Home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ url('/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{ url('/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ url('/assets/js/custom.js')}}"></script>
</body>


</html>