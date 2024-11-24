<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{$title}}</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>
            .cursor-dot {
                width: 300px;
                height: 300px;
                background: radial-gradient(circle, rgba(49,36,20,0.1) 0%, rgba(49,36,20,0) 70%);
                border-radius: 50%;
                position: fixed;
                pointer-events: none;
                transform: translate(-50%, -50%);
                transition: transform 0.1s ease;
            }

            .animate-float {
                animation: float 6s ease-in-out infinite;
            }

            @keyframes float {
                0% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-20px);
                }
                100% {
                    transform: translateY(0px);
                }
            }

            .input-wrapper {
                position: relative;
                overflow: hidden;
                transition: all 0.3s ease;
            }

            .input-wrapper::after {
                content: '';
                position: absolute;
                left: -100%;
                bottom: 0;
                width: 100%;
                height: 2px;
                background: #312414;
                transition: left 0.3s ease;
            }

            .input-wrapper:focus-within::after {
                left: 0;
            }

            .strength-very-weak {
                background: #ff4444;
                font: bold;
                box-shadow: 0 0 10px rgba(255, 68, 68, 0.2);
            }

            .strength-weak {
                background: #ffa700;
                font: bold;
                box-shadow: 0 0 10px rgba(255, 167, 0, 0.2);
            }

            .strength-medium {
                background: #ffe600;
                font: bold;
                box-shadow: 0 0 10px rgba(255, 230, 0, 0.2);
            }

            .strength-strong {
                background: #14a44d;
                font: bold;
                box-shadow: 0 0 10px rgba(20, 164, 77, 0.2);
            }

            .password-input-wrapper {
                transition: all 0.3s ease;
            }
    </style>
</head>
<body>
<div class="bg-primary">
    {{ $slot }} <!-- This is where your component content will render -->
</div>
@livewireScripts
</body>
</html>
