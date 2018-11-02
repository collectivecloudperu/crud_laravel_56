<div class="row">
    <div class="col-md-12">
        <section class="panel">                        
            <div class="panel-body">

                <div class="form-group">
                  {!! Form::label('nombre', 'Nombre:', array('class' => 'negrita')) !!}                          
                  <div>
                    {!! Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Torta de Chocolate', 'required' => 'required']) !!}                              
                  </div>
                </div>

                <div class="form-group">
                  {!! Form::label('precio', 'Precio:', array('class' => 'negrita')) !!}                          
                  <div>
                    {!! Form::text('precio',null,['class'=>'form-control', 'placeholder'=>'4.50', 'required' => 'required']) !!}                              
                  </div>
                </div>

                <div class="form-group">
                  {!! Form::label('stock', 'Stock:', array('class' => 'negrita')) !!}                          
                  <div>
                    {!! Form::text('stock',null,['class'=>'form-control', 'placeholder'=>'40', 'required' => 'required']) !!}                              
                  </div>
                </div>

                <div class="form-group">
                  {!! Form::label('imagen', 'Selecciona una imagen:', array('class' => 'negrita')) !!}                          
                  <div>
                  {!! Form::file('imagen',null, array('required' => 'true')) !!}
                  <br><br>                  
                  
                  @if ( !empty ( $postres->imagen) )

                  {!! Form::label('imagen', 'Imagen actual:', array('class' => 'negrita')) !!}

                  <img src="{!! asset("uploads/$postres->imagen") !!}" width="200" class="img-fluid" >                                  

                  @else

                    Aún no se ha cargado una imagen para este producto

                  @endif

                  </div>
                </div>



                {!! Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-info')) !!}
                {!! link_to(URL::previous(), 'Cancelar', ['class' => 'btn btn-warning']) !!}

                <br><br>
              
            </div>
        </section>
    </div>
</div>