<input type="range" id="<?php echo $id; ?>" min="<?php echo $min; ?>" max="<?php echo $max; ?>" value="<?php echo $value; ?>" 
oninput="<?php echo $oninput; ?>">
<div class="input-group">
    <span class="input-group-addon">$</span>
    <input type="number" name="<?php echo $name; ?>" value="<?php echo $value; ?>" min="<?php echo $min; ?>" step="<?php echo $step; ?>"
    data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="<?php echo $id2; ?>" />
</div>