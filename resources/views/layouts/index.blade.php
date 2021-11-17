<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <!-- Favicons -->
    <link href="{{asset('/img/favicon.png')}}" rel="icon">
    <link href="{{asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    
</head>

<body>
    @yield('content')
    <style>
		* {
			margin:10px auto;
			text-align: center;
		}
	</style>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>



    <script>
    ClassicEditor
            .create( document.querySelector( '.editor' ), {
                
                licenseKey: '',
                
                
                
            } )
            .then( editor => {
                window.editor = editor;
        
                
                
                
            } )
            .catch( error => {
                console.error( 'Oops, something went wrong!' );
                console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                console.warn( 'Build id: luvk6kro05q3-unt8fr6ckh47' );
                console.error( error );
            } );
    </script>
</body>

</html>