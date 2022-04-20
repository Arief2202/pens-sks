<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ Session::token() }}"> 
    <meta name="userEmail" content="{{ Auth::user()->email }}"> 
    @yield('style')
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="http://sks-pens.site/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://sks-pens.site/css/global.css">
    <link rel="stylesheet" href="http://sks-pens.site/css/sidebar/style.css">
    

    <!----===== Boxicons CSS ===== -->
    <link rel="stylesheet" href="http://sks-pens.site/boxicons/css/boxicons.min.css">

    <title>Dashboard Sidebar Menu</title>
</head>

<body class="{{Auth::user()->darkMode == '1' ? 'dark' : ''}}">
    <?php $loggedID = Auth::user()->id?>
    @include('sections.sidebar')

    <section class="home">
        
        @yield('body')
        
    </section>

    <script type="text/javascript" src="http://sks-pens.site/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="http://sks-pens.site/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="http://sks-pens.site/js/sidebar/script.js"></script>
    <script src="http://sks-pens.site/boxicons/boxicons.js"></script>
    @yield('script')
</body>