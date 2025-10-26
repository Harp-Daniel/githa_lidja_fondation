<!-- ========== Left Sidebar Start ========== -->
<div class="sidebar-left">

    <div data-simplebar class="h-100">

        <!--- Sidebar-menu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="left-menu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('dashboard') }}" class="">
                        <i class="fas fa-desktop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Fondation</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow ">
                        <i class="fa fa-info-circle"></i>
                        <span>À propos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.mission.edit') }}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Mission</a></li>
                        <li><a href="{{ route('admin.vision.edit') }}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Vision</a></li>
                        <li><a href="{{ route('admin.equipe.edit') }}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Équipe</a></li>
                        <li><a href="{{ route('admin.histoire.edit') }}"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Histoire</a></li>
                    </ul>
                </li>
               

                <li class="menu-title">Administration</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow ">
                        <i class="fa fa-cog"></i>
                        <span>Gestion du contenu</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Actualités</a></li>
                        <li><a href="#"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Projets</a></li>
                        <li><a href="#"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Événements</a></li>
                        <li><a href="#"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Médias</a></li>
                        <li><a href="#"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Mission</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow ">
                        <i class="fa fa-users-cog"></i>
                        <span>Gestion des utilisateurs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Bénévoles</a></li>
                        <li><a href="#"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Donateurs</a></li>
                        <li><a href="#"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Partenaires</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow ">
                        <i class="fa fa-chart-line"></i>
                        <span>Statistiques</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Dons</a></li>
                        <li><a href="#"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Impact</a></li>
                        <li><a href="#"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Visiteurs</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
