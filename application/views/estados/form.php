<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $title ?></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <?php $attributes = array('class' => "form-horizontal form-label-left") ?>
                        <?= form_open($action, $attributes) ?>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nome da Sala <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="nome" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Cidade<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select name="" class="form-control custom-select buscar">
                                    <option value=""></option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                    <option value="" >Teste</option>
                                </select>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <button class="btn btn-danger" type="button">Cancelar</button>
                                <button class="btn btn-warning" type="reset">Limpar Campos</button>
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </div>
                        </div>

                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>