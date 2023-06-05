<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

    <title>Admin Panel</title>

    @include('admin.layouts.styles')
</head>

<body>
<div id="app">
    
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
        @include('admin.layouts.navbar')


       @include('admin.layouts.sidebar')
        

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>@yield('heading')</h1>
                    <div class="ml-auto">
                       @yield('top_right_button')
                    </div>
                </div>
                
                    @yield('main_content')

            </section>
        </div>

    </div>
</div>

@include('admin.layouts.script')


@if($errors->any())
    @foreach($errors->all() as $error)
   <script>
     iziToast.error({
    title: '',
    position: 'topRight',
    message: '{{ $error }}'
});

   </script>
    @endforeach
@endif    

@if(session()->get('success'))
<script>
    iziToast.success({
    title: 'OK',
    message: '{{ session()->get('success') }}'
});
</script>
@endif

</body>
</html>