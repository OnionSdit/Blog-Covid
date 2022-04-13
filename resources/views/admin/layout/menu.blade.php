<ul class="nav" id="side-menu">
    <li class="sidebar-search">
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </li>


    {{-- categogy --}}
    <li>
        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Danh mục<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('admin.category.index') }}">List Danh mục</a>
            </li>
            <li>
                <a href="{{ route('admin.category.create') }}">Thêm Danh mục</a>
            </li>
        </ul>
    </li>

    {{-- Post --}}
    <li>
        <a href="#"><i class="fa fa-cube fa-fw"></i> Bài viết<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('admin.post.index') }}">Danh sách bài viết </a>
            </li>
            <li>
                <a href="{{ route('admin.post.create') }}">Thêm bài viết</a>
            </li>
        </ul>
    </li>

    {{-- Sản phẩm --}}
    <li>
        <a href="#"><i class="fa fa-cube fa-fw"></i> Sản phẩm<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('admin.product.listProduct') }}">Danh sách Sản phẩm</a>
            </li>
            <li>
                <a href="{{ route('admin.product.createProduct') }}">Thêm Sản phẩm</a>
            </li>
        </ul>
    </li>

    {{-- user --}}
    <li>
        <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ route('admin.user.index') }}">List User</a>
            </li>
            <li>
                <a href="{{ route('admin.user.create') }}">Add User</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ route('admin.contact.index') }}"><i class="fa fa-phone fa-fw"></i> Bill</a>
    </li>
</ul>
