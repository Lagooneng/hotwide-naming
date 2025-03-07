<?php
// index.php
// 브라우저에 UTF-8 인코딩과 HTML 컨텐츠 타입을 전달
header("Content-Type: text/html; charset=utf-8");
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
                    <form action="/nameLoading.php" method="POST">
                        <!-- 네이밍 제목 및 배너 -->
                        <div>
                            <div class="mr-5 md:mr-10 mb-5">
                                <div class="text-xl font-semibold text-gray-800">네이밍</div>
                            </div>
                            <div class="text-center" style="max-height: 800px;">
                                <a href="/">
                                    <img alt="banner" src="assets/images/banner/TempBanner.png" class="mx-auto"
                                        style="max-height: 800px; width: auto; display: block;" />
                                </a>
                            </div>
                        </div>

                        <!-- 카테고리 선택 (단일 선택 - radio 버튼) -->
                        <div>
                            <div class="mr-5 md:mr-10 my-5">
                                <div class="text-lg font-semibold text-gray-800">카테고리 선택</div>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-5">
                                <label class="cursor-pointer">
                                    <input type="radio" name="naming_category" value="제품 · 서비스명" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        제품 · 서비스명
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="naming_category" value="상호명" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        상호명
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="naming_category" value="회사 · 법인명" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        회사 · 법인명
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="naming_category" value="아이디 · 채널명" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        아이디 · 채널명
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="naming_category" value="사람 · 반려동물" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        사람 · 반려동물
                                    </div>
                                </label>
                            </div>
                        </div>
                        <!-- 간단한 설명 -->
                        <div>
                            <div class="mr-5 md:mr-10 my-5">
                                <div class="text-lg font-semibold text-gray-800">간단한 설명</div>
                                <p>생략해도 괜찮지만, 자세할수록 원하는 이름을 만들어줘요</p>
                            </div>
                            <div class="mb-5">
                                <input type="text" id="explanation" name="explanation" placeholder="예시) 세련된 주방 용품 이름"
                                    class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                                    required>
                            </div>
                        </div>
                        <!-- GPT 모델 선택 -->
                        <div>
                            <div class="mr-5 md:mr-10 my-5">
                                <div class="text-lg font-semibold text-gray-800">GPT 모델 선택</div>
                            </div>
                            <div class="w-80 p-1 mb-10">
                                <select name="gpt_model"
                                    class="w-full p-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200">
                                    <option value="gpt-4o-mini">속도가 빨라요! (GPT-4o-mini)</option>
                                    <option value="gpt-4o">정확도가 높아요! (GPT-4o)</option>
                                </select>
                            </div>
                        </div>

                        <div class="w-full border-t border-gray-300 mx-2 mb-10"></div>

                        <!-- 진행 단계 표시 -->
                        <div>
                            <div class="flex items-center space-x-2 mb-10">
                                <!-- Step 1 -->
                                <div class="flex items-center space-x-1">
                                    <div
                                        class="w-6 h-6 flex items-center justify-center bg-blue-500 text-white text-sm font-bold rounded-full">
                                        1
                                    </div>
                                    <span class="text-black font-medium">기본 정보 선택</span>
                                </div>
                                <!-- Line -->
                                <div class="w-10 border-t border-gray-300 mx-2"></div>
                                <!-- Step 2 -->
                                <div class="flex items-center space-x-1 opacity-50">
                                    <div
                                        class="w-6 h-6 flex items-center justify-center bg-gray-300 text-gray-500 text-sm font-bold rounded-full">
                                        2
                                    </div>
                                    <span class="text-gray-500 font-medium">추가 정보 선택</span>
                                </div>
                            </div>
                        </div>
                        <!-- 업종 선택 -->
                        <div>
                            <div class="mr-5 md:mr-10 my-5">
                                <div class="text-lg font-semibold text-gray-800">1. 네이밍을 사용할 제품 또는 업종을 선택하세요</div>
                            </div>
                            <div class="mb-5">
                                <input type="text" id="keyward" name="keyward" placeholder="카페, 미용실 등 업종 키워드를 검색해보세요"
                                    class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none"
                                    required>
                            </div>
                        </div>

                        <!-- 업종 관련 카테고리 체크박스 (여러 개 선택 가능) -->
                        <div class="p-4">
                            <div class="flex flex-wrap gap-2">
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="식품" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">식품</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="패션" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">패션</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="미용" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">미용</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="음악/스포츠" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">음악/스포츠</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="인테리어" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">인테리어</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="문화/교육/여가" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">문화/교육/여가</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="생활/주방" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">생활/주방</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="의료기기" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">의료기기</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="서적/디자인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">서적/디자인</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="수송" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">수송</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="기초소재" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">기초소재</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="산업용기계" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">산업용기계</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="사무/공구/자재" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">사무/공구/자재</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="전문서비스" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">전문서비스</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="1차산업" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">1차산업</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="전기/전자/통신" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">전기/전자/통신</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="연료/오일" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">연료/오일</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="금융/보험" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">금융/보험</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="부동산/건설" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">부동산/건설</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="수리/수선" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">수리/수선</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="정보통신" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">정보통신</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="운수/창고" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">운수/창고</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="기초소재" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">기초소재</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="화학/의약/염료/총포"
                                        class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <img src="https://via.placeholder.com/16" alt="아이콘" class="w-4 h-4 mr-2" />
                                        <span class="text-sm">화학/의약/염료/총포</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <!-- 브랜드 가치 섹션 -->
                        <div>
                            <div class="mr-5 md:mr-10 my-5">
                                <div class="text-lg font-semibold text-gray-800 mb-2">
                                    2. 원하는 브랜드 가치를 선택하세요.
                                </div>
                                <p>브랜드 가치는 2~3개 선택하는걸 추천드려요!</p>
                            </div>

                            <!-- 기존 브랜드 가치 체크박스 영역 -->
                            <div id="brandValueContainer" class="flex flex-wrap gap-2 mb-4">
                                <!-- 예시 체크박스 (미리 정의된 브랜드 가치) -->
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="트렌디한" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">트렌디한</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="전문적인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">전문적인</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="고급스러운" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">고급스러운</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="건강한" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">건강한</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="따뜻한" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">따뜻한</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="모던한" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">모던한</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="감성적인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">감성적인</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="친환경적인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">친환경적인</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="유니크한" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">유니크한</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="실용적인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">실용적인</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="친근한" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">친근한</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="화려한" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">화려한</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="유쾌한" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">유쾌한</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="편안한" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">편안한</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="brand_values[]" value="전문적인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">엔티크한</span>
                                    </div>
                                </label>
                            </div>

                            <!-- 직접 추가하기 버튼 -->
                            <button type="button" id="addBrandValueBtn"
                                class="mt-2 px-4 py-2 bg-gray-200 text-noir rounded mb-5">
                                직접 추가하기
                            </button>

                            <!-- 사용자 입력을 위한 입력창 (기본은 숨김) -->
                            <div id="brandValueInputWrapper" class="mt-2 hidden">
                                <input type="text" id="brandValueInput" placeholder="브랜드 가치 입력"
                                    class="px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none" />
                                <button type="button" id="saveBrandValueBtn"
                                    class="ml-2 px-4 py-2 bg-blue-500 text-white rounded">
                                    추가
                                </button>
                            </div>
                        </div>


                        <!-- 시드 단어 섹션 -->
                        <div class="mb-10">
                            <div class="mr-5 md:mr-10 my-5">
                                <div class="text-lg font-semibold text-gray-800 mb-2">
                                    3. 네이밍에 넣고 싶은 시드 단어를 적어주세요
                                </div>
                                <p>네이밍할 때 넣고 싶은 단어가 있다면 직접 입력하고 엔터를 눌러주세요! (최대 3개)</p>
                            </div>

                            <div id="seedWardContainer" class="flex flex-wrap gap-2 mb-4">

                            </div>

                            <!-- 직접 추가하기 버튼 -->
                            <button type="button" id="addSeedWardBtn"
                                class="mt-2 px-4 py-2 bg-gray-200 text-noir rounded mb-5">
                                직접 추가하기
                            </button>

                            <!-- 사용자 입력을 위한 입력창 (기본은 숨김) -->
                            <div id="seedWardInputWrapper" class="mt-2 hidden">
                                <input type="text" id="seedWardInput" placeholder="시드 단어 입력"
                                    class="px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none" />
                                <button type="button" id="saveSeedWardBtn"
                                    class="ml-2 px-4 py-2 bg-blue-500 text-white rounded">
                                    추가
                                </button>
                            </div>
                        </div>

                        <div class="w-full border-t border-gray-300 mx-2 mb-10"></div>

                        <!-- 진행 단계 표시 -->
                        <div>
                            <div class="flex items-center space-x-2 mb-10">
                                <!-- Step 1 -->
                                <div class="flex items-center space-x-1">
                                    <div
                                        class="w-6 h-6 flex items-center justify-center bg-blue-500 text-white text-sm font-bold rounded-full">
                                        1
                                    </div>
                                    <span class="text-gray-500 font-medium opacity-50">기본 정보 선택</span>
                                </div>
                                <!-- Line -->
                                <div class="w-10 border-t border-gray-300 mx-2"></div>
                                <!-- Step 2 -->
                                <div class="flex items-center space-x-1">
                                    <div
                                        class="w-6 h-6 flex items-center justify-center bg-blue-500 text-white text-sm font-bold rounded-full">
                                        2
                                    </div>
                                    <span class="text-black font-medium">추가 정보 선택</span>
                                </div>
                            </div>
                        </div>

                        <!-- 타겟 섹션 -->
                        <div>
                            <div class="mr-5 md:mr-10 my-5">
                                <div class="text-lg font-semibold text-gray-800 mb-2">
                                    4. 어떤 타깃에 맞춰 네이밍을 하고 싶은지 알려주세요.
                                </div>
                                <p>원하는 대상의 취향에 꼭 맞는 이름이 나올 거에요! (최대 3개)</p>
                            </div>

                            <!-- 기존 브랜드 가치 체크박스 영역 -->
                            <div id="targetContainer" class="flex flex-wrap gap-2 mb-4">
                                <!-- 예시 체크박스 (미리 정의된 타깃) -->
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="10대" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">10대</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="20~30대" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">20~30대</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="40~50대" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">40~50대</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="남성" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">남성</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="여성" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">여성</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="유아동" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">유아동</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="학생" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">학생</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="성인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">성인</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="노인/시니어" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">노인/시니어</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="키즈" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">키즈</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="MZ세대" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">MZ세대</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="직장인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">직장인</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="학부모" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">학부모</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="청년" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">청년</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="외국인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">외국인</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="소수자" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">소수자</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="지역민" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">지역민</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="1인가구" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">1인가구</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="반려인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">반려인</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="targets[]" value="매니아" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">매니아</span>
                                    </div>
                                </label>


                            </div>

                            <!-- 직접 추가하기 버튼 -->
                            <button type="button" id="addTargetBtn"
                                class="mt-2 px-4 py-2 bg-gray-200 text-noir rounded mb-5">
                                직접 추가하기
                            </button>

                            <!-- 사용자 입력을 위한 입력창 (기본은 숨김) -->
                            <div id="targetInputWrapper" class="mt-2 hidden">
                                <input type="text" id="targetInput" placeholder="타겟 입력"
                                    class="px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none" />
                                <button type="button" id="saveTargetBtn"
                                    class="ml-2 px-4 py-2 bg-blue-500 text-white rounded">
                                    추가
                                </button>
                            </div>
                        </div>

                        <!-- 트렌드 섹션 -->
                        <div>
                            <div class="mr-5 md:mr-10 my-5">
                                <div class="text-lg font-semibold text-gray-800 mb-2">
                                    5. 어떤 트렌드에 맞춰 네이밍을 하고 싶은지 알려주세요.
                                </div>
                                <p>원하는 트렌드에 꼭 맞는 이름이 나올 거에요! (최대 3개)</p>
                            </div>

                            <!-- 기존 브랜드 가치 체크박스 영역 -->
                            <div id="trendContainer" class="flex flex-wrap gap-2 mb-4">
                                <!-- 예시 체크박스 (미리 정의된 트렌드) -->
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="프리미엄" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">프리미엄</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="수제" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">수제</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="유기농" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">유기농</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="1인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">1인</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="비건" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">비건</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="즉석" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">즉석</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="로컬" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">로컬</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="퓨전" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">퓨전</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="레트로" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">레트로</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="테이크아웃" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">테이크아웃</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="무인" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">무인</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="글로벌" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">글로벌</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="셀프" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">셀프</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="B2B" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">B2B</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="AI" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">AI</span>
                                    </div>
                                </label>


                            </div>

                            <!-- 직접 추가하기 버튼 -->
                            <button type="button" id="addTrendBtn"
                                class="mt-2 px-4 py-2 bg-gray-200 text-noir rounded mb-5">
                                직접 추가하기
                            </button>

                            <!-- 사용자 입력을 위한 입력창 (기본은 숨김) -->
                            <div id="trendInputWrapper" class="mt-2 hidden">
                                <input type="text" id="trendInput" placeholder="트렌드 입력"
                                    class="px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none" />
                                <button type="button" id="saveTrendBtn"
                                    class="ml-2 px-4 py-2 bg-blue-500 text-white rounded">
                                    추가
                                </button>
                            </div>
                        </div>

                        <!-- 언어 스타일 섹션 -->
                        <div>
                            <div class="mr-5 md:mr-10 my-5">
                                <div class="text-lg font-semibold text-gray-800 mb-2">
                                    6. 어떤 언어 스타일에 맞춰 네이밍을 하고 싶은지 알려주세요.
                                </div>
                                <p>원하는 언어 스타일에 꼭 맞는 이름이 나올 거에요! (최대 3개)</p>
                            </div>

                            <!-- 기존 언어 스타일 체크박스 영역 -->
                            <div id="languageStyleContainer" class="flex flex-wrap gap-2 mb-4">
                                <!-- 예시 체크박스 (미리 정의된 언어 스타일) -->
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="순우리말" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">순우리말</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="한자어" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">한자어</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="영어식" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">영어식</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="프랑스식" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">프랑스식</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="독일식" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">독일식</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="이태리식" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">이태리식</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="스페인식" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">스페인식</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="일본식" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">일본식</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="라틴식" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">라틴식</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="그리스식" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">그리스식</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="포르투갈식" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">포르투갈식</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="스웨덴식" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">스웨덴식</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="language_styles[]" value="아프리카식" class="hidden peer" />
                                    <div
                                        class="inline-flex items-center px-3 py-2 bg-gray-100 rounded transition peer-checked:bg-blue-100 peer-checked:text-noir">
                                        <span class="text-sm">아프리카식</span>
                                    </div>
                                </label>

                            </div>

                            <!-- 직접 추가하기 버튼 -->
                            <button type="button" id="addLanguageStyleBtn"
                                class="mt-2 px-4 py-2 bg-gray-200 text-noir rounded mb-5">
                                직접 추가하기
                            </button>

                            <!-- 사용자 입력을 위한 입력창 (기본은 숨김) -->
                            <div id="languageStyleInputWrapper" class="mt-2 hidden">
                                <input type="text" id="languageStyleInput" placeholder="언어 스타일 입력"
                                    class="px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none" />
                                <button type="button" id="saveLanguageStyleBtn"
                                    class="ml-2 px-4 py-2 bg-blue-500 text-white rounded">
                                    추가
                                </button>
                            </div>
                        </div>

                        <!-- 제출 버튼 -->
                        <div class="p-4 flex justify-end">
                            <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">
                                이대로 생성하기
                            </button>
                        </div>


                    </form>
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
    <!-- 브랜드 가치 -->
    <script>
        // '직접 추가하기' 버튼을 클릭하면 입력창 보이기
        document.getElementById("addBrandValueBtn").addEventListener("click", function () {
            document.getElementById("brandValueInputWrapper").classList.remove("hidden");
        });

        // '추가' 버튼을 클릭하면 입력된 값으로 체크박스 생성
        document.getElementById("saveBrandValueBtn").addEventListener("click", function () {
            var value = document.getElementById("brandValueInput").value.trim();
            if (value !== "") {
                var container = document.getElementById("brandValueContainer");

                // 새로운 라벨과 체크박스 요소 생성
                var label = document.createElement("label");
                label.classList.add("cursor-pointer");

                var input = document.createElement("input");
                input.type = "checkbox";
                input.name = "brand_values[]";
                input.value = value;
                input.classList.add("hidden", "peer");

                var div = document.createElement("div");
                div.classList.add("inline-flex", "items-center", "px-3", "py-2", "bg-gray-100", "rounded", "transition", "peer-checked:bg-blue-100", "peer-checked:text-noir");

                var span = document.createElement("span");
                span.classList.add("text-sm");
                span.textContent = value;

                // 요소 조립
                div.appendChild(span);
                label.appendChild(input);
                label.appendChild(div);
                container.appendChild(label);

                // 입력창 초기화 및 숨기기
                document.getElementById("brandValueInput").value = "";
                document.getElementById("brandValueInputWrapper").classList.add("hidden");
            }
        });
    </script>
    <!-- 시드 단어 -->
    <script>
        // '직접 추가하기' 버튼을 클릭하면 입력창 보이기
        document.getElementById("addSeedWardBtn").addEventListener("click", function () {
            document.getElementById("seedWardInputWrapper").classList.remove("hidden");
        });

        // '추가' 버튼을 클릭하면 입력된 값으로 체크박스 생성
        document.getElementById("saveSeedWardBtn").addEventListener("click", function () {
            var value = document.getElementById("seedWardInput").value.trim();
            if (value !== "") {
                var container = document.getElementById("seedWardContainer");

                // 새로운 라벨과 체크박스 요소 생성
                var label = document.createElement("label");
                label.classList.add("cursor-pointer");

                var input = document.createElement("input");
                input.type = "checkbox";
                input.name = "seed_wards[]";
                input.value = value;
                input.classList.add("hidden", "peer");

                var div = document.createElement("div");
                div.classList.add("inline-flex", "items-center", "px-3", "py-2", "bg-gray-100", "rounded", "transition", "peer-checked:bg-blue-100", "peer-checked:text-noir");

                var span = document.createElement("span");
                span.classList.add("text-sm");
                span.textContent = value;

                // 요소 조립
                div.appendChild(span);
                label.appendChild(input);
                label.appendChild(div);
                container.appendChild(label);

                // 입력창 초기화 및 숨기기
                document.getElementById("seedWardInput").value = "";
                document.getElementById("seedWardInputWrapper").classList.add("hidden");
            }
        });

        // 체크박스가 변경될 때마다 선택 개수 확인 (최대 3개)
        document.getElementById("seedWardContainer").addEventListener("change", function (e) {
            if (e.target && e.target.type === "checkbox") {
                var checkedCount = document.querySelectorAll('input[name="seed_wards[]"]:checked').length;
                if (checkedCount > 3) {
                    alert("최대 3개까지만 선택 가능합니다.");
                    e.target.checked = false;
                }
            }
        });
    </script>
    <!-- 타깃 -->
    <script>
        // '직접 추가하기' 버튼을 클릭하면 입력창 보이기
        document.getElementById("addTargetBtn").addEventListener("click", function () {
            document.getElementById("targetInputWrapper").classList.remove("hidden");
        });

        // '추가' 버튼을 클릭하면 입력된 값으로 체크박스 생성
        document.getElementById("saveTargetBtn").addEventListener("click", function () {
            var value = document.getElementById("targetInput").value.trim();
            if (value !== "") {
                var container = document.getElementById("targetContainer");

                // 새로운 라벨과 체크박스 요소 생성
                var label = document.createElement("label");
                label.classList.add("cursor-pointer");

                var input = document.createElement("input");
                input.type = "checkbox";
                input.name = "targets[]";
                input.value = value;
                input.classList.add("hidden", "peer");

                var div = document.createElement("div");
                div.classList.add("inline-flex", "items-center", "px-3", "py-2", "bg-gray-100", "rounded", "transition", "peer-checked:bg-blue-100", "peer-checked:text-noir");

                var span = document.createElement("span");
                span.classList.add("text-sm");
                span.textContent = value;

                // 요소 조립
                div.appendChild(span);
                label.appendChild(input);
                label.appendChild(div);
                container.appendChild(label);

                // 입력창 초기화 및 숨기기
                document.getElementById("targetInput").value = "";
                document.getElementById("targetInputWrapper").classList.add("hidden");
            }
        });

        // 체크박스가 변경될 때마다 선택 개수 확인 (최대 3개)
        document.getElementById("targetContainer").addEventListener("change", function (e) {
            if (e.target && e.target.type === "checkbox") {
                var checkedCount = document.querySelectorAll('input[name="targets[]"]:checked').length;
                if (checkedCount > 3) {
                    alert("최대 3개까지만 선택 가능합니다.");
                    e.target.checked = false;
                }
            }
        });
    </script>
    <!-- 트렌드 -->
    <script>
        // '직접 추가하기' 버튼을 클릭하면 입력창 보이기
        document.getElementById("addTrendBtn").addEventListener("click", function () {
            document.getElementById("trendInputWrapper").classList.remove("hidden");
        });

        // '추가' 버튼을 클릭하면 입력된 값으로 체크박스 생성
        document.getElementById("saveTrendBtn").addEventListener("click", function () {
            var value = document.getElementById("trendInput").value.trim();
            if (value !== "") {
                var container = document.getElementById("trendContainer");

                // 새로운 라벨과 체크박스 요소 생성
                var label = document.createElement("label");
                label.classList.add("cursor-pointer");

                var input = document.createElement("input");
                input.type = "checkbox";
                input.name = "trends[]";
                input.value = value;
                input.classList.add("hidden", "peer");

                var div = document.createElement("div");
                div.classList.add("inline-flex", "items-center", "px-3", "py-2", "bg-gray-100", "rounded", "transition", "peer-checked:bg-blue-100", "peer-checked:text-noir");

                var span = document.createElement("span");
                span.classList.add("text-sm");
                span.textContent = value;

                // 요소 조립
                div.appendChild(span);
                label.appendChild(input);
                label.appendChild(div);
                container.appendChild(label);

                // 입력창 초기화 및 숨기기
                document.getElementById("trendInput").value = "";
                document.getElementById("trendInputWrapper").classList.add("hidden");
            }
        });

        // 체크박스가 변경될 때마다 선택 개수 확인 (최대 3개)
        document.getElementById("trendContainer").addEventListener("change", function (e) {
            if (e.target && e.target.type === "checkbox") {
                var checkedCount = document.querySelectorAll('input[name="trends[]"]:checked').length;
                if (checkedCount > 3) {
                    alert("최대 3개까지만 선택 가능합니다.");
                    e.target.checked = false;
                }
            }
        });
    </script>
    <!-- 언어 스타일 -->
    <script>
        // '직접 추가하기' 버튼을 클릭하면 입력창 보이기
        document.getElementById("addLanguageStyleBtn").addEventListener("click", function () {
            document.getElementById("languageStyleInputWrapper").classList.remove("hidden");
        });

        // '추가' 버튼을 클릭하면 입력된 값으로 체크박스 생성
        document.getElementById("saveLanguageStyleBtn").addEventListener("click", function () {
            var value = document.getElementById("languageStyleInput").value.trim();
            if (value !== "") {
                var container = document.getElementById("languageStyleContainer");

                // 새로운 라벨과 체크박스 요소 생성
                var label = document.createElement("label");
                label.classList.add("cursor-pointer");

                var input = document.createElement("input");
                input.type = "checkbox";
                input.name = "language_styles[]";
                input.value = value;
                input.classList.add("hidden", "peer");

                var div = document.createElement("div");
                div.classList.add("inline-flex", "items-center", "px-3", "py-2", "bg-gray-100", "rounded", "transition", "peer-checked:bg-blue-100", "peer-checked:text-noir");

                var span = document.createElement("span");
                span.classList.add("text-sm");
                span.textContent = value;

                // 요소 조립
                div.appendChild(span);
                label.appendChild(input);
                label.appendChild(div);
                container.appendChild(label);

                // 입력창 초기화 및 숨기기
                document.getElementById("languageStyleInput").value = "";
                document.getElementById("languageStyleWrapper").classList.add("hidden");
            }
        });

        // 체크박스가 변경될 때마다 선택 개수 확인 (최대 3개)
        document.getElementById("languageStyleContainer").addEventListener("change", function (e) {
            if (e.target && e.target.type === "checkbox") {
                var checkedCount = document.querySelectorAll('input[name="language_styles[]"]:checked').length;
                if (checkedCount > 3) {
                    alert("최대 3개까지만 선택 가능합니다.");
                    e.target.checked = false;
                }
            }
        });
    </script>
</body>

</html>