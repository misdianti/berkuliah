<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $faculties array */
/* @var $form CActiveForm */

?>

<?php echo Yii::app()->user->getNotification(); ?>

<?php $this->beginWidget('zii.widgets.CPortlet', array(
	'title' => '<i class="icon icon-cog"></i> <strong>PENGATURAN PROFIL</strong>',
)); ?>


	<?php $form = $this->beginWidget('CActiveForm', array(
		'htmlOptions' => array('enctype' => 'multipart/form-data'),
		'enableClientValidation' => true,
		'clientOptions' => array(
			'validateOnSubmit' => true,
			'successCssClass' => '',
			'errorCssClass' => 'error',
		),
	)); ?>

		<table class='table table-hover'>

			<?php echo Yii::app()->format->formatInputField($form, 'textField', $model, 'name', 'icon-user'); ?>
			<?php echo Yii::app()->format->formatInputField($form, 'dropDownList', $model, 'faculty_id', 'icon-briefcase',
				array(),
				array(
					'data' => CHtml::listData($faculties, 'id', 'name'),
				)
			); ?>

			<?php echo Yii::app()->format->formatInputField($form, 'textArea', $model, 'bio', 'icon-pencil'); ?>

			<?php echo Yii::app()->format->formatInputField($form, 'fileField', $model, 'file', 'icon-picture',
				array(),
				array(
					'hint' => ' (maks ' . Yii::app()->format->size(Student::MAX_FILE_SIZE) . ', JPEG/PNG)',
				)
			); ?>

			<tr>
				<td></td>
				<td>
					<?php echo CHtml::tag('button', array('type' => 'submit', 'class' => 'btn btn-primary'), '<i class="icon icon-hdd icon-white"></i> Simpan'); ?>
					<?php echo CHtml::link('Batal', array('home/index'), array('class' => 'btn')); ?>
				</td>
			</tr>

		</table>
			
	<?php $this->endWidget(); ?>

<?php $this->endWidget(); ?>