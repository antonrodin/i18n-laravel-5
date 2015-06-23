<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
	<meta charset="utf-8">
        <title>{{ App::getLocale() }}</title>
    </head>
<body>
    
    <ul>
        <li><a href='{{ route('change_locale', array('locale' => 'es')) }}'>Español</a></li>
        <li><a href='{{ route('change_locale', array('locale' => 'ru')) }}'>Русский</a></li>
        <li><a href='{{ route('change_locale', array('locale' => 'en')) }}'>English</a></li>
    </ul>
      
    <ul>
        <li><a href='{{ route('home') }}'>{{ trans('test.Home') }}</a></li>
        <li><a href='{{ route('contact') }}'>{{ trans('test.Contact') }}</a></li>
    </ul>
    
    @yield('content')

</body></html>