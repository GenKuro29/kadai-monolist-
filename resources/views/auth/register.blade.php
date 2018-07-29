@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">会員登録</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'signup.post']) !!}
                    <div class="form-group">
                        {!! form::label('name', 'お名前') !!}
                        {!! form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! form::label('email', 'メールアドレス') !!}
                        {!! form::email('email',old('email'), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! form::label('password', 'パスワード') !!}
                        {!! form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! form::label('password_confirmation', 'パスワード(確認)') !!}
                        {!! form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="text-right">
                        {!! form::submit('登録する',['class' => 'btn btn-success']) !!}
                    </div>
                {!! form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection