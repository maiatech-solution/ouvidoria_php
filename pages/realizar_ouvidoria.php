
    <h3 class="mt-4">Ficha de solicitação</h3>

    <section class="forms-ouvidoria container border mb-4 mt-4">
        <form method="post">
            <div class="row p-4">
                <div class="col-lg-12 col-md-12">
                    <div class="form-group rounded-0">
                        <label for="assunto" class="form-label ">Assunto:</label>
                        <select id="assunto" name="assunto">
                            <option value="">Selecione...</option>
                            <option value="sugestao">Sugestões</option>
                            <option value="elogio">Elogio</option>
                            <option value="critica">Crítica ou Reclamação</option>
                            <option value="esclarecimento">Esclarecimento</option>
                            <option value="denuncias">Denúncias</option>
                            <option value="outras">Outras</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="nome">Nome: <span class="text-danger">(*)</span> </label>
                        <input class="form-control" required type="text" name="nome" id="nome" placeholder="Informe seu nome completo">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="cpf">CPF: <span class="text-danger">(*)</span></label>
                        <input class="form-control" required type="number" name="cpf" id="cpf" placeholder="___.___.___-__">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="email">E-mail: <span class="text-danger">(*)</span></label>
                        <input class="form-control" required type="email" name="email" id="email" placeholder="Informe seu E-mail">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="nasc">Data de nascimento:</label>
                        <input class="form-control" type="date" name="nasc" id="nasc">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div>
                        <div>
                            <label class="form-label" for="sex">Sexo:</label>
                        </div>
                        <div id="sex-input">
                            <input type="radio" name="sex" id="sexM" value="M" checked><span> Masculino</span>
                            <input type="radio" name="sex" id="sexF" value="F"><span> Feminino</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label" for="mensagem">Mensagem:  <span class="text-danger">(*)</span></label>
                        <textarea class="form-control" name="mensagem" id="mensagem"
                            style="max-width: 100%; min-width: 100%; min-height: 70px; max-height: 140px;" required></textarea>
                    </div>
                </div>
    
            </div>
        </form>
        <button class="w-100 text-light btn btn-primary-pro rounded-0 mb-4" type="submit" onclick="enviar()">Enviar</button>
        </div>

    </section>
