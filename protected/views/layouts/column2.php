<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php echo $content; ?>

<br/>

<?php if(count($this->menu)!=0): ?>
    <div class="col-md-12"></div>
    <div class="col-md-6" id="sidemenu">
        <div class="box box-solid">
            <div class="box-header">
                <h3 class="box-title">Operaciones<span></span></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <?php
                $this->widget('bootstrap.widgets.TbMenu', array(
                    'items' => $this->menu,
                    'htmlOptions' => array('class' => 'operations'),
                ));
                ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php $this->endContent(); ?>