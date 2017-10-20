<?php include 'components/header.php'; ?>

    <section class="menu2 pag-interna">
        <div class="item n-borda">
            <a href="" class="hvr-float-shadow">
                <i class="fa fa-user" aria-hidden="true"></i>
                <h2>SOLICITE UM<br />CONSULTOR</h2>
            </a>
        </div><!-- .item -->
        <div class="item item2">
            <a href="" class="hvr-float-shadow">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <h2>AGENDE UMA<br />VISITE A SUA<br />RESIDÊNCIA</h2>
            </a>
        </div><!-- .item -->
        <div class="item">
            <a href="" class="hvr-float-shadow">
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                <h2>CONHEÇA NOSSO<br />CATÁLAGO</h2>
            </a>
        </div><!-- .item -->
        <div class="item">
            <a href="" class="hvr-float-shadow">
                <i class="fa fa-home" aria-hidden="true"></i>
                <h2>RECEBA NO<br />CONFORTO DE CASA</h2>
            </a>
        </div><!-- .item -->
    </section><!-- .menu2 -->

    <section class="titulo-topo">
        <div class="container">
            <h1>Fale Conosco</h1>

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Fale Conosco</li>
            </ol>
            <div class="borda"></div>
        </div><!-- .container -->
    </section><!-- .topo -->

    <section class="pag-interna quem-somos fale-conosco">
        <div class="container">
            <form>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="" />
                </div><!-- .form-group -->

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" id="email" class="form-control" value="" />
                </div><!-- .form-group -->

                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control" value="" />
                        </div><!-- .form-group -->
                    </div><!-- .md-5 -->
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control" value="" />
                        </div><!-- .form-group -->
                    </div><!-- .md-5 -->
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <div class="form-group">
                            <label>UF</label>
                            <select name="carlist" form="carform">
                                <option value="RN">RN</option>
                                <option value="SP">SP</option>
                                <option value="RJ">RJ</option>
                            </select>                            
                        </div><!-- .form-group -->
                    </div><!-- .md-2 -->
                </div><!-- .row -->

                <div class="form-group">
                    <label>Assunto</label>
                    <input type="text" name="assunto" id="assunto" class="form-control" value="" />
                </div><!-- .form-group -->

                <div class="form-group">
                    <label>Mensagem</label>
                    <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                </div><!-- .form-group -->

                <input type="submit" class="cadastrar" value="Enviar" />
            </form>
        </div><!-- .container -->
    </section><!-- .pag-interna -->

<?php include 'components/footer.php'; ?>