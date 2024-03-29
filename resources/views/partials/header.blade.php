<!-- Start Navbar -->

<!-- Site Logo here -->
<a href="{{ home_url('/') }}" class="text-decoration-none inline-block mx-auto ampstart-headerbar-home-link  ">
  <div class="ampstart-headerbar-title mx-auto ">{{ get_bloginfo('name', 'display') }}</div>
</a>

<header class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr4">
  <div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger md-hide lg-hide pr2">☰</div>
  <a href="{{ home_url('/') }}" class="text-decoration-none inline-block mx-auto ampstart-headerbar-home-link  ">
    <div class="ampstart-headerbar-title mx-auto ">{{ get_bloginfo('name', 'display') }}</div>
  </a>
  <nav class="ampstart-headerbar-nav ampstart-nav xs-hide sm-hide">
    <ul class="list-reset center m0 p0 flex justify-center nowrap">
      <li class="ampstart-nav-item ampstart-nav-dropdown relative">
        
<!-- Start Dropdown -->
        <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown absolute top-0 left-0 right-0 bottom-0">
        <section>
          <header>Services</header>
          <ul class="ampstart-dropdown-items list-reset m0 p0">
              <li class="ampstart-dropdown-item">
                <a href="#" class="text-decoration-none">Service 1</a>
              </li>
              <li class="ampstart-dropdown-item">
                <a href="#" class="text-decoration-none">Service 2</a>
              </li>
          </ul>
        </section>
        </amp-accordion>
        
<!-- End Dropdown -->
      </li>

      <li class="ampstart-nav-item "><a href="{{ home_url('/about') }}" class="text-decoration-none block">About</a></li>
      <li class="ampstart-nav-item "><a href="{{ home_url('/window-prices') }}" class="text-decoration-none block">Window Prices</a></li>
      <li class="ampstart-nav-item "><a href="{{ home_url('/glazing') }}" class="text-decoration-none block">Glazing</a></li>
    </ul>
  </nav>
    <!--
      TODO: currently "fixeditems" is an array, therefore it's not possible to
      add additional classes to it. An alternative solution would be to make it
      an oject, with a "classes" and "items" sub-properties:
     "fixeditems": {
       "classes": "col-3",
       "items": [{
         "link": {
           "url": "mailto:contact@lune.com",
           "text": "—contact@lune.com",
           "classes": "xs-small sm-hide h6 bold"
         }
       }]
     }
     -->
    <div class="ampstart-headerbar-fixed center m0 p0 flex justify-center nowrap ">
      <div class="mr2">
      </div>
        <a href="#" class="text-decoration-none mr2 ampstart-headerbar-fixed-link ">
          
          <div class="ampstart-headerbar-icon-wrapper relative"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" overflow="visible"><circle fill="none" stroke="#000" stroke-width="1.68" stroke-miterlimit="10" cx="4.67" cy="4.67" r="3.83"></circle><path fill="none" stroke="#000" stroke-width="1.78" stroke-linecap="round" stroke-miterlimit="10" d="M7.258 7.77l2.485 2.485"></path></svg></div>
        </a>
    </div>
</header>

<!-- Start Sidebar -->
<amp-sidebar id="header-sidebar" class="ampstart-sidebar px3  md-hide lg-hide " layout="nodisplay">
  <div class="flex justify-start items-center ampstart-sidebar-header">
    <div role="button" aria-label="close sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
  </div>
  <nav class="ampstart-sidebar-nav ampstart-nav">
    <ul class="list-reset m0 p0 ampstart-label">
      <li class="ampstart-nav-item land-see-sidebar-nav-item ampstart-title-sm bold"><a class="ampstart-nav-link" href="{{ home_url('/window-services') }}">Window Services</a></li>
      <li class="ampstart-nav-item ampstart-nav-dropdown relative ">

        <!-- Start Dropdown-inline -->
        <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown">
          <section expanded="">
            <header>Services</header>
            <ul class="ampstart-dropdown-items list-reset m0 p0">
                <li class="ampstart-dropdown-item"><a href="stories.amp.html" class="text-decoration-none">All</a></li>
                <li class="ampstart-dropdown-item"><a href="stories.amp.html?category=design#land-see-design" class="text-decoration-none">Design</a></li>
                <li class="ampstart-dropdown-item"><a href="stories.amp.html?category=fashion#land-see-fashion" class="text-decoration-none">Fashion</a></li>
                <li class="ampstart-dropdown-item"><a href="stories.amp.html?category=interiors#land-see-interiors" class="text-decoration-none">Interiors</a></li>
                <li class="ampstart-dropdown-item"><a href="stories.amp.html?category=arts-culture#land-see-arts-culture" class="text-decoration-none">Arts &amp; Culture</a></li>
                <li class="ampstart-dropdown-item"><a href="stories.amp.html?category=popular#land-see-popular" class="text-decoration-none">Popular</a></li>
            </ul>
          </section>
        </amp-accordion>
        <!-- End Dropdown-inline -->
      </li>
      <li class="ampstart-nav-item land-see-sidebar-nav-item ampstart-title-sm bold"><a class="ampstart-nav-link" href="{{ home_url('/about') }}">About</a></li>
      <li class="ampstart-nav-item land-see-sidebar-nav-item ampstart-title-sm bold"><a class="ampstart-nav-link" href="{{ home_url('/window-prices') }}">Window Prices</a></li>
      <li class="ampstart-nav-item land-see-sidebar-nav-item ampstart-title-sm bold"><a class="ampstart-nav-link" href="{{ home_url('/glazing') }}">Glazing</a></li>
    </ul>
  </nav>

  <!-- Socail Link -->
  <ul class="ampstart-social-follow list-reset flex justify-around items-center flex-wrap m0 mb4">
      <li>
          <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.2" viewBox="0 0 53 49"><title>Twitter</title><path d="M45 6.9c-1.6 1-3.3 1.6-5.2 2-1.5-1.6-3.6-2.6-5.9-2.6-4.5 0-8.2 3.7-8.2 8.3 0 .6.1 1.3.2 1.9-6.8-.4-12.8-3.7-16.8-8.7C8.4 9 8 10.5 8 12c0 2.8 1.4 5.4 3.6 6.9-1.3-.1-2.6-.5-3.7-1.1v.1c0 4 2.8 7.4 6.6 8.1-.7.2-1.5.3-2.2.3-.5 0-1 0-1.5-.1 1 3.3 4 5.7 7.6 5.7-2.8 2.2-6.3 3.6-10.2 3.6-.6 0-1.3-.1-1.9-.1 3.6 2.3 7.9 3.7 12.5 3.7 15.1 0 23.3-12.6 23.3-23.6 0-.3 0-.7-.1-1 1.6-1.2 3-2.7 4.1-4.3-1.4.6-3 1.1-4.7 1.3 1.7-1 3-2.7 3.6-4.6" class="ampstart-icon ampstart-icon-twitter"></path></svg></a>
      </li>
      <li>
          <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23.6" viewBox="0 0 56 55"><title>Facebook</title><path d="M47.5 43c0 1.2-.9 2.1-2.1 2.1h-10V30h5.1l.8-5.9h-5.9v-3.7c0-1.7.5-2.9 3-2.9h3.1v-5.3c-.6 0-2.4-.2-4.6-.2-4.5 0-7.5 2.7-7.5 7.8v4.3h-5.1V30h5.1v15.1H10.7c-1.2 0-2.2-.9-2.2-2.1V8.3c0-1.2 1-2.2 2.2-2.2h34.7c1.2 0 2.1 1 2.1 2.2V43" class="ampstart-icon ampstart-icon-fb"></path></svg></a>
      </li>
      <li>
          <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 54 54"><title>instagram</title><path d="M27.2 6.1c-5.1 0-5.8 0-7.8.1s-3.4.4-4.6.9c-1.2.5-2.3 1.1-3.3 2.2-1.1 1-1.7 2.1-2.2 3.3-.5 1.2-.8 2.6-.9 4.6-.1 2-.1 2.7-.1 7.8s0 5.8.1 7.8.4 3.4.9 4.6c.5 1.2 1.1 2.3 2.2 3.3 1 1.1 2.1 1.7 3.3 2.2 1.2.5 2.6.8 4.6.9 2 .1 2.7.1 7.8.1s5.8 0 7.8-.1 3.4-.4 4.6-.9c1.2-.5 2.3-1.1 3.3-2.2 1.1-1 1.7-2.1 2.2-3.3.5-1.2.8-2.6.9-4.6.1-2 .1-2.7.1-7.8s0-5.8-.1-7.8-.4-3.4-.9-4.6c-.5-1.2-1.1-2.3-2.2-3.3-1-1.1-2.1-1.7-3.3-2.2-1.2-.5-2.6-.8-4.6-.9-2-.1-2.7-.1-7.8-.1zm0 3.4c5 0 5.6 0 7.6.1 1.9.1 2.9.4 3.5.7.9.3 1.6.7 2.2 1.4.7.6 1.1 1.3 1.4 2.2.3.6.6 1.6.7 3.5.1 2 .1 2.6.1 7.6s0 5.6-.1 7.6c-.1 1.9-.4 2.9-.7 3.5-.3.9-.7 1.6-1.4 2.2-.7.7-1.3 1.1-2.2 1.4-.6.3-1.7.6-3.5.7-2 .1-2.6.1-7.6.1-5.1 0-5.7 0-7.7-.1-1.8-.1-2.9-.4-3.5-.7-.9-.3-1.5-.7-2.2-1.4-.7-.7-1.1-1.3-1.4-2.2-.3-.6-.6-1.7-.7-3.5 0-2-.1-2.6-.1-7.6 0-5.1.1-5.7.1-7.7.1-1.8.4-2.8.7-3.5.3-.9.7-1.5 1.4-2.2.7-.6 1.3-1.1 2.2-1.4.6-.3 1.6-.6 3.5-.7h7.7zm0 5.8c-5.4 0-9.7 4.3-9.7 9.7 0 5.4 4.3 9.7 9.7 9.7 5.4 0 9.7-4.3 9.7-9.7 0-5.4-4.3-9.7-9.7-9.7zm0 16c-3.5 0-6.3-2.8-6.3-6.3s2.8-6.3 6.3-6.3 6.3 2.8 6.3 6.3-2.8 6.3-6.3 6.3zm12.4-16.4c0 1.3-1.1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3 0-1.2 1-2.3 2.3-2.3 1.2 0 2.3 1.1 2.3 2.3z" class="ampstart-icon ampstart-icon-instagram"></path></svg></a>
      </li>
      <li>
          <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML pin trest"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="28.5" viewBox="0 0 43 51"><title>pinterest</title><path d="M8.134 18.748c0-1.6.2-3 .8-4.4.5-1.4 1.2-2.6 2.2-3.6.9-1 2-1.9 3.2-2.6 1.2-.8 2.5-1.3 3.9-1.7 1.5-.4 2.9-.5 4.4-.5 2.2 0 4.3.4 6.2 1.4 1.9.9 3.5 2.3 4.7 4.1 1.2 1.9 1.8 3.9 1.8 6.2 0 1.4-.1 2.7-.4 4-.2 1.3-.7 2.6-1.2 3.8-.6 1.2-1.3 2.3-2.2 3.2-.8.9-1.8 1.7-3.1 2.2-1.2.6-2.5.9-4 .9-1 0-1.9-.3-2.9-.7-.9-.5-1.6-1.1-2-1.9-.1.5-.3 1.4-.6 2.4-.3 1.1-.4 1.7-.5 2-.1.3-.2.9-.4 1.6-.3.7-.4 1.2-.6 1.5-.1.3-.4.7-.7 1.3-.3.6-.6 1.2-1 1.7-.3.5-.7 1.1-1.3 1.8l-.3.1-.2-.2c-.2-2.2-.3-3.6-.3-4 0-1.3.2-2.8.5-4.4.3-1.7.8-3.7 1.4-6.2.6-2.5 1-3.9 1.1-4.4-.5-.9-.7-2.1-.7-3.6 0-1.2.4-2.3 1.1-3.3.8-1.1 1.7-1.6 2.8-1.6.9 0 1.6.3 2.1.9.4.6.7 1.3.7 2.2 0 .9-.3 2.3-1 4.1-.6 1.8-.9 3.1-.9 4 0 .9.3 1.6 1 2.2.6.6 1.4.9 2.3.9.8 0 1.5-.2 2.2-.5.6-.4 1.2-.9 1.6-1.5.5-.6.9-1.3 1.2-2 .4-.8.6-1.5.8-2.4.2-.8.4-1.6.5-2.4.1-.7.1-1.4.1-2.1 0-2.5-.8-4.4-2.3-5.8-1.6-1.4-3.6-2.1-6.1-2.1-2.8 0-5.2 1-7.1 2.8-1.9 1.9-2.9 4.2-2.9 7.1 0 .6.1 1.2.3 1.8.2.6.4 1.1.6 1.4.2.3.4.7.5 1 .2.3.3.5.3.6 0 .4-.1.9-.3 1.6-.2.6-.5 1-.8 1 0 0-.1-.1-.4-.1-.7-.2-1.3-.6-1.9-1.2-.5-.6-1-1.3-1.3-2-.3-.8-.5-1.6-.7-2.4-.2-.7-.2-1.5-.2-2.2z" class="ampstart-icon ampstart-icon-pinterest"></path></svg></a>
      </li>
      <li>
          <a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML E-mail"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="18.4" viewBox="0 0 56 43"><title>email</title><path d="M10.5 6.4C9.1 6.4 8 7.5 8 8.9v21.3c0 1.3 1.1 2.5 2.5 2.5h34.9c1.4 0 2.5-1.2 2.5-2.5V8.9c0-1.4-1.1-2.5-2.5-2.5H10.5zm2.1 2.5h30.7L27.9 22.3 12.6 8.9zm-2.1 1.4l16.6 14.6c.5.4 1.2.4 1.7 0l16.6-14.6v19.9H10.5V10.3z" class="ampstart-icon ampstart-icon-email"></path></svg></a>
      </li>
  </ul>

</amp-sidebar>
<!-- End Sidebar -->
<!-- End Navbar -->
<h3 class="target">
  <a class="target-anchor"
    id="top"></a>
  <amp-position-observer on="enter:hideToTopAnim.start; exit:toTopAnim.start"
    layout="nodisplay">
  </amp-position-observer>
</h3>

<amp-animation id="toTopAnim"
  layout="nodisplay">
  <script type="application/json">
    {
      "duration": "200ms",
      "fill": "both",
      "iterations": "1",
      "direction": "alternate",
      "animations": [{
        "selector": "#scrollToTopButton",
        "keyframes": [{
          "opacity": "1",
          "visibility": "visible"
        }]
      }]
    }
  </script>
</amp-animation>

<amp-animation id="hideToTopAnim"
  layout="nodisplay">
  <script type="application/json">
    {
      "duration": "200ms",
      "fill": "both",
      "iterations": "1",
      "direction": "alternate",
      "animations": [{
        "selector": "#scrollToTopButton",
        "keyframes": [{
          "opacity": "0",
          "visibility": "hidden"
        }]
      }]
    }
  </script>
</amp-animation>