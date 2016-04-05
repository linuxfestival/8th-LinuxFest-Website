@extends('layout.app')

@section('content')

    <section id="" class="container">
        <iframe src="https://docs.google.com/forms/d/1hDWpRK2cGoQmT8ielsFIsUUL3Jfekm73BodvIwqN-To/viewform?embedded=true"
                width="100%" height="1450" frameborder="0" marginheight="0" marginwidth="0">صبور باشید...
        </iframe>

        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES * * */
            var disqus_shortname = 'linuxfest';

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function () {
                var dsq = document.createElement('script');
                dsq.type = 'text/javascript';
                dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments
                powered by Disqus.</a></noscript>


    </section>

@endsection