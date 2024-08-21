<!-- Modal -->
<div class="modal fade" id="projectoID" tabindex="-1" role="dialog" aria-labelledby="novo-projecto" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="novo-projecto">
                    Novo Projecto <?php $data = date('ymHis'); $dia = date('d/m/Y') ?>
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
            
            <form action="{{route('projecto.store')}}" class="margin-start:-20px" method="POST">
                {{ csrf_field() }}
                    
                    <div class="container-fluid">
                        <label class="col-7"><b>Referencia: </b>REF{{ $data }}</label>
                        <label class="col-4 "><b>Data: </b>{{ $dia }}</label>
                        <div class="mb-3">
                            <label for="project-piu" class="form-label">Name of the PIU</label>
                            <input type="text" class="form-control" name="namePIU" id="project-piu" aria-describedby="helpId" placeholder="" />
                            {{-- <small id="helpId" class="form-text text-muted">PIU</small> --}}
                        </div>
                        <div class="mb-3">
                            <label for="project-name" class="form-label">Project name</label>
                            {{-- <textarea  name="descricao" id="project-name" cols="30" rows="3"></textarea> --}}
                            <input type="text" class="form-control" name="descricao" id="project-name" aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 hidden">
                            <input type="text" class="form-control" name="name" id="project-preparedby"  value="Name-{{date('Ymdhis')}}"aria-describedby="helpId"  />
                            <input type="text" value="REF{{ $data }}"
                            class="form-control" name="referencia" id="referencia" aria-describedby="helpId" placeholder="" />
                        </div>

                        <div class="mb-3">
                            <label for="preparadoPor" class="form-label">Prepared by</label>
                            <input
                                type="text"
                                class="form-control form-control-sm"
                                name="preparadoPor"
                                id="preparadoPor"                            
                            />

                        </div>
                        <div class="mb-3">
                            <label for="aprovadoPor" class="form-label">Approved by</label>
                            <input
                                type="text"
                                class="form-control form-control-sm"
                                name="aprovadoPor"
                                id="aprovadoPor"                            
                            />
                        </div>

                        <div class="mb-3">
                            <label for="project-subproj" class="form-label">Sub-project Contract</label>
                            <input type="text" class="form-control" name="contratoSubprojecto" id="contratoSubprojecto" placeholder="" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button href="{{ route('projecto.create') }}" type="submit" class="btn btn-primary">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function buscarID_aprovador(id){
        console.log(id+ " Preparador");
    }
    function buscarID_preparador(id){
        console.log(id+ " Aprovador");
    }
</script>
