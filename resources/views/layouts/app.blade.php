<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.banner')
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @php if (function_exists('wvrs_breadcrumbs')) wvrs_breadcrumbs() @endphp
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
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;

    ga('create', 'UA-450742-1', 'auto');

    ga('require', 'outboundLinkTracker');
    ga('require', 'socialWidgetTracker');
    ga('require', 'pageVisibilityTracker');
    ga('require', 'maxScrollTracker');

    ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <script async src='https://cdnjs.cloudflare.com/ajax/libs/autotrack/2.4.1/autotrack.js'></script>
  </body>
</html>
