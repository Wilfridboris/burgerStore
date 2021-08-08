
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/adminStyle.css">
     <script src="https://kit.fontawesome.com/da81de1a39.js" crossorigin="anonymous"></script>
</head>
<body>


    @include('layouts.NavAdmin')
   
    @yield('Post')
     @yield('dashboard')
     {{-- @yield('UpdateProduct') --}}

<script src="../js/jquery.js"></script>
<script src="../js/admin.js"></script>
</body>
</html>