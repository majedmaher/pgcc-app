<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{asset('imgs/basic/logo.png')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
<!--===============================================================================================-->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@livewireStyles

</head>
<body>
	
    {{ isset($slot) ? $slot : null }}
	
    
        @livewireScripts

        <script>
            Livewire.on('alertError', (message) => {
                Swal.fire({
                    title: message,
                    icon: 'error',
                    confirmButtonText: '{{__('main.ok')}}'
                })
            })
        
        </script>

    </body>
    </html>