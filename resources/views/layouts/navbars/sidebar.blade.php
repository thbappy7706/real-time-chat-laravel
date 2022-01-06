<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-normal">
            {{ __('Real time chat') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>

            <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('posts.index') }}">
                    <i class="material-icons">forum</i>
                    <p>{{ __('Posts') }}</p>
                </a>
            </li>

            {{--      <li class="nav-item {{ ($activePage == 'admin' || $activePage == 'admin-management') ? ' active' : '' }}">--}}
            {{--        <a class="nav-link" data-toggle="collapse" href="#adminExample" aria-expanded="true">--}}
            {{--          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>--}}
            {{--          <p>{{ __('Admin') }}--}}
            {{--            <b class="caret"></b>--}}
            {{--          </p>--}}
            {{--        </a>--}}
            {{--        <div class="collapse" id="adminExample">--}}
            {{--          <ul class="nav">--}}
            {{--            <li class="nav-item{{ $activePage == 'admin' ? ' active' : '' }}">--}}
            {{--              <a class="nav-link" href="{{ route('admin.index') }}">--}}
            {{--                --}}{{-- <span class="sidebar-mini"> AD </span> --}}
            {{--                <span class="sidebar-normal">{{ __('Admin') }} </span>--}}
            {{--              </a>--}}
            {{--            </li>--}}
            {{--            <li class="nav-item{{ $activePage == 'admin-management' ? ' active' : '' }}">--}}
            {{--              <a class="nav-link" href="{{ route('admin.management') }}">--}}
            {{--                --}}{{-- <span class="sidebar-mini"> UM </span> --}}
            {{--                <span class="sidebar-normal"> {{ __('Admin Management') }} </span>--}}
            {{--              </a>--}}
            {{--            </li>--}}
            {{--          </ul>--}}
            {{--        </div>--}}
            {{--      </li>--}}



        </ul>
    </div>
</div>
