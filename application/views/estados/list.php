<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row" style="display: inline-block;">
            <div class="top_tiles">
                <!-- -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <?php if ($message = $this->session->flashdata('message')) : ?>
                                <div class="alert alert-success alert-dismissible " role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <strong><?= $message; ?></strong>
                                </div>
                            <?php endif; ?>
                            <div class="x_title">
                                <h2>Estados</h2>

                                <ul class="nav navbar-right panel_toolbox">
                                    <div>
                                        <a href="<?= base_url('estado/create'); ?>" class="btn btn-success btn-sm ml-2">Novo +</a>
                                    </div>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">

                                                <thead>
                                                    <tr class="headings">
                                                        <th>#</th>
                                                        <th>Nome</th>
                                                        <th>Sigla</th>
                                                        <th class="text-center">Ação</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($estado_data as $estado) : ?>
                                                        <tr>
                                                            <td><?= ++$start; ?></td>
                                                            <td><?= $estado->nome; ?></td>
                                                            <td><?= $estado->sigla; ?></td>
                                                            <td class="text-center">
                                                                <a href="<?= base_url('estado/update/' . $estado->id) ?>" class="btn btn-sm btn-primary" title="Editar"><i class="fa fa-fw fa-edit"></i></a>
                                                                <a title="Excluir" href="javascript(void)" data-toggle="modal" data-target="#estado-<?= $estado->id; ?>" class=" btn btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- modal dell -->
                                                        <div class="modal" tabindex="-1" id="estado-<?= $estado->id; ?>" role="dialog">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">
                                                                            <i class="fa fa-warning"></i>
                                                                            Excluir
                                                                        </h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Tem certeza que deseja excluir o <strong><?= $estado->nome . "-" . $estado->sigla ?> ?</strong>.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                        <a href="<?= base_url('estado/delete/' . $estado->id) ?>" class="btn btn-danger">Excluir</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- fim modal -->
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /page content -->