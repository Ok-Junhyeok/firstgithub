<?php
// 폼 데이터 가져오기
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// 데이터 유효성 검사 수행
// ...

// 데이터베이스에 연결 (가정: 데이터베이스가 있음)
$dbHost = 'root';
$dbUser = 'opper';
$dbPass = 'wjsansrk';
$dbName = 'db_name';

// 데이터베이스 연결 생성
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// 연결 확인
if ($conn -> connect_error) {
  die("연결 실패: " .$conn->connect_error);
}

// 사용자를 데이터베이스에 삽입하기 위한 SQL 쿼리 준비 및 실행
$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
if ($conn->query($sql) === TRUE) {
  echo "등록 성공!";
} else {
  echo "오류: ".$sql."<br>".$conn->error;
}

// 데이터베이스 연결 종료
$conn -> close();
?>