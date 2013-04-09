<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Utama';
$this->breadcrumbs=array(
  'Utama'
  );
  ?>
  <form  action="">

   <input type="text" class="search-query span10" placeholder="Cari">
 </form>

 <div id="okCari">  
  <?php
  $this->widget('zii.widgets.jui.CJuiButton', array(
    'name'=>'button',
    'caption'=>'Ok',
    'value'=>'asd',
    'onclick'=>new CJavaScriptExpression('function(){alert("Save button has been clicked"); this.blur(); return false;}'),
    ));
    ?>
  </div>
  <div id="modeLanjutan">
    <?php

    ?>
    <?php
    $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
      'id'=>'dialogCariLanjutan',
      //'position'=>array('top'=500),
    // additional javascript options for the dialog plugin
      'options'=>array(
        'title'=>'Pencarian mode lanjutan',
        'autoOpen'=>false,
        ),
      ));
    echo(CHtml::label('Judul', 'name1'));
    echo(CHtml::textField('name1'));
    echo(CHtml::label('Jenis', 'name'));


    $this->widget('zii.widgets.CMenu',array(
   // 'htmlOptions'=>array('class'=>'pull-right nav'),

      'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
      'itemCssClass'=>'item-test',
      'encodeLabel'=>false,
      'items'=>array(
        /*array('label'=>'Gii generated', 'url'=>array('customer/index')),*/
     array('label'=>'Pilih berkas <span class="caret"></span>', 'url'=> '#',
      'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"), 'linkOptions' => array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
     'items'=>array(   
        array('label'=>'PDF','url'=>'#'),
        array('label'=>'Txt','url'=>'#'),
        array('label'=>'JPG','url'=>'#'),
        )))));

    echo(CHtml::label('Fakultas', 'name'));

    $this->widget('zii.widgets.CMenu',array(
   // 'htmlOptions'=>array('class'=>'pull-right nav'),

      'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
      'itemCssClass'=>'item-test',
      'encodeLabel'=>false,
      'items'=>array(
        /*array('label'=>'Gii generated', 'url'=>array('customer/index')),*/
     array('label'=>'Pilih fakultas <span class="caret"></span>', 'url'=> '#',
      'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"), 'linkOptions' => array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
     'items'=>array(   
        array('label'=>'Kedokteran','url'=>'#'),
        array('label'=>'Kedokteran Gigi','url'=>'#'),
        array('label'=>'Matematika & IPA','url'=>'#'),
         array('label'=>'Teknik','url'=>'#'),
        array('label'=>'Hukum','url'=>'#'),
        array('label'=>'Ekonomi','url'=>'#'),
         array('label'=>'Ilmu Budaya','url'=>'#'),
        array('label'=>'Psikologi','url'=>'#'),
        array('label'=>'Ilmu sosial & Ilmu Politik','url'=>'#'),
         array('label'=>'Kesehatan Masyarakat','url'=>'#'),
        array('label'=>'Ilmu Komputer','url'=>'#'),
        array('label'=>'Keperawatan','url'=>'#'),
        array('label'=>'Farmasi','url'=>'#'),
        )))));


      echo(CHtml::label('Mata kuliah', 'name'));

      $this->widget('zii.widgets.CMenu',array(
   // 'htmlOptions'=>array('class'=>'pull-right nav'),
      'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
      'itemCssClass'=>'item-test',
      'encodeLabel'=>false,
      'items'=>array(
        /*array('label'=>'Gii generated', 'url'=>array('customer/index')),*/
     array('label'=>'Pilih mata kuliah <span class="caret"></span>', 'url'=> '#',
      'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"), 'linkOptions' => array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
     'items'=>array(   
        array('label'=>'aa','url'=>'#'),
        array('label'=>'bb','url'=>'#'),
        array('label'=>'cc','url'=>'#'),
        )))));

      echo(CHtml::label('Oleh', 'name'));
      echo(CHtml::textField('name'));
      echo(CHtml::label('Tanggal', 'name'));

      $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'name'=>'publishDate',
    // additional javascript options for the date picker plugin
        'options'=>array(
          'showAnim'=>'fold',
          ),
        'htmlOptions'=>array(
          'style'=>'height:20px;',
          'input' =>'placeholder:"Cari";'
          ),
        ));


?>
<br/>
<?php
      $this->Beginwidget('zii.widgets.jui.CJuiButton', array(
        'name'=>'button5',
        'caption'=>'Ok',
        'value'=>'asd6',
        'onclick'=>new CJavaScriptExpression('function(){alert("tombol ubah ditekan"); this.blur(); return false;}'),
        ));
      $this->endWidget();

      $this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
      $dialog_button = '<button type="button" data-loading-text="Loading...">Pencarian mode lanjutan</button>';
      echo CHtml::link($dialog_button, '#', array(
       'onclick'=>'$("#dialogCariLanjutan").dialog("option","position","bottom").dialog("open"); return false;',
       ));
       ?>


     </div>
     <div class="page-header">
     </div>
     <div class="row-fluid">
      <?php
      $gridDataProvider = new CArrayDataProvider($data, array(
        'pagination'=>array(
          'pageSize'=>5,
          )
          )); ?>
          <div class="span12">
            <div id="rinci">

              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1cxzczzzzzzzzzzzzzzzxxxxx xxxxxxxxxxxxxxxxxxxxxxxx  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                    <td width='300'>Judul: Tes Catatan 1  
                      <br/>Mata Kuliah: Tes Mata Kuliah 1  
                      <br/>Oleh: ashar.fuadi 
                      <br/>Waktu Unggah: 
                    </td>
                    <td>
                      <?php 
                      echo(CHtml::checkBox('name'));
                      ?>
                    </td>
                  </tr>
                </tbody>
              </table>    
              <table>
                <tbody>
                  <tr>
                    <td width='350'> </td>
                    <td width='300'>            
                      <?php
                      $konfirmasi= 'Apakah anda yakin ingin menghapus berkas ini?';
                      ?>
                      <?php
                      $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
                        'id'=>'dialogHapus',
    // additional javascript options for the dialog plugin
                        'options'=>array(
                          'title'=>'Konfirmasi',
                          'autoOpen'=>false,
                          ),
                        ));
                      echo $konfirmasi;
                      echo "\n";
                      $this->Beginwidget('zii.widgets.jui.CJuiButton', array(
                        'name'=>'button5',
                        'caption'=>'ya',
                        'value'=>'asd6',
                        'onclick'=>new CJavaScriptExpression('function(){alert("tombol ubah ditekan"); this.blur(); return false;}'),
                        ));
                      $this->endWidget();
                      $this->Beginwidget('zii.widgets.jui.CJuiButton', array(
                        'name'=>'button9',
                        'caption'=>'tidak',
                        'value'=>'asd8',
                        'onclick'=>new CJavaScriptExpression('function(){alert("tombol ubah ditekan"); this.blur(); return false;}'),
                        ));
                      $this->endWidget();
                      $this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
                      $dialog_button = '<button type="button" class="btn btn-danger" data-loading-text="Loading...">Hapus</button>';
                      echo CHtml::link($dialog_button, '#', array(
                       'onclick'=>'$("#dialogHapus").dialog("open"); return false;',
                       ));
                       ?>
                     </td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td></tr>
                     <tr>
                     </tr>
                   </tbody>
                 </table>
               </div>
               <div class="span6">

               </div>
             </div>

