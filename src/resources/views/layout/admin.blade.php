<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        @include('admin.partials.head')
    </head>
 
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> 
    <div class="app-wrapper">
    
 
        @include('admin.partials.app-header')
 
    @include('admin.partials.app-sidebar')


        <main class="app-main">
            @yield('content')
        </main>
      
        @include('admin.partials.app-footer')
 
    </div>
    
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    @include('partials.script')
    @stack('plugins')

    <script src="{{ asset('public/davilla/js/script.js') }}"></script>

    @stack('scripts')
 
</body> 


</html>
 