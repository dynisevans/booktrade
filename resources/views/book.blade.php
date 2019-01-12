@extends('layouts.main')

@section('content')
    <div class="aboutSec">
        <div class="row">
            <div class="col-md-12">
                <div class="leftContainer">
                    @if(count($bookInfo)>0)
                        @foreach($bookInfo as $bi)
                            <div class="thongTinSach">
                                <h2 class="text-center">{{$bi->BookName}}</h2>
                                <div class="row">
                                    <div class="col-md-5 ttImgCv img-magnifier-container"><img id="myimage"
                                                                                               src="{!! url('public/img/bookscover/peter.jpg') !!}"
                                                                                               alt="item1"></div>
                                    <div class="col-md-7 ttDetails">
                                        <p>Tác Giả: <span>J.M.Barrie</span></p>
                                        <p>Năm Xuất Bản: <span>{{$bi->PublishYear}}</span></p>
                                        <p>Thông tin chi tiết: <span>{{$bi->BookDescription}}</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="thongTinTrade">
                            @if(count($traderInfo)>0)
                                <div class="row">
                                    <div class="col-md-6 personInfor">
                                        <h4>Danh Sách Trader</h4>

                                        <div class="list-group" id="list-tab" role="tablist">
                                            @foreach($traderInfo as $ti)
                                                <a class="list-group-item list-group-item-action"
                                                   id="list-prs{{$ti->TradeID}}-list"
                                                   data-toggle="list" href="#list-prs{{$ti->TradeID}}" role="tab"
                                                   aria-controls="prs1">{{$ti->LastName.' '.$ti->FirstName}}</a>
                                            @endforeach
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <h4>Thông Tin Chi Tiết</h4>
                                        <div class="tab-content" id="nav-tabContent">
                                            @foreach($traderInfo as $ti)
                                                <div class="tab-pane fade" id="list-prs{{$ti->TradeID}}" role="tabpanel"
                                                     aria-labelledby="list-prs{{$ti->TradeID}}-list">
                                                    <p>Họ Tên: <span>{{$ti->LastName.' '.$ti->FirstName}}</span></p>
                                                    <p>Số điện thoại: <span>(+84) 917 222 222</span></p>
                                                    <p>Số tài khoản: <span>1273 18230948</span></p>
                                                    <p>Địa chỉ: <span>ở trọ</span></p>
                                                    <p>Facebook: <span>fb.com/ngvan2</span></p>
                                                    @if($ti->TradePrice!=0)
                                                        <p>Giá TRAO ĐỔI: <span>{{number_format($ti->TradePrice)}}<sup>đ</sup></span></p>
                                                    @endif
                                                    @if($ti->SellPrice!=0)
                                                        <p>Giá BÁN: <span>{{number_format($ti->SellPrice)}}<sup>đ</sup></span></p>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="btn btn-info">Trao Đổi</button>
                                    </div>
                                </div>
                            @else
                                {!! '<h2 class="text-center">Hiện chưa có người bán/trao đổi cho cuốn sách này!</h2>' !!}
                            @endif
                        </div>
                        <div class="cmtArea">
                            <h4>Comments</h4>
                            <div class="row">
                            <textarea class="form-control" id="cmt" cols="80" rows="8"
                                      placeholder="Add Comment..."></textarea>
                                <input class="form-control" type="text" placeholder="Email">
                                <button class="btn btn-info">Gửi</button>
                            </div>
                        </div>
                    @else
                        {!! '<h2 class="text-center" style="padding:15px;">Mã sách không hợp lệ!</h2>' !!}
                    @endif
                </div>
            </div>

        </div>
    </div>
@endsection
