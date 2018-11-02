<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/estilos.css') }}">

  </head>
  <body>
    <div class="container mt-5">
    	<div class="header">
  	     <div class="container">
  	        <div class="row">
  	           <div class="col-md-5">
  	              <!-- Logo -->
  	              <div class="logo">
  	                 <h1><a href="{{ route('dashboard') }}">Administrador</a></h1>
  	              </div>
  	           </div>
  	           <div class="col-md-5">
  	              <div class="row">
  	                <div class="col-lg-12">
  	                  <div class="input-group form">
  	                       <!--
                           <input type="text" class="form-control" placeholder="Buscar...">
  	                       <span class="input-group-btn">
  	                         <button class="btn btn-primary" type="button">Buscar</button>
  	                       </span>
                           -->
  	                  </div>
  	                </div>
  	              </div>
  	           </div>
  	           <div class="col-md-2">
  	              <div class="navbar navbar-inverse" role="banner">
  	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
  	                    <ul class="nav navbar-nav">
                          <li><a href="{{ url('dashboard') }}">Administrador</a></li>
  	                    </ul>
  	                  </nav>
  	              </div>
  	           </div>
  	        </div>
  	     </div>
  	  </div>

      <div class="page-content">
      	<div class="row">
  		    
  		    <div class="col-md-2">
	  		  	<div class="sidebar content-box" style="display: block;">

	            <ul class="list-group">
	                <li class="list-group-item">
	                  <a href="{{ route('dashboard') }}"> Dashboard</a>
	                </li>
	                <li class="list-group-item">
	                  <a href="{{ url('admin/postres') }}"> Postres</a>
	                </li>
	            </ul>
	          </div>
  		  	</div>
  		  
          	<div class="col-md-10">

				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Postres</li>
				  </ol>
				</nav>
				
				<div class="row">

					<div class="col-md-12">

					  	<div class="content-box-large">

					  		<div class="panel-heading">
								<div class="panel-title"><h2>Postres</h2></div>							
										
							</div>
					  		
					  		<div class="panel-body">

										{{ $message=Session::get('message') }}

										@include('alerts.request')


								<div class="card">

			                        <div class="card-block">
			                        	<a href="{{url ('admin/postres/create') }}" class="btn btn-success mt-4 ml-3">	Agregar
			                        	</a>
			                            
			                            <section class="example mt-4">
			                                
			                              <div class="table-responsive">			                              	
			                              	
			                                <table class="table table-striped table-bordered table-hover">
			                                  <thead>
			                                    <tr>
			                                      <th>Nombre</th>
			                                      <th>Precio</th>
			                                      <th>Stock</th>
			                                      <th>Imagen</th>
			                                      <th>Acciones</th>
			                                    </tr>
			                                  </thead>
			                                  <tbody>
										                      @foreach($postres as $pos)
										                      <tr>
										                        <td class="v-align-middle">{{$pos->nombre}}</td>
                                            <td class="v-align-middle">{{$pos->precio}}</td>
                                            <td class="v-align-middle">{{$pos->stock}}</td>
										                        <td class="v-align-middle">
										                        	<img src="{!! asset("uploads/$pos->imagen") !!}" width="30" class="img-responsive">
										                        </td>
										                        <td class="v-align-middle">

										                        	{!! Form::open(['route'=>['postres.destroy', $pos->id],'method'=>'DELETE', 'class' => 'form-horizontal','role' => 'form', 'onsubmit' => 'return ConfirmDelete()']) !!}  							                            
										                            {!! link_to_route('postres.edit', $title = 'Editar', $parameters = $pos->id, $attributes = ['class'=>'btn btn-primary'] ) !!}						

										                            {!! Form::button('Eliminar', array('type' => 'submit', 'class' => 'btn btn-danger')) !!}

										                          {!! Form::close() !!} 	                            
										                            
										                        </td>                                                 
										                      </tr>                                          
										                      @endforeach
										                    </tbody>
			                                </table>
			                              </div>
			                            </section>
			                        </div>

			                    </div>


					  		</div>

					  	</div>

					</div>

				</div>

			</div>

  		</div>

        </div>

      <footer>
           <div class="container">

              <div align="center">
                Desarrollado por <a href="http://www.nubecolectiva.com" target="_blank">Nube Colectiva</a>
              </div>
              
           </div>
      </footer>
    </div>

      <script crossorigin="anonymous" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">

        function ConfirmDelete()
        {
        var x = confirm("Estas seguro de Eliminar?");
        if (x)
          return true;
        else
          return false;
        }

    </script>
  
  </body>

</html>	

