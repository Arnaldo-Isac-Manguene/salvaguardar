<!-- Modal -->
<div class="modal fade" id="projectoID" tabindex="-1" role="dialog" aria-labelledby="novo-projecto" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="novo-projecto">
                    Novo Funcionário <?php $data = date('YmdHis'); $dia = date('d/m/Y') ?>
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
            
            <form action="{{route('funcionario.store')}}" class="margin-start:-20px" method="POST">
                {{ csrf_field() }}
                    
                    <div class="container-fluid">
                        <label class="col-7"><b>Referencia: </b>{{$projecto->referencia}}</label>
                        <label class="col-4 "><b>Data: </b>{{ $dia }}</label>
                        <div class="mb-3">
                            <label for="project-piu" class="form-label">Nome do funcionário</label>
                            <input type="text" class="form-control" value="{{ isset($projecto->referencia): $projecto->referencia }}" name="nome" id="project-piu" aria-describedby="helpId" placeholder="" />
                            <input type="hidden" class="form-control" name="refProject"  value="{{ $projecto->referencia }}" />
                            {{-- <small id="helpId" class="form-text text-muted">PIU</small> --}}
                        </div>
                        <div class="mb-3">
                            <label for="project-name" class="form-label">Contacto</label>
                            {{-- <textarea  name="descricao" id="project-name" cols="30" rows="3"></textarea> --}}
                            <input type="text" class="form-control" name="contacto" id="project-name" aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 hidden">
                           
                        </div>

                        <div class="mb-3">
                            <label for="preparadoPor" class="form-label">Categoria</label>
                            <input
                                type="text"
                                class="form-control form-control-sm"
                                name="categoria"
                                id="preparadoPor"                            
                            />

                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button href="{{ route('funcionario.create', $projecto->referencia) }}" type="submit" class="btn btn-primary">
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
