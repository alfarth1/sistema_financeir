@extends('layouts.principal')
@section('conteudo')
     <!-- page content -->
     <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>ADBLU Kids :: Sistema</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                <div class="input-group">
               
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12  ">
             
            </div>
          </div>
        </div>
        <div class="animated flipInY col-lg-6 col-md-6 col-sm-6  ">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-graduation-cap"></i>
              </div>
              <div class="count">{{ $cap->count(); }}</div>

              <h3>Capacitações</h3>
              <p>quantidade de capacitações cadastradas.</p>
            </div>
          </div>
          <div class="animated flipInY col-lg-6 col-md-6 col-sm-6  ">
            <div class="tile-stats">
              <div class="icon"><i class="fa fa-group"></i>
              </div>
              <div class="count">{{ $pes->count() }}</div>

              <h3>Pessoas </h3>
              <p>Número de pessoas ja cadastradas</p>
            </div>
          </div>
          
          

          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Capacitação<small>Kids</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                   
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
           

          <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Mês</th>
                <th>Tema</th>
                <th>Data</th>
                <th>Total Inscritos</th>
                <th>Total de apostilas solicitadas</th>
              </tr>
            </thead>
            <tbody>
                @foreach($cap as $c)
              <tr>
                <td>{{ $c->nome }}</td>
                <td>{{ $c->tema }}</td>
                <td>{{ $c->data }}</td>
                <td>{{ $c->inscricao->where('capacitacao_id', $c->id)->count() }}</td>
                <td>{{ $c->inscricao->where('capacitacao_id', $c->id)->count() }}</td>

              </tr>
              @endforeach
            
         
            </tbody>
        </table>
					
        </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</div>





      </div>
      
      <!-- /page content -->

@endsection