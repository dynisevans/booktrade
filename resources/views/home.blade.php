@extends('layouts.main')

@section('content')
    <div class="leftContainer">
        <div class="hotBooks">
            <h2>Sách đang HOT</h2>
            <div class="flexContainer d-flex justify-content-around flex-wrap">
                @foreach($books as $b)
                    <div class="card">
                        <img class="imgHover" src="{!! url('public/img/bookscover/peter.jpg"') !!} alt="item1">
                        <div class="cardDetails">
                            <p>{{$b->BookDescription}}</p>
                        </div>
                        <div class="card-body"><a href="book/{{$b->BookID}}">
                                <h5>{{$b->BookName}}</h5></a>
                            <div class="bookInfor"><i class="fas fa-user-edit"></i><span>Tác Giả: {{$b->AuthorName}}</span>
                            </div>
                            <div class="btnClass">
                                <button class="btn">Buye: 5</button>
                                <button class="btn">Trads: 5</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
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