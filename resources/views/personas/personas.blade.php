@extends('index')

@section('content')
<div class="container">
    <div class="row mt-4">
        <h2 class="text-center">Personas</h2>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#peopleModal">
                Agregar
            </button>

            <!-- Modal -->
            <div class="modal fade" id="peopleModal" tabindex="-1" aria-labelledby="peopleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Persona</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <input type="hidden" name="persona_id">
                                <div class="form-group">
                                    <label for="ins_nombres">Nombres</label>
                                    <input id="ins_nombres" class="form-control" type="text" name="ins_nombres">
                                </div>

                                <div class="form-group">
                                    <label for="ins_apellidos">Apellidos</label>
                                    <input id="ins_apellidos" class="form-control" type="text" name="ins_apellidos">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Acciones</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection