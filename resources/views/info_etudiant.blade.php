<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/university/vertical/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 11:38:38 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/Omega-logo.png">
    <title>Omega</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="src/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/skin_color.css">

</head>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <!-- <div id="loader"></div> -->



        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start
					d-md-none d-block">
                <!-- Logo -->
                <a href="{{('accueil')}}" class="logo">
                    <!-- logo-->
                    <!-- <div class="logo-mini w-30">
						<span class="light-logo"><img src="images/logo-letter.png" alt="logo"></span>
						<span class="dark-logo"><img src="images/logo-letter-white.png" alt="logo"></span>
					</div> -->
                    <div class="logo-lg">
                        <!-- <span class="light-logo"><img src="../../../images/logo-dark-text.png" alt="logo"></span> -->
                        <span class="light-logo fs-36 fw-700"> <strong>Omeg<span class="text-success">a</strong></span></span>
                        <span class="dark-logo"><img src="images/" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link push-btn
									btn-primary-light" data-toggle="push-menu" role="button">
                                <i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="dropdown notifications-menu btn-group nav-item">

                            <ul class="dropdown-menu animated bounceIn">
                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>

                                            </div>
                                        </div>
                                </li>

                            </ul>
                        </li>






                    </ul>
                </div>
            </nav>
        </header>
        @include("include.inscription.aside")
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>

                <!-- Main content -->
                <section class="content">
                    
                    <div class="row">
                    
                        <div class="col-md-2"></div>
                        
                        <div class="col-md-8">
                            <div class="box border-shadow shadow-lg p-3 mb-5 bg-white rounded"> <br>
                            <h3 class="text-center">Informations étudiant</h3>
                                <hr>
                                @isset($resultat)
                                   <h6 class="text-center"><strong>Resultat: {{$resultat}} </strong></h6><br>
                                @endisset
                                <form method="POST"  action="{{route('autorisation_an')}}" @if($p==1) onsubmit="return confirm('Etes-vous sur de vouloir confirmez ce niveau?')" @endif>
                                    @csrf
                                    <div class="box-body">
                                        

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Nin: {{$nin}} </p>
                                            </div>
                                            <div class="col-md-6">
                                                 @if($p==1)
                                                    <p>Matricule: {{$matricule}}</p>
                                                @elseif($p==0)
                                                    <p>Type de Pré-inscription: {{$recu->nom_type}}</p>
                                                @endif
                                            </div>
                                        </div>  <br> 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Nom: {{$nom}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Prénom: {{$prenom}}</p>
                                            </div>
                                        </div>  <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Date de naissance: {{$date_n}}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lieu de naissance: {{$lieu_naiss}} </p>
                                            </div>
                                        </div> <br> 

                                        <div class="row">
                                            <div class="col-md-6">
                                            @if($p==0)
                                                <p>Retenu: {{$departement->design_depart}}
                                                <p>
                                            @elseif($p==1)
                                                <p>Niveau: {{$niv}}
                                                <p>
                                            @endif
                                            </div>
                                            <div class="row" style="text-align: left;">
                                                <div class="col-md-6">
                                                    @if($p==0)
                                                    @if($type_recu==1 || $type_recu==41 || $type_recu==51 )
                                                    <input type="hidden" value="l1" name="niveau" class="form-control" id="inputEmail3">
                                                    @elseif($type_recu==2 || $type_recu==42 || $type_recu==52)
                                                    <input type="hidden" value="l2" name="niveau" class="form-control" id="inputEmail3">
                                                    @elseif($type_recu==3 || $type_recu==43 || $type_recu==53 )
                                                    <input type="hidden" value="l3" name="niveau" class="form-control" id="inputEmail3">
                                                    @elseif($type_recu==6 || $type_recu==56)
                                                    <input type="hidden" value="N4" name="niveau" class="form-control" id="inputEmail3">
                                                    @elseif($type_recu==7 || $type_recu==57)
                                                    <input type="hidden" value="N5" name="niveau" class="form-control" id="inputEmail3">
                                                </div>
                                                @endif

                                            </div>
                                                @endif
                                            <div class="col-md-6">
                                                <input type="hidden" value="{{$nin}}" name="nin" class="form-control" id="inputEmail3">
                                                <input type="hidden" value="{{$matricule}}" name="matricule" class="form-control" id="inputEmail3">

                                            </div>
                                        </div> <br>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="submit" value="Confirmer" class="btn btn-success">
                                            </div>
                                        </div>

                                </form>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <div class="col-md-2"></div>

                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </div>
        </div>
    </div>



    <script src="//code.jquery.com/jquery.js"></script>
    <script src="src/js/jquery.min.js"></script>

    <!-- Vendor JS -->
    <script src="src/js/vendors.min.js"></script>
    <script src="src/js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>
    <script src="assets/vendor_components/jquery-steps-master/build/jquery.steps.js"></script>
    <script src="assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
    <script src="assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    <!-- CRMi App -->
    <script src="src/js/template.js"></script>

    <script src="src/js/pages/steps.js"></script>


</body>

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/university/vertical/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 11:39:38 GMT -->

</html>