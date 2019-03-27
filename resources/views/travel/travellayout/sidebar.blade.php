<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <ul class="app-menu">
       <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bus"></i><span class="app-menu__label">Category</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{url('category')}}"><i class="icon fa fa-circle-o"></i>Add Category</a></li>
            <li><a class="treeview-item" href="{{url('viewcategory')}}"><i class="icon fa fa-circle-o"></i>View Category</a></li>
          </ul>
        </li>
      </ul>
      <ul class="app-menu">
       <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bus"></i><span class="app-menu__label">Itinerary</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <li><a class="treeview-item" href="{{url('itinerary')}}"><i class="icon fa fa-circle-o"></i>Add Itinerary</a></li>
            <li><a class="treeview-item" href="{{url('report')}}"><i class="icon fa fa-circle-o"></i> View Itinerary</a></li>
          </ul>
        </li>
      </ul>
      <ul class="app-menu">
       <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bus"></i><span class="app-menu__label">Image</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <li><a class="treeview-item" href="{{url('complementary')}}"><i class="icon fa fa-circle-o"></i>Add Complementary</a></li>
            <li><a class="treeview-item" href="{{url('viewcomplementary')}}"><i class="icon fa fa-circle-o"></i> View Complementary</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-gallery"></i>@yield('app-title')</h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('category')}}"><i class="fa fa-home fa-lg"></a></i></li>
          <li class="breadcrumb-item"><a href="#">@yield('breadcrumb-item')</a></li>
        </ul>
      </div>