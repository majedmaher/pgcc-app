<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @stack('seo')

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.5/lottie.min.js"></script>
        @livewireStyles
        @stack('styles')

      </head>
    <body {{app()->getLocale() == 'en' ? 'class=ltr' : ''}}>
    
        <livewire:frontend.navbar />

        {{ isset($slot) ? $slot : null }}

        <livewire:frontend.footer />

        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>        <script>
            lottie.loadAnimation({
                container: document.getElementById('animation-container'), // المكان الذي ستظهر فيه الأيقونة
                renderer: 'svg', // أو يمكن استخدام 'canvas' أو 'html'
                loop: true, // لتكرار الرسوم المتحركة
                autoplay: true, // لتشغيل الرسوم تلقائيًا
                path: '{{asset('imgs/basic/scrollDown.json')}}' // مسار الملف الذي يحتوي على الرسوم المتحركة
            });

            lottie.loadAnimation({
                container: document.getElementById('back-to-top'), // المكان الذي ستظهر فيه الأيقونة
                renderer: 'svg', // أو يمكن استخدام 'canvas' أو 'html'
                loop: true, // لتكرار الرسوم المتحركة
                autoplay: true, // لتشغيل الرسوم تلقائيًا
                path: '{{asset('imgs/basic/arrowUp.json')}}' // مسار الملف الذي يحتوي على الرسوم المتحركة
            });
        </script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        @stack('scripts')
        <script src="{{asset('assets/frontend/main.js')}}"></script>
        <script>
            Livewire.on('alertSuccess', (message) => {
                Toastify({
                text: message,
                duration: 3000,
                destination: "https://github.com/majedmaher",
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function(){} // Callback after click
                }).showToast();
            })
        
        </script>
</body>
</html>