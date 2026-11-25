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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VVDJCSCQ42"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VVDJCSCQ42');
    </script>
  </body>
</html>
