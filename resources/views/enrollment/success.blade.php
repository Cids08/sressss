<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

  <meta name="description" content="San Roque Elementary School - Quality Education" />
  <meta name="keywords" content="education, elementary, school, learning" />

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>Enrollment Success</title>

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9fa;
      color: #333;
      margin: 0;
      padding: 0;
    }

    /* Navbar placeholder for demo */
    .navbar-placeholder {
      background-color: #007b5e;
      color: white;
      padding: 15px 0;
      text-align: center;
    }

    .container {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    .py-5 {
      padding-top: 3rem !important;
      padding-bottom: 3rem !important;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }

    .justify-content-center {
      justify-content: center !important;
    }

    .col-md-8 {
      position: relative;
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
    }

    .card {
      border: 1px solid #ddd;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      margin-bottom: 20px;
    }

    .card-header {
      background-color: #28a745;
      color: white;
      text-align: center;
      padding: 20px;
    }

    .card-body {
      padding: 20px;
    }

    .text-center {
      text-align: center !important;
    }

    .text-left {
      text-align: left !important;
    }

    .py-4 {
      padding-top: 1.5rem !important;
      padding-bottom: 1.5rem !important;
    }

    .icon-check-circle {
      font-size: 64px;
      color: #28a745;
    }

    h2 {
      margin-bottom: 0;
      font-size: 1.8rem;
    }

    h3 {
      font-weight: 600;
      color: #004085;
      font-size: 1.5rem;
      margin-top: 1rem;
    }

    h4 {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .lead {
      font-size: 1.2rem;
      color: #555;
    }

    .alert-info {
      background-color: #d1ecf1;
      border-color: #bee5eb;
      color: #0c5460;
      padding: 15px;
      border-radius: 5px;
    }

    ol {
      padding-left: 20px;
      margin-bottom: 20px;
    }

    ol li {
      font-size: 1.1rem;
      margin-bottom: 10px;
      color: #333;
    }

    .btn-primary {
      background-color: #0056b3;
      border-color: #004085;
      padding: 10px 20px;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 5px;
      transition: 0.3s;
      color: white;
      text-decoration: none;
      display: inline-block;
    }

    .btn-primary:hover {
      background-color: rgb(1, 27, 54);
      border-color: #003366;
    }

    .mt-3 {
      margin-top: 1rem !important;
    }

    .mt-4 {
      margin-top: 1.5rem !important;
    }

    .mt-5 {
      margin-top: 3rem !important;
    }

    .mb-0 {
      margin-bottom: 0 !important;
    }

    /* Footer placeholder for demo */
    .footer-placeholder {
      background-color: #333;
      color: white;
      padding: 20px 0;
      text-align: center;
      margin-top: 30px;
    }

    /* Responsive styles */
    @media (min-width: 576px) {
      .container {
        max-width: 540px;
      }
    }

    @media (min-width: 768px) {
      .container {
        max-width: 720px;
      }
      .col-md-8 {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
      }
    }

    @media (min-width: 992px) {
      .container {
        max-width: 960px;
      }
    }

    @media (min-width: 1200px) {
      .container {
        max-width: 1140px;
      }
    }

    @media (max-width: 767.98px) {
      h2 {
        font-size: 1.5rem;
      }
      h3 {
        font-size: 1.3rem;
      }
      .lead {
        font-size: 1.1rem;
      }
      ol li {
        font-size: 1rem;
      }
      .icon-check-circle {
        font-size: 48px;
      }
      .card-header {
        padding: 15px;
      }
      .card-body {
        padding: 15px;
      }
    }

    /* PreLoader */
    #overlayer {
      width: 100%;
      height: 100%;
      position: fixed;
      z-index: 1;
      background: #fff;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    .loader {
      z-index: 2;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .spinner-border {
      display: inline-block;
      width: 2rem;
      height: 2rem;
      vertical-align: text-bottom;
      border: 0.25em solid currentColor;
      border-right-color: transparent;
      border-radius: 50%;
      animation: spinner-border .75s linear infinite;
    }

    .sr-only {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border: 0;
    }

    @keyframes spinner-border {
      to { transform: rotate(360deg); }
    }
</head>
<body>

  @include('layouts.partials.navbar')

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header bg-success text-white">
            <h2 class="mb-0 text-center">Enrollment Submitted Successfully!</h2>
          </div>
          <div class="card-body text-center">
            <div class="py-4">
              <i class="icon-check-circle" style="font-size: 64px; color: #28a745;"></i>
              <h3 class="mt-3">Thank you for enrolling with San Roque Elementary School</h3>
              <p class="lead">Your enrollment form has been submitted successfully.</p>

              <div class="alert alert-info mt-4">
                @if(session('enrollment'))
                  <p>A confirmation email has been sent to: <strong>{{ session('enrollment')['email'] }}</strong></p>
                  <p class="mb-0">Please check your email for important next steps.</p>
                @else
                  <p>Your enrollment has been submitted. Please check your email for confirmation.</p>
                @endif

                <div class="mt-4 text-left">
                  <h4>What happens next?</h4>
                  <ol>
                    <li>Bring original copies of the required documents to the school office</li>
                    <li>School staff will review your application</li>
                    <li>You will be contacted for orientation details</li>
                  </ol>
                </div>

                <div class="mt-5 text-center">
                  <a href="{{ route('home') }}" class="btn btn-primary">Return to Homepage</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.partials.footer')

  <!-- PreLoader -->
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('js/nav.active.js') }}"></script>
  <script src="{{ asset('js/sres-scroll.js') }}"></script>

</body>
</html>
