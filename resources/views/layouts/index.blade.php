@include('layouts.header')

       @include('layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
           
            @yield('title_page')
            <!-- Main content -->
            
            <section class="content">

                <!-- Your Page Content Here -->
                 @yield('content_page')

            </section><!-- /.content -->

        </div><!-- /.content-wrapper -->
     @yield('scripts')
@include('layouts.footer')
