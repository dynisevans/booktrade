@extends('layouts.main')

@section('content')
    <div class="leftContainer">
        <div class="hotBooks">
            <h2>Sách đang HOT</h2>
            <div class="flexContainer d-flex justify-content-around flex-wrap">
                <div class="card"><img src="img/bookscover/pi.jpg" alt="item2">
                    <div class="card-body">
                        <h5>Life Of PI</h5>
                        <p>Life Of PI infomation</p>
                        <button class="btn">15.000đ</button>
                        <button class="btn"><i class="fa fa-arrow-alt-circle-right"></i> <i class="fa fa-arrow-alt-circle-left"></i></button>
                    </div>
                </div>
                <div class="card"><img src="img/bookscover/snowwhite.jpg" alt="item3">
                    <div class="card-body">
                        <h5>Snow White</h5>
                        <p>Snow White infomation</p>
                        <button class="btn">15.000đ</button>
                        <button class="btn"><i class="fa fa-arrow-alt-circle-right"></i> <i class="fa fa-arrow-alt-circle-left"></i></button>
                    </div>
                </div>
                <div class="card"><img src="img/bookscover/snowwhite.jpg" alt="item4">
                    <div class="card-body">
                        <h5>Snow White</h5>
                        <p>Snow White infomation</p>
                        <button class="btn">15.000đ</button>
                        <button class="btn"><i class="fa fa-arrow-alt-circle-right"></i> <i class="fa fa-arrow-alt-circle-left"></i></button>
                    </div>
                </div>
                <div class="card"><img src="img/bookscover/snowwhite.jpg" alt="item4">
                    <div class="card-body">
                        <h5>Snow White</h5>
                        <p>Snow White infomation</p>
                        <button class="btn">15.000đ</button>
                        <button class="btn"><i class="fa fa-arrow-alt-circle-right"></i> <i class="fa fa-arrow-alt-circle-left"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bestSeller">
            <h2>Best Seller</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ratione laudantium
                error nulla tempora fugit, enim distinctio asperiores ipsum blanditiis exercitationem
                consectetur necessitatibus veritatis reprehenderit accusamus inventore? Saepe, dolorum
                quasi.</p>
        </div>
    </div>
@endsection