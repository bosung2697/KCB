@extends('layouts.app')
<script>
    function intro(whichpart){
        var i;
        var x=document.getElementsByClassName("introductionPage");
        for (i=0; i<x.length; i++){
            x[i].style.display="none";
        }
        document.getElementById(whichpart).style.display="block";
    }

</script>
<style>
    body{
        width:100%;
        height:100%;
    }
    .left ul li:hover{
        font-size:1.2vw;
        background-color: #686ca4;
        color:#ffffff;
    }
    .left ul{
        list-style: none;
        text-align: left;
    }
    .left li{
        font-size:1vw;
        background-color: transparent;
        color:black;
    }
    .intro_desc{
        margin-top: 1em;
        margin-bottom: 1em;
        margin-left: 0em;
        margin-right: 0em;
        overflow:auto;
        text-align:left;
        position:relative;
    }
    .intro_desc p{
        font-size: 1.2vw;
        line-height: 2.5vw;
    }
    .introbody{
        display: -ms-grid;
        display:grid;
        -ms-grid-columns: 1fr 1vw 1fr;
        grid-column-gap: 1vw;
        grid-template-columns: 25% 75%;
        margin: 1vw 15vw 1vw 15vw;
        text-align: center;
        width: 75%;
    }
    .CeoName{
        display: inline-block;
        overflow:hidden;
        width:200px;
        height:40px;
        font-size: 1.5vw;
        font-weight:bolder;
    }
    .grid-item:nth-child(2) {
        -ms-grid-column: 3;
    }
    .grid-item:nth-child(2) {
        -ms-grid-column: 3;
    }
    .business_result{
        text-align: left;
        list-style: none;
    }
    .business_result li{
        line-height: 2.5vw;
        font-size: 1.2vw;
        list-style: none;
    }
    .intro_button{
        background-color:transparent;
        background-repeat: no-repeat;
        border:none;
        cursor:pointer;
        outline:none;
        overflow:hidden;
    }


</style>
@section('content')
<title>(주)한국보상원 회사소개</title>
<div class="introbody">

    <div class="left grid-item">
        <h2>회사소개</h2>&nbsp;&nbsp;<h3>Company</h3>
        <ul>
        <li onclick="intro('introduction')">
            <button class="intro_button">회사소개 및 대표인사말</button>
        </li>
        <li onclick="intro('business_result')">
            <button class="intro_button">보상원 사업 실적</button>
        </li>
    </ul>
    </div>
    <div class="right grid-item">

            <div class="introductionPage" id="introduction">
            <h3>회사소개 및 대표 인사말</h3>
            <h4>새로운 창조를 위한 변화와 도전<br>
                Change and challenge for new creation</h4>
            <img src="/img/intro.jpg" style="float:left; width:30%; margin: 1vw;">
            <div class="intro_desc">
                <p>21세기 우리 경제는 비약적인 성장과 더불어 많은 사회문제 또한 야기 되었습니다. 특히 공익사업에 기한 손실보상 업무는 국민의 재산권 보존과 공공사업의 적기수행이라는 다소 양립하기 어려운 두 가지 목적을 달성해야 하기에 손실보상업무에 대한 법령과 판례가 인정하는 절차와 해석에 따라 공정하고 투명하게 수행해야함은 물론 이거니와 보상에 관한 관련 법령의 숙지와, 공공사업에 대한 보상 대상자의 불만을 최소화하고 첨예한 이해관계의 대립을 사전에 방지하기 위한 풍부한 경험과 축척된 지식을 갖춘 전문가가 수행해야 할 필요성이 대두되었습니다.
                </p><p>저희 ㈜한국보상원은 토지보상 제도의 발전과 연구를 위해 변호사, 평가사, 세무사, 행정사, 지적기사, 공인중개사, 장례지도사 등의 전문자격사를 기반으로 2008년부터 유수의 공공사업 현장에서 성공적인 Project를 진행한 경험의 결실로서 탄생한 보상 전문기관입니다.
                </p><p>특히 손실보상업무는 첨예하게 대립되는 공익과 사익을 조절하는 고도의 전문화된 업무일 뿐만 아니라 우리 국가와 같이 단기간에 폭발적인 경제성장을 이룬 국가의 경우 보상에 관한 법률제도가 현실에서 대두되는 문제들을 따라잡지 못한 것이 사실임으로 현장에서의 실무전문가의 역할을 더욱 크게 만들었다 할 것입니다.</p>
                <p>이러한 시대적 요구에 힘입어 관련 법령에 대한 높은 이해와 다양한 유권해석을 통해 보다 전문적이며 작은 문제에도 항상 탐구하여 고객의 입장에서 진정성과 열정을 품고 항상 준비하며 노력하는 자세로 고객과 함께 최선의 가치를 위해 쉼 없이 성장해 나아가는 한국보상원이 될 것을 다짐합니다.</p>
                <div style="margin-top:20px; text-align:right;">
                    <span class="CeoName">대표이사 윤경식</span>
                </div>
            </div>
            </div>
            <div class="introductionPage" id="business_result"  style="display:none;" >
                보상원 사업 실적
                <ul class="business_result">
                    <li><b>2011</b>
                        <ul>
                            <li>양산어곡일반산업단지조성사업(분묘보상)</li></ul>
                    </li>
                    <li>
                        <b>2012</b>
                        <ul>
                            <li>남양홍씨문중 사당건립 및 신묘역 조성사업(분묘사업)</li>
                            <li>김해 상동매리지구 이주자 택지 개발사업(분묘보상)</li></ul>
                    </li>
                    <li>
                        <b>2013</b>
                        <ul><li>김해 명동일반산업단지(보상대행, 분묘보상)</li>
                            <li>양산수렴(하서) 일반산업단지 조성사업(용역대행)</li>
                            <li>기장 반룡 일반산업단지(분묘보상)</li>
                            <li>사직1구역 주택 재개발 사업(용역대행)</li></ul>
                    </li>
                    <li>
                        <b>2014</b>
                        <ul>
                            <li>김해 송현일반산업단지(보상대행, 분묘보상)</li>
                            <li>초량천 하천 복원정비 사업(용역대행)</li>
                            <li>거창 친환경 골프장 건립사업(보상대행)</li>
                            <li>재송2구역 주택 재개발 사업(용역대행)</li>
                            <li>충북 제천 도시계획시설사업(보상대행)</li></ul>
                    </li>
                    <li>
                        <b>2015</b>
                        <ul>
                            <li>장전3구역 주택 재개발 사업(보상대행)</li>
                            <li>김해 덕암2 일반산업단지(보상대행)</li>
                            <li>함안 악양 근린공원 조성사업(보상대행)</li>
                            <li>범천3구역 지역주택조합 사업(용역대행)</li>
                            <li>양산 삼한사랑채 아파트 도시계획시설사업(보상대행)</li></ul>
                    </li>
                    <li>
                        <b>2016</b>
                        <ul>
                            <li>순천 해룡 일반산업단지(이주단지)</li>
                            <li>전포5구역 지역주택조합 사업(용역대행)</li>
                            <li>부산 신항만 배후단지 조성사업(용역대행)</li>
                            <li>울산 남구 도시계획시설사업(보상대행)</li>
                            <li>대구 화원 이진캐스빌 신축공사(보상대행)</li></ul>
                    </li>
                    <li>
                        <b>2017</b>
                        <ul>
                            <li>양산 물금읍 가촌리 도시계획도로 개설공사(보상대행)</li>
                            <li>부산 동래 효성해링턴 도시계획시설사업(보상대행)</li>
                            <li>울산 신정동 기반시설 조성사업(보상대행)</li>
                            <li>울산 야음동 대명루첸 도시계획시설 사업(보상대행)</li>
                            <li>부산 연산6구역 지역주택조합 사업(용역대행)</li>
                            <li>기룡미니복합타운 조성사업(보상대행)</li>
                            <li>김해AM하이테크 일반산업단지(보상대행)</li></ul>
                    </li>
                    <li>
                        <b>2018</b>
                        <ul>
                            <li>죽곡일반산업단지(보상대행)</li>
                            <li>평리5구역 주택재개발 정비사업(보상대행)</li>
                            <li>평리7구역 주택재개발 정비사업(보상대행)</li></ul>
                    </li>
                </ul>
            </div>
            </div>
        </div>


    @endsection