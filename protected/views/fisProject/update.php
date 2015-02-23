<div id="breadcumb">
	<a href="<?php echo Yii::app()->createUrl('appUser/index'); ?>"> <span class="icon_home"> Home </span> </a> 
    <small>></small> 
    <a href="<?php echo Yii::app()->createUrl('fisProject/admin'); ?>">User</a>
    <small>></small> 
    <a href="#">Update</a>
</div>


<?php
/* @var $this FisProjectController */
/* @var $model Fis */

?>


<div id="wrapped_content">
    <h1>Update Fis Project<?php echo $model->project_name; ?></h1>
    
    <div class="form_actions"> 
        <a href="<?php echo $this->createUrl('fisProject/admin'); ?>"><span class="icon_edit"> </span>Close</a>
    </div>
    
    <?php
        foreach(Yii::app()->user->getFlashes() as $key => $message) 
        {
            echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
        }
    ?>
    
    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>