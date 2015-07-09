<input type="range" id="<?php echo $id; ?>" min="<?php echo $min; ?>" max="<?php echo $max; ?>" value="<?php echo $value; ?>" oninput="<?php echo $oninput; ?>">
<div class="input-group">
    <input type="number" name="<?php echo $name; ?>" for="<?php echo $id; ?>" value="<?php echo $value; ?>" min="<?php echo $min; ?>"
     class="form-control" id="<?php echo 'field-'.$name; ?>" />
    <span class="input-group-addon"><?php echo $addon; ?></span>
</div>