<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    <script>
    !function(w,h,e,a,t,o,n){w.GoogleAnalyticsObject=e;w[e]||(w[e]=function(){
    (w[e].q=w[e].q||[]).push(arguments)});w[e].l=+new Date;o=h.createElement(a);
    n=h.getElementsByTagName(a)[0];o.src=t;n.parentNode.insertBefore(o,n)}
    (window,document,'ga','script','//www.google-analytics.com/analytics.js');

    ga('create', 'UA-450742-1', 'www.wvrs.org');
    ga('send', 'pageview');
    </script>
  </body>
</html>
