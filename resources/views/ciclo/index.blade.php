@extends('layouts.app')

@section('template_title')
    Ciclos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ciclos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ciclos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Numero Ciclo</th>
									<th >Fecha Inicio</th>
									<th >Fecha Fin</th>
									<th >Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ciclos as $ciclo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $ciclo->numero_ciclo }}</td>
										<td >{{ $ciclo->fecha_inicio }}</td>
										<td >{{ $ciclo->fecha_fin }}</td>
										<td>{{ $ciclo->estadoCiclo->nombre ?? 'Estado no disponible' }}</td>

                                            <td>
                                                <form action="{{ route('ciclos.destroy', $ciclo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ciclos.show', $ciclo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ciclos.edit', $ciclo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ciclos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
