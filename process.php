<?php
session_start();

// 처음 요청 시 처리 상태 및 시작 시간 설정
if (!isset($_SESSION['processing'])) {
    $_SESSION['processing'] = true;
    $_SESSION['start_time'] = time();  // 첫 실행 때만 시간 설정
}

// 처리 시작 후 5초가 지나면 완료 상태로 변경
if (time() - $_SESSION['start_time'] > 5) {
    $_SESSION['processing'] = false;
}

// 현재 처리 상태 반환
echo json_encode(["processing" => $_SESSION['processing']]);
exit();
?>
