<!-- Modal ciclos -->
<div class="modal fade" id="criarCiclo" tabindex="-1" role="dialog" aria-labelledby="criarCicloLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="criarCicloLabel">Novo cíclo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <!-- Nome input -->
                    <div class="form-group">
                        <label class="form-label" for="nome">Nome</label>
                        <input type="text" id="nome" class="form-control"/>
                    </div>
                    <!-- Data Inicio input -->
                    <div class="form-group">
                        <label class="form-label" for="dataInicio">Data Inicio</label>
                        <input type="email" id="dataInicio" class="form-control" />
                    </div>
                    <!-- Data fim input -->
                    <div class="form-group">
                        <label class="form-label" for="dataFim">Data fim</label>
                        <input type="email" id="dataFim" class="form-control" />
                    </div>
                    <!-- Consideracoes input -->
                    <div class="form-group">
                        <label class="form-label" for="consideracoes">Consideracoes</label>
                        <textarea class="form-control" id="consideracoes" rows="4"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <form action="">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal semanas -->
<div class="modal fade" id="criarSemana" tabindex="-1" role="dialog" aria-labelledby="criarSemanaLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="criarSemanaLabel">Nova semana</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="ciclos">Qual ciclo pertence?</label>
                    <select name="ciclos" id="ciclos" class="custom-select">
                        <option value="ciclo1">Ciclo 1</option>
                        <option value="ciclo2">Ciclo 2</option>
                        <option value="ciclo3">Ciclo 3</option>
                    </select>
                    <!-- Nome input -->
                    <div class="form-group">
                        <label class="form-label" for="nome">Nome</label>
                        <input type="text" id="nome" class="form-control"/>
                    </div>
                    <label for="tipo">Tipo de treino</label>
                    <select name="tipo" id="tipo" class="custom-select">
                        <option value="tipo1">tipo 1</option>
                        <option value="tipo2">tipo 2</option>
                        <option value="tipo3">tipo 3</option>
                        <option value="tipo4">tipo 4</option>
                    </select>
                    <!-- Data Inicio input -->
                    <div class="form-group">
                        <label class="form-label" for="dataInicio">Data Inicio</label>
                        <input type="email" id="dataInicio" class="form-control" />
                    </div>
                    <!-- Data fim input -->
                    <div class="form-group">
                        <label class="form-label" for="dataFim">Data fim</label>
                        <input type="email" id="dataFim" class="form-control" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <form action="">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Treino -->
<div class="modal fade" id="criarTreino" tabindex="-1" role="dialog" aria-labelledby="criarTreinoLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="criarTreinoLabel">Novo Treino</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <!-- Nome input -->
                    <div class="form-group">
                        <label class="form-label" for="nome">Nome</label>
                        <input type="text" id="nome" class="form-control"/>
                    </div>
                    <label for="ciclos">Qual ciclo pertence?</label>
                    <select name="ciclos" id="ciclos" class="custom-select">
                        <option value="ciclo1">Ciclo 1</option>
                        <option value="ciclo2">Ciclo 2</option>
                        <option value="ciclo3">Ciclo 3</option>
                    </select>
                    <div class="form-group">
                        <label class="form-label" for="grupoMuscular">Grupo Muscular</label>
                        <input type="text" class="form-control" name="grupoMuscular" id="grupoMuscular">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="nota">Nota</label>
                        <input type="text" class="form-control" id="nota" name="nota">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <form action="">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Exercicio -->
<div class="modal fade" id="criarExercicio" tabindex="-1" role="dialog" aria-labelledby="criarExercicioLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="criarExercicioLabel">Novo exercicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="treinos">Qual treino pertence?</label>
                    <select name="treinos" id="treinos" class="custom-select">
                        <option value="treino1">Treino 1</option>
                        <option value="treino2">Treino 2</option>
                        <option value="treino3">Treino 3</option>
                    </select>
                    <div class="form-group">
                        <label class="form-label" for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <!-- Consideracoes input -->
                    <div class="form-group">
                        <label class="form-label" for="observacoes">Observacoes</label>
                        <textarea class="form-control" id="observacoes" rows="4"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <form action="">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

