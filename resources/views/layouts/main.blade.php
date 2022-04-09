<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ Session::token() }}"> 
    <meta name="userEmail" content="{{ Auth::user()->email }}"> 
    @yield('style')
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/sidebar/style.css">

    <!----===== Boxicons CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">

    <title>Dashboard Sidebar Menu</title>
</head>

<body class="{{Auth::user()->darkMode == '1' ? 'dark' : ''}}">

    @include('sections.sidebar')

    <section class="home">
        
        @yield('body')
        
    </section>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/sidebar/script.js"></script>
    @yield('script')
</body>