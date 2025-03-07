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
                    <!-- 결과 -->
                    <div class="text-2xl font-semibold text-black ml-10">나만의 네이밍이 완성되었어요!</div>
                    <div class="text-sm font-semibold text-gray-500 ml-10 mt-1">마음에 드는 이름의 상세정보를 확인해보세요.</div>

                    <div class="flex flex-col items-center justify-center text-center mb-10">
                        <div class="max-w-xs">
                            <img alt="banner" src="assets/images/icon/bulb.png" class="mx-auto max-h-80 w-auto" />
                        </div>
                        <div>
                            <div class="text-base font-semibold text-black mt-2">마음에 드는 네이밍이 있나요?</div>
                            <div class="text-base font-semibold text-black">상품 분류 / 지정상품 선택을 통해 정확한 상표 등록 가능성을 알아볼 수
                                있어요!</div>
                        </div>
                    </div>

                    <!-- 카드 영역: id="items-container" 추가 (총 27개 카드) -->
                    <div id="items-container" class="flex flex-wrap justify-center">
                        <!-- 카드 1 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 1</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 1)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 2 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 2</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 2)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 3 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 3</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 3)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 4 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 4</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 4)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 5 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 5</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 5)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 6 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 6</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 6)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 7 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 7</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 7)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 8 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 8</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 8)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 9 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 9</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 9)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 10 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 10</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 10)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 11 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 11</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 11)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 12 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 12</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 12)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 13 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 13</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 13)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 14 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 14</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 14)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 15 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 15</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 15)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 16 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 16</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 16)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 17 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 17</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 17)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 18 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 18</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 18)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 19 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 19</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 19)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 20 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 20</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 20)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 21 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 21</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 21)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 22 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 22</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 22)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 23 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 23</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 23)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 24 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 24</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 24)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 25 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 25</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 25)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 26 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 26</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 26)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                        <!-- 카드 27 -->
                        <div class="max-w-sm border rounded-md shadow-sm p-4 bg-white mx-2 my-2">
                            <h2 class="text-lg font-semibold text-gray-800">Marbreon 27</h2>
                            <p class="text-sm text-gray-500 mb-2">(마브레온 27)</p>
                            <p class="text-sm text-gray-600">
                                프랑스식 'Marbre(대리석)'와 'on'의 조합으로, 대리석처럼 고급스럽고 견고한 수제 마카롱을 상징합니다.
                            </p>
                            <div class="flex flex-wrap gap-2 mt-3">
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">단어의 결합 기법</span>
                                <span class="px-2 py-1 text-xs text-gray-600 bg-gray-100 rounded-full">자연어 기법</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <button class="w-full px-4 py-2 bg-blue-500 text-white rounded">네이밍 확인하기</button>
                                <div class="flex w-full gap-2">
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">상표
                                        출원</button>
                                    <button class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded">디자인
                                        요청</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 페이지네이션 버튼 -->
                    <div class="flex justify-center items-center space-x-2 mt-4">
                        <!-- 이전 버튼 -->
                        <button id="prevBtn"
                            class="px-3 py-1 border rounded text-gray-600 hover:bg-gray-200">Prev</button>
                        <!-- 페이지 번호 버튼 (data-page 속성 추가, 기본 active는 1번 버튼) -->
                        <button data-page="1" onclick="goToPage(1)"
                            class="page-btn px-3 py-1 border rounded text-gray-600 hover:bg-gray-200">1</button>
                        <button data-page="2" onclick="goToPage(2)"
                            class="page-btn px-3 py-1 border rounded text-gray-600 hover:bg-gray-200">2</button>
                        <button data-page="3" onclick="goToPage(3)"
                            class="page-btn px-3 py-1 border rounded text-gray-600 hover:bg-gray-200">3</button>
                        <!-- 다음 버튼 -->
                        <button id="nextBtn"
                            class="px-3 py-1 border rounded text-gray-600 hover:bg-gray-200">Next</button>
                    </div>

                    <div class="relative w-full p-4 bg-gray-100">
                        <a href="/index.php">
                            <button
                                class="absolute right-0 px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">
                                다시 생성하기
                            </button>
                        </a>
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
            updateActivePageButton(); // 초기 active 상태 업데이트
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
        // 페이지당 표시할 카드 개수를 9로 설정
        const itemsPerPage = 9;
        let currentPage = 1;

        // #items-container 내부의 모든 카드(div) 요소들을 가져옵니다.
        const items = document.querySelectorAll('#items-container > div');
        const totalPages = Math.ceil(items.length / itemsPerPage);

        // 페이지 번호 버튼 active 스타일 업데이트 함수
        function updateActivePageButton() {
            document.querySelectorAll('.page-btn').forEach(function (button) {
                if (parseInt(button.getAttribute('data-page')) === currentPage) {
                    button.classList.add('bg-blue-500', 'text-white');
                } else {
                    button.classList.remove('bg-blue-500', 'text-white');
                }
            });
        }

        // 특정 페이지의 카드만 보이도록 설정하는 함수
        function showPage(page) {
            // 모든 카드를 먼저 숨깁니다.
            items.forEach(item => item.style.display = 'none');

            // 해당 페이지에 해당하는 카드들만 보이게 함
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;

            for (let i = startIndex; i < endIndex && i < items.length; i++) {
                items[i].style.display = 'block';
            }
        }

        // 페이지 이동 함수
        function goToPage(page) {
            if (page < 1) page = 1;
            if (page > totalPages) page = totalPages;
            currentPage = page;
            showPage(currentPage);
            updateActivePageButton();
        }

        // '이전' 버튼 클릭 시 이전 페이지로 이동
        document.getElementById('prevBtn').addEventListener('click', () => {
            goToPage(currentPage - 1);
        });

        // '다음' 버튼 클릭 시 다음 페이지로 이동
        document.getElementById('nextBtn').addEventListener('click', () => {
            goToPage(currentPage + 1);
        });

        // 페이지 로드 시 첫 페이지(1페이지)를 보여줍니다.
        showPage(currentPage);
    </script>
</body>

</html>