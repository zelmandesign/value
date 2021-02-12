<section class="section-top mt-5 container">
  <div class="text-center pb-5">
    <div class="heading mb-3">@field('section_1_heading')</div>
    <p>@field('section_1_subheading')</p>
  </div>
  @group('picture_&_text_1')
    <div class="row mt-5 mb-5 pb-5">
      @hassub('image')
        <div class="col">
          <img src="@sub('image', 'url')" alt="@sub('image', 'alt')" class="img-fluid">
        </div>
      @endsub
      @hassub('title')
        <div class="col d-flex align-items-center">
          <div class="col-inside">
            <div class="title mb-4 ml-3">@sub('title')</div>
            <div class="sec-content">
              @sub('text')
            </div>
          </div>
        </div>
      @endsub
    </div>
  @endgroup

  @group('picture_&_text_2')
    <div class="row mt-5 mb-5 pb-5">
      @hassub('title')
        <div class="col d-flex align-items-center">
          <div class="col-inside">
            <div class="title mb-4 ml-3">@sub('title')</div>
            <div class="sec-content">
              @sub('text')
            </div>
          </div>
        </div>
      @endsub
      @hassub('image')
        <div class="col">
          <img src="@sub('image', 'url')" alt="@sub('image', 'alt')" class="img-fluid">
        </div>
      @endsub
    </div>
  @endgroup
</section>

<section class="section-bottom mt-5 pb-5 container">
  @hasfield('section_bottom_title')
    <div class="heading text-center mb-5">@field('section_bottom_title')</div>
  @endfield
  
  @hasfield('cards')
    <div class="row cards mb-5">
      @fields('cards')
        <div class="col-md d-flex flex-column text-center">
          <div class="flex-wrapper mb-auto">
            <img src="@sub('bottom_image', 'url')" alt="@sub('bottom_image', 'alt')" class="mb-4">  
            <div class="heading mb-3">@sub('heading')</div>
            <div class="bottom-text">
              @sub('bottom_text')
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <a href="@sub('button', 'url')" class="btn btn-danger">@sub('button', 'title')</a>
          </div>
        </div>
      @endfields
    </div>
  @endfield
</section>

<section class="posts-slider mt-5 pt-5">
  @hasfield('posts_slider_heading')
    <div class="heading text-center mb-5">@field('posts_slider_heading')</div>
  @endfield

  @query([
    'post_type' => 'post',
    'posts_per_page' => -1
  ])

  @php
    $count = 0;
  @endphp

  <div class="owl-carousel owl-theme" id="posts-slider">
    @posts
      @php
        $count++;
        if($count < 10) {
          $count = '0' . $count;
        } else {
          $count = $count;
        }
      @endphp
      <div class="post pl-2 pr-2 text-center text-md-left">
        @thumbnail('full')
        <div class="author mt-2 mb-2">@published by @author</div>
        <h2 class="entry-title">{{ $count }} / @title</h2>
        <div class="entry-content">
          @content
        </div>
      </div>
    @endposts
  </div>
</section>