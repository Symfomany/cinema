<!-- Vue header incluse -->
<?php $this->load->view('partials/header'); ?>

<!-- Vue sidebar incluse -->
<?php $this->load->view('partials/sidebar'); ?>

<div id="content-wrapper"> <!-- DEBUT content-wrapper -->

    <div class="panel panel-success"> <!-- DEBUT DIV infos acteur -->
        <div class="panel-heading">
            <span class="panel-title text-lg"><?php echo $acteur->firstname; ?> <?php echo $acteur->lastname; ?>
            <span class="text-bg"> / <?php echo $acteur->age; ?> ans / <?php echo $acteur->city; ?></span>
            </span>
            <div class="panel-heading-controls">
                <a href="<?php echo site_url('acteur/lister'); ?>"><button class="btn btn-outline btn-sm btn-labeled btn-primary"><span class="btn-label icon fa fa-reply"></span>Retour</button></a>
                <div class="panel-heading-icon"><i class="fa fa-user"></i></div>
            </div>
        </div>
        <div class="panel-body row">

            <div class="col-md-3">
                <img class="img-thumbnail" src="<?php echo $acteur->image; ?>" alt="<?php echo $acteur->firstname; ?> <?php echo $acteur->lastname; ?>">
            </div>

            <div class="col-md-9">

                <div class="row">

                    <div class="col-md-12">
                        <h4>Biographie :</h4>
                        <?php echo substr(strip_tags($acteur->biography), 0, strrpos(substr(strip_tags($acteur->biography), 0, 400), ' ')); ?>
                        <?php
                        if (strlen(strip_tags($acteur->biography)) >=400) { ?>
                            ... <a href="#" class="text-bold" data-toggle="modal" data-target="#modal-biographie-acteur">en savoir +</a>

                            <!-- Large modal -->
                            <div id="modal-biographie-acteur" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title"><i class="fa fa-user"></i> Biographie de l'acteur "<?php echo $acteur->firstname; ?> <?php echo $acteur->lastname; ?>"</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo strip_tags($acteur->biography) ?>
                                        </div>
                                    </div> <!-- / .modal-content -->
                                </div> <!-- / .modal-dialog -->
                            </div> <!-- / .modal -->
                            <!-- / Large modal -->

                        <?php } ?>

                        <hr>

                    </div>



                    <div class="col-md-12">
                        <h4 class="text-danger"><i class="fa fa-trophy"></i> Récompenses :</h4>
                        <?php echo substr(strip_tags($acteur->recompenses), 0, strrpos(substr(strip_tags($acteur->recompenses), 0, 300), ' ')); ?>
                        <?php
                        if (strlen(strip_tags($acteur->recompenses)) >=300) { ?>
                            ... <a href="#" class="text-bold" data-toggle="modal" data-target="#modal-recompenses-acteur">en savoir +</a>

                            <!-- Large modal -->
                            <div id="modal-recompenses-acteur" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title"><i class="fa fa-user"></i> Récompenses de l'acteur "<?php echo $acteur->firstname; ?> <?php echo $acteur->lastname; ?>"</h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo strip_tags($acteur->recompenses) ?>
                                        </div>
                                    </div> <!-- / .modal-content -->
                                </div> <!-- / .modal-dialog -->
                            </div> <!-- / .modal -->
                            <!-- / Large modal -->

                        <?php } elseif (empty(strlen(strip_tags($acteur->recompenses)))) { ?>
                            Aucune récompense
                        <?php } ?>
                    </div>


                    <hr>

                </div>


            </div>
        </div>
    </div> <!-- FIN DIV infos acteur -->

    <div class="panel panel-warning"> <!-- DEBUT DIV films joués par l'acteur -->
        <div class="panel-heading">
            <span class="panel-title text-bg">Les films joués par <?php echo $acteur->firstname; ?> <?php echo $acteur->lastname; ?>

            </span>
            <div class="panel-heading-controls">
                <div class="panel-heading-icon"><i class="fa fa-film"></i></div>
            </div>
        </div>
        <div class="panel-body row">

            <?php
            if (!empty($moviesfromactor)) {

            foreach($moviesfromactor AS $moviefromactor) { ?>
                <div class="col-md-4 text-center">
                    <img class="img-responsive" src="<?php echo $moviefromactor->image ?>" alt="<?php echo $moviefromactor->title ?>">
                    <a href="<?php echo site_url('movie/voir/' . $moviefromactor->id); ?>" class="text-bg text-bold"><?php echo $moviefromactor->title; ?></a><br>
                    <a href="<?php echo site_url('movie/voir/' . $moviefromactor->id); ?>"><button class="btn btn-flat btn-sm btn-labeled btn-info"><span class="btn-label icon fa fa-eye"></span>voir</button></a>
                </div>
            <?php } ?>

            <?php } else { ?>

                <div class="col-md-4 col-md-offset-4 text-center">
                    <div class="alert-danger">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            <strong>Aucun film joué</strong>
                        </div>
                </div>

            <?php  } ?>

        </div>
    </div> <!-- FIN DIV films joués par l'acteur -->


</div> <!-- FIN content-wrapper -->

<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>




