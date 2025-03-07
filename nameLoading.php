<?php
session_start();
$_SESSION['processing'] = true;
$_SESSION['start_time'] = time();
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>hotwide-naming</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom Styles (원래 색상 정의 포함) -->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!-- Google Tag Manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MLNLFNBV39"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-MLNLFNBV39');
    </script>
</head>

<body id="kt_body" class="min-w-[1153px]">
    <div class="flex flex-col">
        <div class="flex flex-row">
            <div id="kt_wrapper" class="w-full">
                <!-- 헤더 영역 -->
                <header id="kt_header" class="flex items-stretch justify-center h-[60px] p-0 bg-iphuman border-0">
                    <div class="flex items-center w-full px-5" style="max-width: 1520px;">
                        <!-- 로고 -->
                        <div class="bg-text-navy mr-5 md:mr-10 flex items-center" style="height: 50px;">
                            <a href="/">
                                <img alt="Logo" src="assets/images/logos/iphuman_logo.png" class="h-[30px]" />
                            </a>
                        </div>
                        <!-- 상단 셀렉트 박스 -->
                        <select id="header_select" name="selectbox"
                            class="border-0 text-white font-semibold text-[14px] bg-transparent"
                            onchange="chageLangSelect()">
                            <option value="mark" selected>상표</option>
                            <option value="patent">특허</option>
                            <option value="design">디자인</option>
                        </select>
                        <div class="w-[170px]"></div>
                        <!-- 상단 메뉴 영역 -->
                        <nav class="flex items-stretch justify-between flex-grow">
                            <div id="kt_header_nav" class="flex items-stretch">
                                <div id="kt_header_menu" class="flex items-stretch">
                                    <div class="flex flex-col lg:flex-row items-stretch font-bold my-5 lg:my-0"
                                        data-kt-menu="true">
                                        <div id="dashboardmark" class="flex mr-10">
                                            <a class="py-3 mr-12" href="/S404">
                                                <span class="flex justify-center text-gray-400">상표검색</span>
                                            </a>
                                            <a class="py-3 mr-12" href="/S404">
                                                <span class="flex justify-center text-gray-400">모니터링</span>
                                            </a>
                                            <a class="py-3 mr-12" href="/S404">
                                                <span class="flex justify-center text-gray-400">출원 및 의뢰</span>
                                            </a>
                                            <a class="py-3 mr-12" href="/S404">
                                                <span class="flex justify-center text-gray-400">IP정보</span>
                                            </a>
                                            <a class="py-3 mr-12" href="/S404">
                                                <span class="flex justify-center text-gray-400">네이밍</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 로그인 / 회원가입 -->
                            <div class="flex items-stretch flex-shrink-0">
                                <div class="flex items-center -mr-3 ml-1 lg:ml-3 w-[125px] justify-between">
                                    <a href="/login" class="flex justify-center text-blue-500 text-[16px] mr-3">로그인</a>
                                    <a href="/register" class="flex justify-center text-blue-500 text-[16px]">회원가입</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>
                <!-- 메인 콘텐츠 (모든 입력 요소를 하나의 form에 포함) -->
                <main class="container mx-auto p-8">
                    <!-- 로딩 -->
                    <div class="flex flex-col items-center justify-center h-screen text-center space-y-4">
                        <div class="max-w-xs">
                            <img alt="banner" src="assets/images/icon/nameLoading.png"
                                class="mx-auto max-h-80 w-auto" />
                        </div>
                        <div>
                            <div class="text-xl font-semibold text-black ml-10">멋진 이름을 만들고 있어요!</div>
                            <div class="text-xl font-semibold text-black ml-10">잠시만 기다려 주세요</div>
                        </div>
                    </div>
                </main>
                <!-- PC 버전 푸터 -->
                <footer class="hidden md:block bg-black text-aeae" id="kt_footer">
                    <div class="flex w-full mx-auto px-5" style="max-width: 1520px;">
                        <div class="flex flex-col justify-center my-10 text-gray-200" style="width:900px;">
                            <img class="h-8 w-[110px] mb-5" src="/assets/images/icon/footer_icon.png" alt="footer icon">
                            <div class="flex justify-between">
                                <div class="flex flex-col font-normal text-sm">
                                    <div>핫와이드 대표이사 : 조영록</div>
                                    <div>TEL : 031-266-5345 &nbsp; FAX : 0504-225-5345 &nbsp; E-MAIL : mail@hotwide.com
                                    </div>
                                    <div>사업자등록번호 : 866-01-00824 통신판매업신고번호 : 제2017-용인처인-0363호</div>
                                    <div>주소 : 경기도 용인시 수지구 죽전로 152, 단국대학교 글로컬산학협력관 312호</div>
                                    <div>Copyright ⓒ 2022 핫와이드 All Rights Reserved</div>
                                </div>
                                <div class="flex flex-col font-normal text-sm">
                                    <div>OPEN 10:00</div>
                                    <div>LUNCH TIME 12:00 ~ 13:00</div>
                                    <div>CLOSE 17:00</div>
                                    <div>주말 및 공휴일 휴무</div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="text-lg font-bold">CALL CENTER</div>
                                    <div class="font-semibold text-2xl">031.266.5345</div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <a href="#" class="mr-3"><img src="/assets/images/icon/naver.png" alt="naver"></a>
                                <a href="#" class="mr-3"><img src="/assets/images/icon/instagram.png"
                                        alt="instagram"></a>
                                <a href="#" class="mr-3"><img src="/assets/images/icon/youtube.png" alt="youtube"></a>
                                <a href="#"><img src="/assets/images/icon/facebook.png" alt="facebook"></a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- 모바일 버전 푸터 -->
                <footer class="block md:hidden py-4" id="kt_footer_mobile">
                    <div class="flex flex-col items-center justify-between">
                        <div class="flex flex-col space-y-2">
                            <a href="#">회사소개</a>
                            <a href="#">이용약관</a>
                            <a href="#">개인정보보호정책</a>
                            <a href="#">고객센터</a>
                        </div>
                        <div class="my-5">
                            <div class="flex flex-col space-y-1">
                                <span class="font-bold">(주)핫와이드</span>
                                <span>대표이사 : 조영록</span>
                                <span>TEL : 031-266-5345 | FAX : 0504-225-5345</span>
                                <span>E-MAIL : main@hotwide.com</span>
                                <span>사업자등록번호 : 866-01-00824 <a href="#" class="text-gray-500">[사업자번호조회]</a></span>
                                <span>통신판매업신고번호 : 제2017-용인처인-0363호</span>
                                <span>주소 : 경기도 용인시 수지구 죽전로 152, 단국대학교 글로컬산학협력관 312호</span>
                                <span class="font-bold">Copyright ⓒ 2022 핫와이드 All Rights Reserved</span>
                            </div>
                            <div class="mt-4 text-gray-500">
                                FOLLOW US
                                <a href="#"><img class="inline mr-2" src="/img/icon/naver.png" alt="naver"></a>
                                <a href="#"><img class="inline mr-2" src="/img/icon/instargram.png" alt="instagram"></a>
                                <a href="#"><img class="inline mr-2" src="/img/icon/youtube.png" alt="youtube"></a>
                                <a href="#"><img class="inline mr-2" src="/img/icon/facebook.png" alt="facebook"></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Custom JavaScript -->
    <script>
        window.onload = function () {
            chageLangSelect();
        };

        function chageLangSelect() {
            var langSelect = document.getElementById("header_select");
            var selectValue = langSelect.options[langSelect.selectedIndex].value;
            var header = document.getElementById("kt_header_menu");
            Array.from(header.children).forEach(function (child) {
                child.classList.remove("hidden");
            });
            var hideList = [];
            if (selectValue === "mark") {
                hideList = ["dashboardpatent", "dashboarddesign", "mypatent", "mydesign", "searchpatent", "searchdesign", "applypatent", "applydesign"];
            } else if (selectValue === "patent") {
                hideList = ["dashboardmark", "dashboarddesign", "mymark", "mydesign", "searchmark", "searchdesign", "applymark", "applydesign", "monitoring", "naming"];
            } else if (selectValue === "design") {
                hideList = ["dashboardmark", "dashboardpatent", "mymark", "mypatent", "searchmark", "searchpatent", "applymark", "applypatent", "monitoring", "naming"];
            }
            hideList.forEach(function (id) {
                var item = document.getElementById(id);
                if (item) item.classList.add("hidden");
            });
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function checkProcessingStatus() {
                fetch("/process.php")
                    .then(response => response.json())
                    .then(data => {
                        if (!data.processing) {
                            window.location.href = "/result.php"; // 처리 완료되면 결과 페이지로 이동
                        } else {
                            setTimeout(checkProcessingStatus, 1000); // 1초 후 다시 체크
                        }
                    })
                    .catch(error => console.error("Error:", error));
            }

            checkProcessingStatus(); // 최초 실행
        });
    </script>

</body>

</html>
