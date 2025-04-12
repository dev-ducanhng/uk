<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/recapcha.css') }}" rel="stylesheet">
    <script src="{{ asset('js/recapcha.js') }}" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container text-center mb-5 mt-5">
        <div class="row">
            <div class="col-md-12">
                <h4><a href="https://github.com/ArgoZhang/SliderCaptcha" target="_blank">Slider Captcha</a></h4>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-5">
              <div class="slidercaptcha card">
                        <div class="card-header">
                            <span>Please complete security verification!</span>
                        </div>
                        <div class="card-body">
                            <div id="captcha"></div></div>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
    
</body>
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //   var captcha = sliderCaptcha({
    //     id: 'captcha',
    //     loadingText: 'Loading...',
    //     failedText: 'Try again',
    //     barText: 'Slide right to fill',
    //     repeatIcon: 'fa fa-redo',
    //     onSuccess: function() {
    //       setTimeout(function() {
    //         alert('Your captcha is successfully verified.');
    //         captcha.reset();
    //       }, 1000);
    //     },
    //     setSrc: function() {
    //       return 'https://picsum.photos/280/155?random=' + Math.random();
    //     },
    //   });
    // });
  </script>
</html>