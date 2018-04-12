@extends('layouts.app')
@section('content')
    <form action="#" method=POST>

        {{csrf_field()}}
        <fieldset>
        <legend>상담하기</legend>
            이름 <input type="text" placeholder="홍길동"><br>
            비밀번호 <input type="password"><br>
            이메일 <input type="email" placeholder="example@example.org"><br>
            잠김 <br>
            제목 <input type="text" col-span="2"><br>
            문의내용 <textarea rows="" cols="80"></textarea><br>
            <a href="uploadfile" target="_blank">파일 첨부하기</a>
            <input type="submit"/>
        </fieldset>
    </form>

    @endsection