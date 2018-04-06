<!doctype html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>

<body>

@include('layout.partials.nav')

<main role="main" class="container">

    <div class="starter-template">
        <div class="row">
            <div class="col-sm-8">
                @yield('content')
            </div>
        </div>
    </div>

</main><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@include('layout.partials.footer-scripts');
</body>
</html>