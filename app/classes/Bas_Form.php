<?php

/**
 * Form Builder Plugin
 * This class plugin builds a Bootstrap-based form.
 * @package  Form Builder
 * @author   Raymund John Ang <raymund@open-nis.org>
 * @license  MIT License
 */

class Bas_Form
{

	public function open($action, $class=null, $method='post')
	{
		?>
<form class="<?= $class ?>" action="<?= $action ?>" method="<?= $method ?>">
    <?php
	}

	public function input($type, $name, $label, $placeholder=null, $value=null, $required=FALSE, $style=null)
	{
		?>
    <div class="input-style-1">
        <label class="control-label col-sm-4 <?= $style ?>" for="<?= $name ?>"><?= $label ?> :</label>
        <input type="<?= $type ?>" id="<?= $name ?>" placeholder="<?= $placeholder ?>" name="<?= $name ?>"
            value="<?= $value ?>" <?php if ($required === TRUE) echo 'required'; ?> />
    </div>
    <?php
	}

	public function input_line($type, $name, $label, $placeholder=null, $value=null, $disabled=null, $required=FALSE, $style=null, $id=null, $class=null)
	{
		?>
    <div class="mb-3 row input-style-1">
        <label for="<?= $type ?>" class="col-sm-2 col-form-label <?= $style ?>"><?= $label ?> :</label>
        <div class="col-sm-10">
            <input type="<?= $type ?>" <?= $type =='number' ? 'min=1' : '';?> <?= !empty($id) ? 'id="'.$id.'"' : '' ?>  <?= !empty($class) ? 'class="'.$class.'"' : '' ?>
                <?= !empty($placeholder) ? 'id="'.$placeholder.'"' : '' ?> name="<?= $name ?>" value="<?= $value ?>"
                <?php if ($required === TRUE) echo 'required'; ?> <?php if ($disabled === TRUE) echo 'disabled'; ?> />
        </div>
    </div>
    <?php
	}

	public function input_only_multi($type, $name, $placeholder=null, $value=null, $disabled=null, $required=FALSE, $style=null, $id=null, $class=null)
	{
		?>
    <div class="row input-style-1">
        <div class="<?= !empty($style) ? $style : 'col-sm-4'; ?>">
            <input type="<?= $type ?>" id="<?= $id ?>" placeholder="<?= $placeholder ?>" name="<?= $name ?>[]"
                value="<?= $value ?>" <?php if ($required === TRUE) echo 'required'; ?> class=<?= !empty($class) ? $class : ''; ?>
                <?php if ($disabled === TRUE) echo 'disabled'; ?> />
        </div>
    </div>
    <?php
	}

    public function input_only_search($type, $name, $placeholder=null, $value=null, $disabled=null, $required=FALSE, $style=null, $id=null)
	{
		?>
        <div class="<?= !empty($style) ? $style : 'col-sm-4'; ?>">
            <input type="<?= $type ?>" id="<?= $id ?>" placeholder="<?= $placeholder ?>" name="<?= $name ?>" size="25" value="<?= $value ?>" <?php if ($required === TRUE) echo 'required'; ?>
                <?php if ($disabled === TRUE) echo 'disabled'; ?> style="padding:10px;"/>
        </div>
    <?php
	}

	public function input_on($type, $name, $placeholder=null, $value=null, $disabled=null, $required=FALSE, $style=null, $id=null)
	{
		?>
    <div class="col-sm-2">
        <div class="input-style-1 ">
            <label><?= $placeholder ?> </label>
            <input type="<?= $type ?>" class="<?= !empty($style) ? $style : 'col-sm-6'; ?>" id="<?= $id ?>"
                placeholder="<?= $placeholder ?>" name="<?= $name ?>" value="<?= $value ?>"
                <?php if ($required === TRUE) echo 'required'; ?> <?php if ($disabled === TRUE) echo 'disabled'; ?> />
        </div>
    </div>

    <?php
    }
    public function input_on_small($type, $name, $placeholder=null, $value=null, $disabled=null, $required=FALSE, $style=null, $id=null, $button=null, $col=null, $size= null)
	{
        $size = !empty($size) ? 'size='.$size :  'size=6';
		?>
    <div class="<?= !empty($col) ? $col :  'col-sm-5';?>">
        <div class="input-group input-group-sm mb-3 ">
            <span class="input-group-text" id="inputGroup-sizing-sm"><?= $placeholder ?> </span>
            <input type="<?= $type ?>" <?=$size?> class="<?= !empty($style) ? $style : 'col-sm-6'; ?>" id="<?= $id ?>"
                placeholder="<?= $placeholder ?>" name="<?= $name ?>" value="<?= $value ?>"
                <?php if ($required === TRUE) echo 'required'; ?> <?php if ($disabled === TRUE) echo 'disabled'; ?> />
                <?php if($button) { ?>
                <button class="btn btn-primary" ><?=$button;?></button>
                <?php } ?>
        </div>
    </div>

    <?php
	}

	public function input_hidden($name, $value=null) {
		?>
    <input type="hidden" name="<?= $name ?>" value="<?= $value ?>" />
    <?php
	}

    public function input_hidden_multi($name, $value=null) {
		?>
    <input type="hidden"  name="<?= $name ?>[]" value="<?= $value ?>" />
    <?php
	}

	public function textArea($name, $label, $value=NULL, $required=FALSE)
	{
		?>
    <div class="input-style-1">
        <label class="control-label col-sm-2" for="<?= $name ?>"><?= $label ?>:</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="5" id="<?= $name ?>" placeholder="Enter <?= $label ?>"
                name="<?= $name ?>" <?php if ($required === TRUE) echo 'required'; ?>><?= $value ?></textarea>
        </div>
    </div>
    <?php
	}

	public function button($name, $style)
	{
		?>
    <button class="main-btn <?=$style;?> rounded-md btn-hover mr-15"><?=$name;?></button>
    <?php
	}

	public function button_xs($name, $style, $id = null)
	{
        $id = !empty($id) ? 'id="'.$id.'"' :  '';
		?>
    <div class="col-sm-1">
        <div class="input-style-1">
            <button class="main-btn <?=$style;?>  rounded-md btn-hover mr-15" <?=$id;?>><?=$name;?></button>
        </div>
    </div>
    <?php
	}

	public function a_button($href,$name, $style=null)
	{
		?>
    <a href="<?=$href;?>" class="main-btn <?=$style;?> rounded-md btn-hover mr-15"><?=$name;?></a>
    <?php
	}

	public function dropdown($name, $label, $data, $value)
	{
		?>
    <div class="mb-3 row select-style-1">
        <label class="col-sm-2 col-form-label "><?= $label ?> :</label>
        <div class="col-sm-10">
            <div class="select-position">
                <select name="<?=$name?>">
                    <?php foreach($data as $row) { ?>
                    <option value="<?=$row->list_id;?>"><?=$row->list_name;?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
    <?php
	}

	public function csrfToken()
	{
		?>
    <input type="hidden" name="csrf-token" value="<?= Basic::csrfToken() ?>">
    <?php
	}

	public function close()
	{
		?>
</form>
<?php
	}

}