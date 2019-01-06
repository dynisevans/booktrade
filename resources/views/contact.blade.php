@extends('layouts.main')

@section('content')
    <div class="leftContainer">
        <div class="hotBooks">
            <h1>{{$contact}}</h1>
            {!! Form::open(array('url' => 'contact')) !!}
            <div class="form-group form-inline">
                {!! Form::label('name', 'Họ và tên', array('class' => 'col-sm-2 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::text('contactName', '', array('class' => 'form-control', 'placeholder' => 'Nhập họ tên đầy đủ', 'style' => 'width:100%')) !!}
                </div>
            </div>

            <div class="form-group form-inline">
                {!! Form::label('email', 'Địa chỉ email', array('class' => 'col-sm-2 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::email('contactEmail', isset($email)?$email:'', array('class' => 'form-control', 'placeholder' => 'Địa chỉ email thật để nhận phản hồi', 'style' => 'width:100%')) !!}
                </div>
            </div>

            <div class="form-group form-inline">
                {!! Form::label('title', 'Tiêu đề', array('class' => 'col-sm-2 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::text('contactTitle', '', array('class' => 'form-control', 'placeholder' => 'Tiêu đề tin nhắn', 'style' => 'width:100%')) !!}
                </div>
            </div>

            <div class="form-group form-inline">
                {!! Form::label('content', 'Nội dung liên hệ', array('class' => 'col-sm-2 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('contactContent', '', array('class' => 'form-control', 'placeholder' => 'Nội dung không quá 200 từ', 'rows' => '4', 'style' => 'width:100%')) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-2">
                    {!! Form::submit('Gửi tin nhắn', array('class' => 'btn btn-success')) !!}
                </div>
            </div><br>
            {!! Form::close() !!}
        </div>
    </div>
@endsection