<div class="hero">
  @hasfield('slider')
    <div class="owl-carousel owl-theme" id="hero-slider">
      @fields('slider')
        <div class="item d-flex align-items-end" style="background: url('@sub('slider_background_image', 'url')') top center no-repeat;"> 
          <div class="container">
            <div class="row item-inside">
              <div class="col d-flex align-items-center">
                <div class="hero-text-wrapper">
                  <div class="hero-heading">@sub('hero_heading')</div>
                  <div class="hero-subheading mt-3 mb-5">@sub('hero_subheading')</div>
                  <a href="@sub('hero_call_to_action', 'url')" class="hero-call-to-action btn btn-lg btn-warning">@sub('hero_call_to_action', 'title')</a>
                </div>
              </div>
              <div class="col d-none d-md-flex align-items-center justify-content-center">
                <img src="@sub('hero_image', 'url')" alt="@sub('hero_image', 'alt')">
              </div>
            </div>
          </div>
        </div>
      @endfields
    </div>
  @endfield
</div>
