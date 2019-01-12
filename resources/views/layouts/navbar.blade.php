<div class="navbar navbar-light">
    <ul class="navbar-nav navbar-expand-xl">
        <li><a class="navbar-brand" href="{!! url('home') !!}"><i class="fa fa-home"></i> Trang chủ</a></li>
        <li><a class="navbar-brand" href="{!! url('buy') !!}"><i class="fa fa-book"></i> Mua</a></li>
        <li class="dropdown"><a class="navbar-brand dropdown-toggle" href="#" data-toggle="dropdown"><i
                        class="fa fa-book-open"></i> Thể loại</a>
            <div class="dropdown-menu"><a class="dropdown-item" href="#">Comedy</a><a class="dropdown-item" href="#">Horror</a><a
                        class="dropdown-item" href="#">Drama</a><a class="dropdown-item" href="#">Manga</a></div>
        </li>
        <li><a class="navbar-brand" href="{!! url('contact') !!}"><i class="fa fa-address-card"></i> Liên Hệ</a></li>
        <li><a class="navbar-brand" href="{!! url('about') !!}"><i class="fa fa-info-circle"></i> Giới Thiệu</a></li>
    </ul>
</div>
<div class="searchbar form-inline">
    <form method="POST">
        <input class="form-control" type="Search" placeholder="Search">
        <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>