<!-- Modal -->
<div class="modal fade" id="userID" tabindex="-1" role="dialog" aria-labelledby="novo-user" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="novo-user">
                    Novo usuário
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                @if(Auth::user()->type == "admin")
            <form action="{{route('usuario.store')}}" class="margin-start:-20px" method="POST">
                {{ csrf_field() }}

                    <div class="container-fluid">
                        <div class="mb-3">
                            <label for="project-piu" class="form-label">Nome do usuário</label>
                            <input type="text" class="form-control" name="name" id="project-piu" aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3">
                            <label for="project-name" class="form-label">email do utilizador</label>
                            <input type="email" class="form-control" name="email" id="project-name" aria-describedby="helpId" placeholder="" />
                        </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Tipo de usuário</label>
                                <select
                                    class="form-select form-select-lg"
                                    name="type"
                                    id="tipo"
                                >
                                    <option selected value="er">Engenheiro Residente</option>
                                    <option value="eac">Especialista do Ambiente Contratado</option>
                                    <option value="sae">Especialista Supervisor do Ambiente</option>
                                    <option value="admin">Administrador</option>
                                </select>

                                <input type="password" class="form-control d-none" name="password" id="project-name" aria-describedby="helpId" value="12345678" />
                            </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <p >Password padrão="<span style="color:red">12345678</span>"</p>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Fechar
                    </button>
                    <button href="{{ route('usuario.index') }}" type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                </form>
                @else
                    <center>Apenas o <b>Administrador</b> pode fazer o cadastro de novos utilizadores</center>
                @endif
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
