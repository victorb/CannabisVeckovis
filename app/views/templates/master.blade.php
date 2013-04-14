<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1" />
    <title>Cannabis Veckovis</title>
    <link rel="stylesheet" href="{{ URL::to('components/bootstrap/docs/assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::to('components/bootstrap/docs/assets/css/bootstrap-responsive.css') }}" />
    <style>
    .alpha { margin-left: 0 !important; }
.omega { margin-right: 0 !important; }
body {
    color: white;
}

.campaign a {
    color: lightgrey;
}

.campaign a:hover {
    color: white;
}

li.disabled a {
    background-color: #F5F5F5 !important;
}
@media (min-width: 1200px) {
    #review {
         opacity: 0.5;
    }

    #review:hover {
        opacity: 1;
    }
}
</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  var pluginUrl = 
 '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
  _gaq.push(['_setAccount', 'UA-38906680-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
    <div id="wrapper" class="container-fluid">
        <div id="content" class="row-fluid">
            @yield('content')
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::to('components/jquery/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('components/jquery-backstretch/src/jquery.backstretch.js') }}"></script>
    <script>
    $(document).ready(function(){
        $.backstretch('imgs/bg.jpg');

        $('#reviewForm').submit(function(e){
            $name = $('#name');
            $email = $('#email');
            $body = $('#body');

            if($body.val() === 'Jag tycker att Cannabis Veckovis kan bli bättre på att ...') {
                _gaq.push(['_trackEvent', 'Review', 'Review without content', 'Review without content']);
                $('#vettigt').remove();
                $('#reviewForm').find('fieldset').append('<span id="vettigt">Skriv något vettigt!</span>');
            } else {
                disableReviewForm();

                var formData = {
                    'name': $name.val(),
                    'email': $email.val(),
                    'body': $body.val(),
                }

                $.ajax({
                    type: "POST",
                    url: "/review",
                    data: formData,
                    }).done(function( msg ) {
                        _gaq.push(['_trackEvent', 'Review', 'Review with content', 'Review with content']);
                        $('#review').slideUp('1000', function(){
                            $('#review').html('<h3>Tack för din feedback!</h3>');
                            $('#review').slideDown();
                        });
                });
            }
            e.preventDefault();
        });
    });

    function disableReviewForm() {
        $name.attr('disabled', 'true');
        $email.attr('disabled', 'true');
        $body.attr('disabled', 'true');
        $('.btn-primary').attr('disabled', 'true');
    }
    </script>
</body>
</html>