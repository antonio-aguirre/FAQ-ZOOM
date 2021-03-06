@extends('layouts.appAdminPanel')

@section('headContent')
    @section('page-title','Panel de administración')
    @include('Partials.ADMINPANEL.head.adminPanelHead')
@endsection

@section('navbarContent')
    <!-- BARRA DE NAVEGACIÓN -->
    @include('Partials.ADMINPANEL.navbar.navbarAdminPanel')
    
@endsection

@section('content')

    @if(Auth::user()->rol_id == 1)
        @include('Partials.ADMINPANEL.sections.linkZoom');
    @endif

    @if(Auth::user()->rol_id == 2)
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('Partials.ADMINPANEL.sidenavbar.sideNavbarAdminPanel')
            </div>
            
            <div id="layoutSidenav_content">

                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        
                            Something good was here soon.. :D

                    </div>
                </main>

                @include('Partials.ADMINPANEL.footer.adminPanelFooter')
            </div>
        </div>
    @endif

@endsection

@section('scriptsContent')
    @include('Partials.ADMINPANEL.scripts.adminPanelScripts')
@endsection
