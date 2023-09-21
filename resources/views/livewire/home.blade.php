<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='{{ asset('css/app.css') }}'>
    <script src='{{ asset('js/app.js') }}'></script>
    <livewire:styles />
    <livewire:scripts />
</head>

<body>
    @if (session()->has('success'))
        <livewire:alert />
    @endif
    <div class='flex flex-col gap-5 bg-gray-200 p-8'>
        <livewire:counter />
        @foreach ($posts as $post)
            <livewire:post-card :post='$post' />    
        @endforeach
    </div>
</body>

</html>