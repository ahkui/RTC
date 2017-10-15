<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{$title}}</title>
    <link href="css/app.css" rel="stylesheet">
</head>

<body>
    <div id="app">
        <!-- Page NavBar -->
        @include('components.nav')
        <div class="container-fulid" id="content">
            <!-- Page Content -->
            @yield('content')
        </div>
        <!-- Footer -->
        @include('components.footer')
    </div>
    <!-- Hidden -->
    <div class="scroll-top d-lg-none">
        <a class="btn btn-primary js-scroll-trigger" href="#content">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
    @yield('hidden-content')
    <!-- Bootstrap core JavaScript -->
    <script src="js/app.js"></script>
    <script>
    RTC.run();

    function Load_with_axios($this) {
        if ($($this).data('href') + '/' != window.location.href) {
            event.preventDefault();
            axios.get($($this).data('href'))
                .then(function(response) {
                    $("html, body").stop().animate({ scrollTop: 0 }, 350, 'swing');
                    $('.nav-item.active , .nav-link.active,.dropdown-item.active').removeClass('active');
                    if ($($this).hasClass('dropdown-item')) {
                        $($this).parent().parent().find('.nav-link.dropdown-toggle').addClass('active');
                        $($this).addClass('active');
                    } else {
                        $($this).addClass('active');
                    }
                    $('#content').stop().animate({ opacity: 0 }, 200, 'swing', function() {
                        $('#content').html(response.data.html).animate({ opacity: 1 }, 200, 'swing', function() {
                            if (response.data.run) RTC[response.data.run]();
                        })
                    });
                    document.getElementsByTagName("title").innerHTML = response.data.title;
                    window.history.pushState(response.data, "", $($this).data('href'));
                })
                .catch(function(error) {});
            return false;
        } else if ($this.hash) {
            var target = $($this.hash);
            target = target.length ? target : $('[name=' + $this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: (target.offset().top - 48)
                }, 1000, "easeInOutExpo");
                return false;
            }
        } else {
            var target = $($this.href.replace(window.location.href, ''));
            if (target.length) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: (target.first().offset().top - 48)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    }
    window.onpopstate = function(e) {
        if (e.state) {
            document.getElementById("content").innerHTML = e.state.html;
            document.getElementsByTagName("title").innerHTML = e.state.title;
        }
    };
    </script>
    @yield('addon-script')
</body>

</html>