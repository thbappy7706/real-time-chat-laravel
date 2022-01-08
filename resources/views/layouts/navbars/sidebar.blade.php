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
                    <i class="material-icons">book</i>
                    <p>{{ __('Posts') }}</p>
                </a>
            </li>

            <li class="nav-item{{ $activePage == 'chat' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('users.chat') }}">
                    <i class="material-icons">forum</i>
                    <p>{{ __('Lets Chat') }}</p>
                </a>
            </li>





        </ul>
    </div>
</div>
