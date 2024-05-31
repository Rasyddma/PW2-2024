<?php
include_once 'src/layouts/header.php';
include_once 'src/layouts/link.php';
include_once 'src/layouts/sidebar.php';
?>
           
           <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">RMGaming</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> top up game disini saja</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">List Game</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="\PW2-2324\Project-1\src\pages\games\index.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Top Up</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="\PW2-2324\Project-1\src\pages\Topup\index.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Transaksi</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="\PW2-2324\Project-1\src\pages\transaksi\index.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">User</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="\PW2-2324\Project-1\src\pages\user\index.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="rounded mx-auto" style="width: 20rem;">
                       <img src="\PW2-2324\Project-1\src\assets\img\emel.jpg" class="card-img-top" alt="gambar">
                       <div class="card-body">
                           <h5 class="card-title">Diskon MLBB</h5>
                          <class="card-text">pebelian topup diamon dengan memenangkan heroo kereenn.</class=>
                       </div>
                        </div>
                         <div class="rounded mx-auto" style="width: 20rem;">
                           <img src="\PW2-2324\Project-1\src\assets\img\pbu.jpg" class="card-img-top" alt="gambar">
                             <div class="card-body">
                              <h5 class="card-title">Diskon PUBG</h5>
                            <class="card-text">pebelian topup diamon dengan memenangkan skin kereenn.</class=>
                       </div>
                   </div>
                  
                    
                </main>
    
<?php
include_once 'src/layouts/footer.php';
?>