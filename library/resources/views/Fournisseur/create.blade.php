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
                        <a href="#" class="nav-link px-0 align-middle">
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
        <div class="col-md-6 col-ms-6 py-3">
<form action="{{route('Fournisseur.store')}}" method="post" enctype="multipart/form-data" >
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Entreprise</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="entreprise">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contact</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="contact">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="adresse">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
        </div>
    </div>
</div>

</x-app-layout>
