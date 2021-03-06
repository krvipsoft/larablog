<!DOCTYPE html>

{{-- 根据 config/app.php => locale 切换语言 --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  {{-- 所有页面所需公共头部 --}}
  @include('shared._common_meta')

  {{-- css 样式 --}}
  @include('shared.sb-css-js._s_css')

</head>

<body class="bg-gradient-primary">

  <div class="container">
    {{-- 提示信息 --}}
    @include('shared._messages')
    {{-- 此处填充内容 --}}
    @yield('content')
  </div>

{{-- js --}}
@include('shared.sb-css-js._s_js')

</body>

</html>
