<header class="main-header">
    <!-- Logo -->
    <a href="/backend" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>AWP</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{ config('app.name', 'Laravel') }}</b></span>
    </a>

    @include ('Backend/layouts.nav')

</header>

@include ('Backend/layouts.sidebar')