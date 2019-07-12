<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a href="#" class="simple-text logo-normal">
        Categories
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="{{ Request::is('admin/slider*') ? 'active': '' }}">
          <a class="nav-link" href="{{route('slider.index')}}">
            <i class="material-icons">dashboard</i>
            <p>Slider</p>
          </a>
        </li>  
        
      </ul>
    </div>
  </div>