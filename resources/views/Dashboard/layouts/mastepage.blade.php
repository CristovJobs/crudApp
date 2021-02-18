<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset("dashboard/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("dashboard/vendors/chartjs/Chart.min.css") }}">
    <link rel="stylesheet" href="{{ asset("dashboard/vendors/perfect-scrollbar/perfect-scrollbar.css") }}">
    <link rel="stylesheet" href="{{ asset("dashboard/css/app.css") }}">
    <link rel="shortcut icon" href="{{ asset("dashboard/images/favicon.svg") }}" type="image/x-icon">
</head>
<body>
@yield("main")
<script src="{{ asset("dashboard/js/feather-icons/feather.min.js") }}"></script>
<script src="{{ asset("dashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js") }}"></script>
<script src="{{ asset("dashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js") }}"></script>
<script src="{{ asset("dashboard/js/app.js") }}"></script>
<script src="{{ asset("dashboard/vendors/chartjs/Chart.min.js") }}"></script>
<script src="{{ asset("dashboard/vendors/apexcharts/apexcharts.min.js") }}"></script>
<script src="{{ asset("dashboard/js/main.js") }}"></script>
</body>
</html>
