<div class="panel panel-default">
    <div class="panel-header">
        <?php
        /*
          $this->breadcrumbs = array(
          'Payment Types' => array('index'),
          'Manage',
          );
         * 
         */
        ?>
        <a href="<?php echo yii::app()->baseUrl; ?>/paymentType/create" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Tambah</a>
    </div>
    <div class="panel-body">
        <?php
        $this->widget('bootstrap.widgets.TbGridView', array(
            'id' => 'payment-type-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'summaryText' => '',
            'columns' => array(
                'code',
                'name',
                array(
                    'class' => 'bootstrap.widgets.TbButtonColumn',
                ),
            ),
        ));
        ?>
    </div>
</div>
