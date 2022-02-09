<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('post.index') }}">
    <div class="sidebar-brand-text mx-3"> {{ __('messages.admin') }} </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('admin.index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span> {{ __('messages.Dashboard') }} </span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    {{ __('messages.MENU') }} 
</div>

<!-- Nav Item - Users Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
        aria-expanded="true" aria-controls="collapseUser">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M52.63021,28.66667c-13.18555,0 -23.96354,11.22591 -23.96354,25.08333c0,13.85742 10.77799,25.08333 23.96354,25.08333c17.91667,0 47.70313,-25.08333 47.70313,-25.08333c0,0 -29.78646,-25.08333 -47.70313,-25.08333zM117.13021,28.66667c-8.95833,0 -16.74088,5.12305 -20.82812,12.76563c4.47917,3.30339 7.78256,5.9349 8.73438,6.71875l6.49479,5.59896l-6.49479,5.59896c-0.95182,0.78385 -4.25521,3.41537 -8.73437,6.71875c4.08724,7.64258 11.89778,12.76563 20.82813,12.76563c17.91667,0 47.70313,-25.08333 47.70313,-25.08333c0,0 -29.78646,-25.08333 -47.70312,-25.08333zM53.75,93.16667c-35.10547,0 -46.58333,28.66667 -46.58333,28.66667v14.33333h93.16667v-14.33333c0,0 -11.47786,-28.66667 -46.58333,-28.66667zM117.57813,93.16667c-10.75,0 -19.3164,2.91146 -25.75521,6.49479c10.02214,8.5944 14.27735,18.53256 15.00521,19.26042l0.67188,1.56771v15.67708h57.33333v-14.33333c-0.72786,0 -12.14974,-28.66667 -47.25521,-28.66667z"></path></g></g></svg>
        <span> {{ __('messages.users') }} </span>
    </a>
    <div id="collapseUser" class="collapse" aria-labelledby="headingUser" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> {{ __('messages.user_management') }} </h6>
            <a class="collapse-item" href="{{ route('user.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M107.5,28.66667c-15.84505,0 -28.66667,12.82162 -28.66667,28.66667c0,15.84506 12.82162,28.66667 28.66667,28.66667c21.5,0 57.33333,-28.66667 57.33333,-28.66667c0,0 -35.83333,-28.66667 -57.33333,-28.66667zM28.66667,50.16667v21.5h-21.5v14.33333h21.5v21.5h14.33333v-21.5h21.5v-14.33333h-21.5v-21.5zM107.5,100.33333c-43.72786,0 -57.33333,28.66667 -57.33333,28.66667v14.33333h114.66667v-14.33333c0,0 -13.60547,-28.66667 -57.33333,-28.66667z"></path></g></g></svg>
                <span> {{ __('messages.Add') }} </span>
            </a>
            
            <a class="collapse-item" href="{{ route('user.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M71.66667,14.33333c-15.84505,0 -28.66667,12.82162 -28.66667,28.66667c0,15.84506 12.82162,28.66667 28.66667,28.66667c21.5,0 57.33333,-28.66667 57.33333,-28.66667c0,0 -35.83333,-28.66667 -57.33333,-28.66667zM71.66667,86c-43.5599,0 -57.33333,28.66667 -57.33333,28.66667v14.33333h63.60417c-1.73567,-4.45117 -2.6875,-9.26628 -2.6875,-14.33333c0,-10.66601 4.2832,-20.43619 11.19792,-27.54687c-4.47917,-0.75586 -9.40625,-1.11979 -14.78125,-1.11979zM114.66667,86c-15.73307,0 -28.66667,12.9336 -28.66667,28.66667c0,15.73308 12.9336,28.66667 28.66667,28.66667c5.23503,0 10.07813,-1.53972 14.33333,-4.03125l16.34896,16.34896l10.30208,-10.30208l-16.34896,-16.34896c2.49153,-4.25521 4.03125,-9.09831 4.03125,-14.33333c0,-15.73307 -12.93359,-28.66667 -28.66667,-28.66667zM114.66667,100.33333c8.00651,0 14.33333,6.32683 14.33333,14.33333c0,8.00651 -6.32682,14.33333 -14.33333,14.33333c-8.00651,0 -14.33333,-6.32682 -14.33333,-14.33333c0,-8.00651 6.32683,-14.33333 14.33333,-14.33333z"></path></g></g></svg>
                <span> {{ __('messages.Search') }} </span>
            </a>
        </div>
    </div>
</li>

<!-- Nav Item - Category Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
        aria-expanded="true" aria-controls="collapseCategory">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M41.28,134.16h110.08v-127.28h-110.08c-11.38156,0 -20.64,9.25844 -20.64,20.64v118.39781c0,10.58875 9.25844,19.20219 20.64,19.20219h110.08v-6.88h-110.08c-7.45781,0 -13.76,-5.64375 -13.76,-12.32219c0,-6.59781 6.04688,-11.75781 13.76,-11.75781zM48.16,36.12c0,-0.95406 0.76594,-1.72 1.72,-1.72h75.68c0.95406,0 1.72,0.76594 1.72,1.72v17.2c0,0.95406 -0.76594,1.72 -1.72,1.72h-75.68c-0.95406,0 -1.72,-0.76594 -1.72,-1.72z"></path></g></g></svg>
        <span> {{ __('messages.Categories') }} </span>
    </a>
    <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> {{ __('messages.category_management') }} </h6>
            <a class="collapse-item" href="{{ route('category.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M41.28,6.88c-11.38296,0 -20.64,9.25704 -20.64,20.64v118.39781c0,10.58832 9.25704,19.20219 20.64,19.20219h110.08v-6.88h-110.08c-7.45792,0 -13.76,-5.64171 -13.76,-12.32219c0,-6.59104 6.04408,-11.75781 13.76,-11.75781h110.08v-33.86922c12.11568,-5.33544 20.64,-17.45902 20.64,-31.49078c0,-14.03176 -8.52432,-26.15534 -20.64,-31.49078v-30.42922zM137.6,41.28c15.136,0 27.52,12.384 27.52,27.52c0,15.136 -12.384,27.52 -27.52,27.52c-15.136,0 -27.52,-12.384 -27.52,-27.52c0,-15.136 12.384,-27.52 27.52,-27.52zM137.6,48.50265c-2.064,0 -3.44,1.376 -3.44,3.44v13.41735h-13.41735c-2.064,0 -3.44,1.376 -3.44,3.44c0,2.064 1.376,3.44 3.44,3.44h13.41735v13.41735c0,2.064 1.376,3.44 3.44,3.44c2.064,0 3.44,-1.376 3.44,-3.44v-13.41735h13.41735c2.064,0 3.44,-1.376 3.44,-3.44c0,-2.064 -1.376,-3.44 -3.44,-3.44h-13.41735v-13.41735c0,-2.064 -1.376,-3.44 -3.44,-3.44z"></path></g></g></svg>
                <span> {{ __('messages.Add') }} </span>
            </a>
            <a class="collapse-item" href= "{{ route('category.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M41.28,6.88c-11.38296,0 -20.64,9.25704 -20.64,20.64v118.39781c0,10.58832 9.25704,19.20219 20.64,19.20219h110.08v-6.88h-110.08c-7.45792,0 -13.76,-5.64171 -13.76,-12.32219c0,-6.59104 6.04408,-11.75781 13.76,-11.75781h110.08v-127.28zM76.66765,34.4l3.72891,5.36828c-5.70008,3.61544 -11.59656,10.75156 -11.59656,22.15172c0,10.6296 5.69648,18.75122 17.20672,20.50563v-32.02156c0,-12.56288 5.57162,-16.11414 12.80594,-16.00406c10.40944,0.11352 21.58735,10.52102 21.58735,26.74063c0,18.19072 -14.14872,26.98185 -27.52,28.29937v20.64h-6.88v-20.64c-13.15112,-0.98728 -27.52,-8.46396 -27.52,-27.31172c0,-15.3424 10.84669,-24.6598 18.18765,-27.72828zM98.69844,41.28c-2.73824,0 -5.81844,2.54587 -5.81844,7.58547v33.66766c10.40944,-1.42416 17.2,-8.22913 17.2,-20.61313c0,-10.74312 -5.2446,-20.64 -11.38156,-20.64z"></path></g></g></svg>
                <span> {{ __('messages.Search') }} </span>
            </a>
        </div>
    </div>
</li>

<!-- Nav Item - Post Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePost"
        aria-expanded="true" aria-controls="collapsePost">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g id="original-icon" fill="#ffffff"><path d="M104.57063,6.88h-80.49063v158.24h123.84v-114.89062zM103.2,51.6v-36.46937l36.46938,36.46937z"></path></g></g></svg>
        <span> {{ __('messages.Posts') }} </span>
    </a>
    <div id="collapsePost" class="collapse" aria-labelledby="headingPost"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> {{ __('messages.post_management') }} </h6>
            <a class="collapse-item" href="{{ route('post.create') }}">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M104.62416,6.88h-80.54416v158.24h123.84v-114.94416zM106.64,48.16v-29.53584l29.53584,29.53584zM113.52,103.2h-24.08v24.08h-6.88v-24.08h-24.08v-6.88h24.08v-24.08h6.88v24.08h24.08z"></path></g></g></svg>
                <span> {{ __('messages.Add') }} </span>
            </a>
            <a class="collapse-item" href="{{ route('post.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M13.76,0v165.12h123.84v-9.7825c2.88906,-1.26312 5.54969,-2.86219 7.955,-4.8375l20.5325,20.5325l4.945,-4.945l-20.5325,-20.5325c4.85094,-5.92594 7.74,-13.46437 7.74,-21.715c0,-14.0825 -8.50594,-26.17625 -20.64,-31.4975v-42.14l-50.2025,-50.2025zM86,8.2775l43.3225,43.3225h-43.3225zM123.84,96.32c5.01219,0 9.70188,1.41094 13.76,3.7625c8.21031,4.77031 13.76,13.59875 13.76,23.7575c0,10.15875 -5.54969,18.98719 -13.76,23.7575c-4.05812,2.35156 -8.74781,3.7625 -13.76,3.7625c-15.17094,0 -27.52,-12.34906 -27.52,-27.52c0,-15.17094 12.34906,-27.52 27.52,-27.52z"></path></g></g></svg>
                <span> {{ __('messages.Search') }} </span>
            </a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
