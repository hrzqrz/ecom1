<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin')}}">
          <i class="ti-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="ti-clipboard menu-icon"></i>
          <span class="menu-title">ایجاد محصولات</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{route('categories.create')}}">گروه جدید</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('products.create')}}"> محصول جدید</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('slider.create')}}">اسلایدر صفحه اصلی</a></li>
            <li class="nav-item"><a class="nav-link" href="wizard.html">Wizard</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="ti-layout menu-icon"></i>
          <span class="menu-title">گزارشات</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('categories.index')}}">مشاهده گروه بندی ها</a></li>
            <li class="nav-item"> <a class="nav-link" href="data-table.html">مشاهده محصولات</a></li>
            <li class="nav-item"> <a class="nav-link" href="js-grid.html">مشاهده اسلاید ها</a></li>
            <li class="nav-item"> <a class="nav-link" href="sortable-table.html">Sortable table</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>