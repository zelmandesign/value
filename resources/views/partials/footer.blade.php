<footer class="content-info">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">
      {{ the_custom_logo() }}
    </a>
    <div class="row mb-5">
      <div class="col-sm-5 d-inline-flex mt-5">
        <a href=""><img src="@asset('images/facebook.svg')" alt="Facebook" class="mr-4"></a>
        <a href=""><img src="@asset('images/linkedin.svg')" alt="LinkedIn"></a>
      </div>
      <div class="col-sm-3">
        @php(dynamic_sidebar('sidebar-footer'))
      </div>
      <div class="col-sm-4">
        @php(dynamic_sidebar('sidebar-footer2'))
      </div>
    </div>
    <div class="d-flex justify-content-between copy">
      Copyright © 2020 Curabitur vulputate molestie dui eget congue.
      <div class="w-25 d-flex justify-content-between">
        <div>Privacy Policy</div>
        <div>Terms</div>
      </div>
    </div>
  </div>
</footer>
