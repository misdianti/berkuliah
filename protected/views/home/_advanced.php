<?php
/* @var $this HomeController */
/* @var $model Note */
/* @var $form CActiveForm */
/* @var $username array */

?>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Pencarian Lanjutan</h3>
	</div><!-- modal-header -->

	<div class="modal-body">

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id' => 'advanced-search-form',
			'action' => $this->createUrl('index'),
			'method' => 'get',
		)); ?>

			<div class="field">
				<?php echo $form->label($model,'title'); ?>
				<?php echo $form->textField($model,'title',array('size'=>100,'maxlength'=>90)); ?>
			</div>
			
			<div class="field">
				<?php echo $form->label($model,'type'); ?>
				<?php echo $form->dropDownList($model,'type', Note::getTypeNames(), array('prompt' => '(semua)')); ?>
			</div>

			<div class="field">
				<?php echo $form->label($model,'faculty_id'); ?>
				<?php echo $form->dropDownList($model,'faculty_id', CHtml::listData(
				Faculty::model()->findAll(), 'id', 'name'),
				array('prompt' => '(semua)',
					  'ajax' => array('type' => 'POST',
					             	             'url' => array('home/updateCourses'),
					             	             'update' => '#courses',
					             	             'data' => array('faculty_id' => 'js:this.value')
					                           		 ),
					  'options' => array('1' => array('selected' => 'selected')),
				)); ?>
			</div>

			<div class="field" id="courses">
				<?php echo $form->label($model,'course_id'); ?>
				<?php echo $form->dropDownList($model,'course_id', CHtml::listData(Course::model()->findAllByAttributes(array('faculty_id' => 1), array('order' => 'name ASC')), 'id', 'name'),
				array('prompt' => '(semua)')); ?>
			</div>

			<div class="field">
				<?php echo $form->label($model,'uploader'); ?>
				<?php $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
					'model' => $model,
					'attribute' => 'uploader',
					'source' => $usernames,
					'htmlOptions' => array('size' => 10, 'value' => ''),
				)); ?>
			</div>

			<div class="modal-footer">
				<?php echo CHtml::tag('button', array('type' => 'submit', 'class' => 'btn btn-primary'), '<i class="icon icon-search icon-white"></i> Cari'); ?>
				
				<?php echo CHtml::button('Batal', array(
					'class' => 'btn',
					'data-dismiss' => 'modal',
					'aria-hidden' => 'true',
				)); ?>
			</div>

		<?php $this->endWidget(); ?>

	</div><!-- modal-body -->

</div><!-- #myModal -->