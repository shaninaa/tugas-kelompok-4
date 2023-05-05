<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>UD. Sulfi Jaya &mdash; Shop</title>

        @include('admin/layout/css_global')
        @yield('custom_css')
    </head>
    <body>
        <div id="app">
        <div class="main-wrapper">
            @include('admin/layout/navbar')
            @include('admin/layout/sidebar')
            <!-- Main Content -->
              <section class="content">
                @yield('content')
                <script type="text/javascript">
                    @yield('script')
                </script>
              </section>
            </div> 
        </div>
        @include('layout/js')
        @yield('custom_script')
    </body>
</html>
