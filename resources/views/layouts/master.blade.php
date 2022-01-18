<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}">
@include('layouts.head')
<body>
    <div class="{{ LaravelLocalization::getCurrentLocale() == 'ar'?'page-wrapper rtl':'page-wrapper'}}">
@include('layouts.header')
    @yield('content')
@include('layouts.fotter')
</body>
</html>
