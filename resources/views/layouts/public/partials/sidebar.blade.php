<!-- ========== Left Sidebar Start ========== -->
<div class="sidebar-left">

    <div data-simplebar class="h-100">

        <!--- Sidebar-menu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="left-menu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('home') }}" class="">
                        <i class="fas fa-home"></i>
                        <span>{{ __('messages.home') }}</span>
                    </a>
                </li>

                <li class="menu-title">{{ __('messages.foundation_name') }}</li>

                <li>
                    <a href="{{ route('about') }}" class="">
                        <i class="fa fa-info-circle"></i>
                        <span>{{ __('messages.about') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('projects') }}" class="">
                        <i class="fa fa-project-diagram"></i>
                        <span>{{ __('messages.projects') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('news') }}" class="">
                        <i class="fa fa-newspaper"></i>
                        <span>{{ __('messages.news') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('donate') }}" class="">
                        <i class="fa fa-hand-holding-heart"></i>
                        <span>{{ __('messages.donate') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('volunteer') }}" class="">
                        <i class="fa fa-users"></i>
                        <span>{{ __('messages.volunteer') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('partners') }}" class="">
                        <i class="fa fa-handshake"></i>
                        <span>{{ __('messages.partners') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}" class="">
                        <i class="fa fa-envelope"></i>
                        <span>{{ __('messages.contact') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
