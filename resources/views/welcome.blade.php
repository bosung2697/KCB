
{{--<ul>--}}
    {{--@foreach($items as $Item)--}}
        {{--<li>{{$item}}</li>--}}
    {{--@endforeach--}}
{{--</ul>--}}
@extends('layouts.master')
@section('content')
    @include('partials.footer')
@endsection

@section('script')
    <script>
        alert("저는 자식 뷰의 'script'입니다.");
    </script>
@endsection
