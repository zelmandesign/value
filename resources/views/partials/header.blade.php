<header class="banner navbar navbar-expand-md navbar-dark justify-content-between">
  <div class="container">
    
    <a class="brand" href="{{ home_url('/') }}">
      {{ the_custom_logo() }}
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav mx-auto']) !!}
      @endif
      <span class="navbar-text">
        <a href="" class="btn btn-light">Button</a>
      </span>
    </div>

  </div>
</header>
