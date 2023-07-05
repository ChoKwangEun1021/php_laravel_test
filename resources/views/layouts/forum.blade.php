<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Forum</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <!-- 폰트어썸 -->
  <script src="https://kit.fontawesome.com/6a2bc27371.js" crossorigin="anonymous"></script>

  <!-- 추가할 css -->
  @yield('inside_head_tag')
</head>

<body>
  {{-- 헤더 부분 --}}
  @include('inc.nav')
  <!-- 본분 부분 -->
  @yield('content')
  <!-- 푸터 부분 -->
  @include('inc.footer')
  {{-- js 추가 --}}
  @yield('before_body_end_tag')
</body>

</html>