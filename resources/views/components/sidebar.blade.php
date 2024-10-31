<nav class="fixed w-56 h-screen bg-blue-950">
    <div>
        <img class="scale-75" src="{{ asset('assets/images/CREEZ-LIGHT.png') }}" alt="">
    </div>
    <div class="flex flex-col gap-3 justify-center h-3/5 text-white m-5">
        @component('components.nav-link', [
            'url' => route('dashboard'),
            'icons' => 'assets/icons/gauge-reg.svg',
            'label' => 'Dashboard',
            'routeIs' => 'dashboard',
        ])
        @endcomponent
        @component('components.nav-link', [
            'url' => route('profile'),
            'icons' => 'assets/icons/house-reg.svg',
            'label' => 'Profile',
            'routeIs' => 'profile',
        ])
        @endcomponent
        @component('components.nav-link', [
            'url' => route('schedule'),
            'icons' => 'assets/icons/notebook-reg.svg',
            'label' => 'Schedule',
            'routeIs' => 'schedule',
        ])
        @endcomponent
    </div>
</nav>
