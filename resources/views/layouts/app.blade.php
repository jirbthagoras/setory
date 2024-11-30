<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @vite('resources/css/app.css')
    <style>
        .card:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
    <script src="/quiz.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>
{{$slot}}
</html>
