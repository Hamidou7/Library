<x-app-layout>
  

 <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Acceuil</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                  
                    <li>
                       
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="{{route('Abonne.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Abonné</span></a>
                            </li>
                            <li>
                                <a href="{{route('Fournisseur.index')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Fournisseur</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('Livre.index')}}" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Livre</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Emprunt</span> </a>
                    </li>
                </ul>
                <hr>
               
            </div>
        </div>
        <div class="col py-3">
            Gestion Librairie.
        </div>
    </div>
</div>

</x-app-layout>
