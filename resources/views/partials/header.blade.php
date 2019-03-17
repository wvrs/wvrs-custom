<nav class="navbar navbar-expand-lg navbar-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.png')" alt="{{ get_bloginfo('name', 'display') }}" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu( array(
        'theme_location'  => 'primary_navigation',
        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbar-collapse-1',
        'menu_class'      => 'navbar-nav ml-auto my-2 my-lg-0',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
      ) ); !!}
    @endif
  </div>
</nav>
