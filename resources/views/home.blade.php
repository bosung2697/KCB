@extends('layouts.app')
<script>
    function openmenu1(whichmenu) {
        var i;
        var x = document.getElementsByClassName("menu1");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(whichmenu).style.display = "block";
    }
    function openmenu2(whichdata) {
        var i;
        var x = document.getElementsByClassName("menu2");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(whichdata).style.display = "block";
    }

</script>
<style>
    *{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
    }
    body{
        width:100%;
        height:100%;
    }
    .body1{
        display: -ms-grid;
        display:grid;
        -ms-grid-columns: 1fr 1vw 1fr;
        grid-column-gap: 1vw;
        grid-template-columns: 55% 45%;
        margin: 1vw 15vw 1vw 15vw;
        text-align: center;
        width: 75%;
    }

    .body1 li{
        width: 80%;
        -ms-text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        text-align: left;

    }
    .grid-item:nth-child(2) {
        -ms-grid-column: 3;
    }

    .grid-item:nth-child(3) {
        -ms-grid-column: 5;
    }
    .homemenu1{
    width:100%;
    overflow:hidden;
    }
    .homemenu1item {
        padding: 8px 16px;
        float: left;
        width: auto;
        border: none;
        display: block;
        outline: 0;
        background-color: white;
    }
    .body2{
        width:auto;
        text-align:center;
        margin:1vw 15vw 1vw 15vw;
    }
    .body2 li{
        width: 100%;
        -ms-text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        text-align: left;

    }
    .homemenu2item {
        padding: 8px 16px;
        float: left;
        width: auto;
        border: none;
        display: block;
        outline: 0;
        background-color: white;
    }
    ._tothepage{
        float:right;
        background-color:white;
        border:none;
    }
    .advbanner{
        width:100%;
        position:relative;
        margin:1vw 15vw 1vw 15vw;
        height:2vw;
    }
    .mySlides{
        display:none;
    }
    .advbanner img{
        vertical-align: middle;
        width:1000px;
        height: 600px;
    }
    .advbannertext {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }
    .advbannernumbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }
    .advbannerdot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    /* Fading animation */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
        .advbannertext {font-size: 11px}
    }
    .partners{
        display: -ms-grid;
        display:grid;
        -ms-grid-columns: 1fr 1vw 1fr;
        grid-column-gap: 1vw;
        grid-template-columns: 35% 65%;
        margin: 1vw 15vw 1vw 15vw;
        text-align: center;
        width: 75%;
    }

</style>
@section('content')
<div class="searchbarcontainer">
    <div>
        <form action="/action_page.php" style="text-align: center;">
            <input type="search" name="searchbar" style="width:30%;">
            <button type="submit"><img src=""></button>
        </form>
    </div>
    <div>
        <a href=""><p class="navbarotherpage">TODAY 보상 공고/공시</p></a>
        <a href=""><p class="navbarotherpage">보상/용역 대행 컨설팅</p></a>
    </div>
</div>

<div class="body1">
    <div class="grid-item">
    <div class="homemenu1">
       <button class="homemenu1item" onclick="openmenu1('hotfocus')">HOT 포커스</button>
       <button class="homemenu1item" onclick="openmenu1('freesample')">무료샘플</button>
       <button class="_tothepage"><a href="">+더보기</a></button>
    </div>

    <div id="hotfocus" class="w3-container menu1">
        <h2>HOTFOCUS</h2>
        <p>핫폭스</p>
    </div>
    <div id="freesample" class="w3-container menu1" style="display:none">
        <h2>무료샘플</h2>
        <p>무료샘플이라능</p>
    </div>
    </div>
    <div class="grid-item">
    공지사항
    <a href="" class="_tothepage">+더보기</a>
    <hr>
    <div>
        <ul>
            <li>
                보상과 관련된 궁금증은 저희가 풀어드리겠습니다.<br>
            </li><li>
                보상과 관련된 궁금증은 저희가 풀어드리겠습니다.<br>
            </li><li>
                보상과 관련된 궁금증은 저희가 풀어드리겠습니다.<br>
            </li><li>
                보상과 관련된 궁금증은 저희가 풀어드리겠습니다.<br>
            </li>
        </ul>
    </div>
    </div>
</div>
{{--<div class="advbanner">--}}
    {{--<div class="mySlides fade">--}}
        {{--<div class="advbannernumbertext">1 / 3</div>--}}
        {{--<img src="" style="width:100%">--}}
        {{--<div class="advbannertext">Caption Text</div>--}}
    {{--</div>--}}

    {{--<div class="mySlides fade">--}}
        {{--<div class="advbannernumbertext">2 / 3</div>--}}
        {{--<img src="" style="width:100%">--}}
        {{--<div class="advbannertext">Caption Two</div>--}}
    {{--</div>--}}

    {{--<div class="mySlides fade">--}}
        {{--<div class="advbannernumbertext">3 / 3</div>--}}
        {{--<img src="" style="width:100%">--}}
        {{--<div class="advbannertext">Caption Three</div>--}}
    {{--</div>--}}

{{--</div>--}}
<div style="text-align:center">
    <span class="advbannerdot"></span>
    <span class="advbannerdot"></span>
    <span class="advbannerdot"></span>
</div>
<div class="body2">
    <div>
        <button class="homemenu2item" onclick="openmenu2('data1')">자료실</button>
        <button class="homemenu2item" onclick="openmenu2('data2')">자료실</button>
        <button class="_tothepage"><a href="">+더보기</a></button>
    </div>
    <div id="data1" class="w3-container menu2">
        <ul>
            <li>
                호롤롤ㄹ로
            </li> <li>
                호롤롤ㄹ로
            </li> <li>
                호롤롤ㄹ로
            </li> <li>
                호롤롤ㄹ로
            </li> <li>
                호롤롤ㄹ로
            </li>
        </ul>
    </div>
    <div id="data2" class="w3-container menu2" style="display:none">
        <ul>
            <li>
                [광주 중대물류단지 조성사업] 광주 중대 물류단지 개발 설명회
            </li>
            <li>
                [광주 중대물류단지 조성사업] 광주 중대 물류단지 개발 설명회
            </li>
            <li>
                [광주 중대물류단지 조성사업] 광주 중대 물류단지 개발 설명회
            </li>
            <li>
                [광주 중대물류단지 조성사업] 광주 중대 물류단지 개발 설명회
            </li>
            <li>
                [광주 중대물류단지 조성사업] 광주 중대 물류단지 개발 설명회
            </li>
        </ul>
    </div>
</div>
<div style="margin: 1vw 15vw 1vw 15vw;">
    <h2>
        파트너사
    </h2>
    <hr/>
    <div class="partners">
     <div class="grid-item" style="float:left;">
         <img src="" width="100px">
     </div>
        <div class="grid-item" style="display:inline-block">
            <img src="" width="100px">
            <img src="" width="100px">
            <img src="" width="100px">
            <img src="" width="100px">

        </div>
    </div>
</div>
    <script>

        var slideIndex = 0;
        showSlides();
        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("advbannerdot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
@endsection
