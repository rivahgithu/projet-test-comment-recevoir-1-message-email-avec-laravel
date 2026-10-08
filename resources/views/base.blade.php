<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>

    <nav class="bg-gray-900 p-4 text-white flex justify-between space-x-4">
      <ul>
        <li>
            <a href="/">Home</a>
        </li>
      </ul>

      <a href="{{route('login')}}">
        <box-icon class="fill-white" name='user-circle'></box-icon>
      </a>
    </nav>

    <div>
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>