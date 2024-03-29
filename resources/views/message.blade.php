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



        @include("include.header")
        @include("include.aside")
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>

                <!-- Main content -->
                <section class="content">

                    <!-- <div class="row">

                        <div class="col-md-4">
                            <div class="box">

                                <div class="box-header">
                                    <h4 class="box-title ">Message</h4>
                                </div>



                             
                                <div class="box-body">

                                    <p class=""> {{$message->message}}</p> <br> <br> <br>

                                </div>
                          
                            </div>
                           
                        </div> -->
                        <div class="col-md-12">
                            <div class="box">

                                <div class="box-header">
                                    <h4 class="box-title ">Correction de votre dossier</h4>
                                </div>



                                <!-- /.box-header -->
                                <div class="box-body">

                                    <form action="{{route('update_doc_co')}}" method="post" id="document" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            @error('document')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div id="docs"></div>
                                            <div class="col-lg-4 col-4" id="doc">
                                                <label for="formFile" class="form-label">Corriger votre dossier si vous avez un problème de dossier</label>
                                                <input class="form-control" type="file" id="document" name="document"> <br>

                                                <input type="submit" id="buttond" class="form-control btn-sm btn-success" value="Enregistrez">
                                            </div>
                                            @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="col-lg-8 col-8" id="doc">
                                                <label for="formFile" class="form-label">Corriger votre image si vous avez un problème d'image <br> au format carte d'identité</label>
                                                <input class="form-control" type="file" id="image" name="image" > <br>

                                                <input type="submit" id="buttond" class="form-control btn-sm btn-success" value="Enregistrez">
                                            </div>





                                    </form>
                                    <p class=""></p> <br> <br> <br>

                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>

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