@extends('layouts.app');
@section('content')
<script type="text/javascript">
        function chk(){
            if (document.getElementById('req1').checked) {
                if(document.getElementById('req2').checked){
                    var req1 = true;
                    var req2 = true;
                }
            }
            var num = 0;
            if((req1 === true)&&(req2 === true)){
                    num = 1;
            }
            if(num===1){

                location.href="{{route('register')}}";

            }else{
                alert("개인정보 약관에 동의하셔야 합니다.");
            }
        }
        function nochk(){
            alert("동의하지 않으시면 가입하실 수 없습니다");
            location.href="{{route('home')}}";}
    </script>

    {{csrf_field()}}
    <table width="1400" height="650">
        <tr>
            <td width="100%" height="10%">
                <span style="padding-left: 160px"></span>&nbsp; <b>회원가입</b>
                <br>
                <hr>
            </td>
        </tr>
        <tr>
            <td width="100%" height="50%" align="center">
                <p align="left">
   <span style="padding-left: 160px">
   한국보상원 약관동의</span>
                </p>
                <br>
                <textarea rows="20" cols="120">
                </textarea>
                <br>
                <input type="radio" id="req1" value="1"> 약관을 충분히 읽었으며 이에 동의합니다.

            </td>
        </tr>
        <tr>
            <td width="100%" height="50%" align="center">
                <br>
                <textarea rows="20" cols="120">
                </textarea>
                <br>
                <input type="radio" id="req2" value="1"> 개인정보 수집 및 이용에 동의합니다.

            </td>
        </tr>

        <tr>
            <td align="center" valign="top">
                <button type="submit" value="1" onclick="chk()">확인</button>
                <button type="button" value="0" onclick="nochk()">취소</button>

            </td>
        </tr>
    </table>

@endsection