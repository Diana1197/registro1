<?php $this->load->view('template/header'); ?>
    <?php $this->load->view('complementos/menu_header'); ?>
    <div class="row">
      <div class="large-9 medium-9 columns">
        <div class="row">
          <div class="large-12 columns">
            <hr>
            <div class="callout panel">
              <div class="row">
                <i class="fa fa-arrow-circle-left"></i> <?php echo anchor('rubro/listaRubro', 'Volver a la lista', 'id="lista-comerciantes"'); ?>
                <h4 style="text-decoration: underline;"><i class="fa fa-file-text-o"></i> Editar Rubro</h4>
              </div>
              <?php echo form_open('rubro/procesarEditarRubro/'.$id_rubro,'id="formNuevoAdmin" name="formNuevoAdmin"'); ?>
                <div class="row">
                  <div class="small-12 large-8">
                    <?php if(validation_errors()){ ?>
                      <div class="row">
                        <div class="columns large-12">
                          <div class="error-general" style="">
                            <?php echo validation_errors(); ?>
                          </div>
                        </div>
                      </div>
                    <?php } ?>

                    <div class="row">
                      <div class="small-4 columns">
                        <label for="right-label" class="right">Nombre de Rubro:</label>
                      </div>
                      <div class="small-8 columns">
                        <input name="nombre_rubro" value="<?php echo set_value('nombre_rubro', $nombre_rubro); ?>" type="text" id="nombre_rubro" placeholder="Ingrese Rubro">
                      </div>
                    </div>

                    

                    <div class="row">
                      <div class="small-4 columns">
                      </div>
                      <div class="small-8 columns">
                        <input type="submit" class="small round button" value="Editar Rubro">
                      </div>
                    </div>
                  </div>
                </div>
              <?php echo form_close(); ?>

            </div>
          </div>
        </div>
      </div>
      <div class="large-3 medium-3 columns">
        <hr>
			  <h4>Anuncios</h4>
				<div class="panel">
        	<h5>So many components, girl!</h5>
        	<p>A whole kitchen sink of goodies comes with Foundation. Checkout the docs to see them all, along with details on making them your own.</p>
        	<a href="http://foundation.zurb.com/docs/" class="small button">Go to Foundation Docs</a>
        </div>
      </div>
    </div>
    <?php $this->load->view('template/footer'); ?>