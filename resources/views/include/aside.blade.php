<aside class="main-sidebar">
	<!-- sidebar-->
	<section class="sidebar position-relative">
		<div class="d-flex align-items-center logo-box justify-content-start
							d-md-block d-none">
			<!-- Logo -->
			<a href="{{('accueil')}}" class="logo">
				<!-- logo-->
				<!-- &&	 -->
				<div class="logo-lg">
					<span class="light-logo fs-36 fw-700"> <strong> Omeg<span class="text-success">a </strong></span></span>
				</div>
			</a>
		</div>
		<div class="user-profile my-15 px-20 py-10 b-1 rounded10 mx-15">
			<div class="d-flex align-items-center justify-content-between">
				<div class="image d-flex align-items-center">
					@if ($data->photo == NULL)
					<img src="images/avatar/18942381.jpg" class="rounded-0 me-10" alt="User Image">

					@else
					<img src="photo/{{$data->photo}}" class=" rounded me-10" alt="User Image">

					@endif
					<div>
						<h4 class="mb-0 fw-600">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</h4>
						<p class="mb-0">Candidat</p>
					</div>
				</div>
				<div class="info">
					<a class="dropdown-toggle p-15 d-grid" data-bs-toggle="dropdown" href="#"></a>
					<div class="dropdown-menu dropdown-menu-end">


						<a class="dropdown-item" href="{{ route('logout') }}"><i class="ti-lock"></i>
							Déconnexion</a>


					</div>
				</div>
			</div>
		</div>
		<div class="multinav">
			<div class="multinav-scroll" style="height: 97%;">
				<!-- sidebar menu-->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">Menu principal</li>
					@if ($data->statut ==1 || $data->statut ==2 || $data->statut ==3 || $data->statut ==4 || $data->statut ==5 )
					<li>
						<a href="{{('accueil')}}">
							<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
							<span>Préinscription</span>
						</a>
					</li>
					@endif
					@if ( $data->statut ==1 || $data->statut ==2 || $data->statut ==3 )
					@if($s->date_fin >= $date )
					<li class="treeview">
						<a href="#">
							<i class="icon-Address-card"></i>

							<span>Modifications</span>
							<span class="pull-right-container">
								<!-- <i class="fa fa-angle-right pull-right"></i> -->
							</span>
						</a>
						<ul class="treeview-menu">
							<li class="treeview">
								<a href="#">
									<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Candidat
									<span class="pull-right-container">
										<!-- <i class="fa fa-angle-right pull-right"></i> -->
									</span>
								</a>
								<ul class="treeview-menu">

									<li><a href="{{ route('Modification_info')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Informations personelles</a></li>
									@if ($data->statut ==2 || $data->statut ==3)
									<li><a href="{{ route('Modification_fili')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Choix des filières</a></li>
									@endif
									@if ($data->statut ==3)
									<li><a href="{{ route('Modification_doc')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Documents</a></li>
									@endif
								</ul>
							</li>
						</ul>
					</li>
					@endif
					@endif
					@if ($data->statut ==4 || $data->statut ==5)
					<li>
						<a href="{{('fiche_preinscription')}}">
							<i class="glyphicon glyphicon-file"><span class="path1"></span><span class="path2"></span></i>
							<span>Fiche preinscription</span>
						</a>
					</li>
					@endif
					@isset($message)
					<li>
						<a href="{{('message')}}">
							<i class="glyphicon glyphicon-envelope"><span class="path1"></span><span class="path2"></span></i>
							<span>Correction du dossier</span>
						</a>
					</li>
					@endisset
					<li>
						<a href="{{('logout')}}">
							<i class="glyphicon glyphicon-log-out"><span class="path1"></span><span class="path2"></span></i>
							<span>Déconnexion</span>
						</a>
					</li>
				</ul>


			</div>
		</div>
	</section>
</aside>