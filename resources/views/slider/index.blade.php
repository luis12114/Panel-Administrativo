@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Slider</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-end mb-4">
                                @can('crear-slider')
                                 <a class="btn btn-warning" href="{{ route('slider.create') }}">Crear slider</a>
                                @endcan
                            </div>

                            <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">
                                    <th style="color:#fff;">Titulo</th>
                                    <th style="color:#fff;">Descripción</th>
                                    <th style="color:#fff;">Url del video</th>
                                    <th style="color:#fff;">Url del la animacion</th>
                                    <th style="color:#fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>{{ $slider->title }}</td>
                                            <td>{{ $slider->description }}</td>
                                            <td>{{ $slider->url_video }}</td>
                                            <td>{{ $slider->url_animation }}</td>
                                            <td>
                                                @can('editar-slider')
                                                 <a class="btn btn-primary" href="{{ route('slider.edit', $slider->id_sliderMain) }}">Editar</a>
                                                @endcan

                                                @can('borrar-slider')
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['slider.destroy', $slider->id_sliderMain], 'style' => 'display:inline']) !!}
                                                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                @endcan

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            <div class="pagination justify-content-end">
                                {!! $sliders->links() !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
