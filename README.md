# 🖥️ 프로젝트 소개
PHP를 활용한 웹사이트 만들기(의류쇼핑몰)
<br>

## 🕰️ 개발 기간
* 22.1.20 - 23.02.3

## 🧑‍🤝‍🧑 맴버구성
 - 남민섭: 회원가입, 장바구니, 상품추가, 리뷰
 - 전진솔: 메인화면, 상품 리스트 페이지
 - 김재원: 로그인, 상품 상세보기 페이지 

## ⚙️ 사용한 스킬
Html, Css, JavaScript, PHP, MySQL

#### 관리자
-Id: admin

-password: admin

## 📌 주요 기능
### 로그인
- ID찾기, PW찾기
- session함수를 사용하여 로그인 한 id값 세션스토리지에 저장

### 회원가입
- ID 중복 체크
- password_hash 사용하여 비밀번호 암호화
- 정규표현식 사용하여 사용자가 알맞는 값을 입력하게 메세지(알림) 출력

### 로그아웃

### 상품 등록
- 관리자id로만 접근 가능
- 이미지 업로드

### 상품리스트 페이지
- 각 의류상품 종류 클릭시 관련 종류 의류 리스트 출력

### 상품 상세보기 페이지
- 상품에 대한 상세 내용
- 장바구니 담기
- 해당 의류 상품 종류의 리뷰들 출력

### 장바구니 페이지
- 상품 개별 선택 체크박스 클릭시 총 상품 금액 표시
- 개별 선택 삭제

### 리뷰 페이지
- 글 추가, 수정, 삭제 
- 페이징 기능
- 상세보기

#### 메인페이지
- 스크롤 이벤트를 사용하여 클릭만으로 위 아래로 위치 이동 가능
