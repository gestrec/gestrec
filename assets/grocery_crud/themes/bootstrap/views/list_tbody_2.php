<?php foreach($list as $num_row => $row){ ?>
    <tr>
        <?php $first=1; ?>
        <?php foreach($columns as $column){?>
            <?php if($first==1){ ?>
            <td class="headcol">
                <?php echo $row->{$column->field_name} != '' ? $row->{$column->field_name} : '&nbsp;' ; ?>
            </td>

            <?php $first=2; continue;} else{?>
            <td class="long">
                <?php echo $row->{$column->field_name} != '' ? $row->{$column->field_name} : '&nbsp;' ; ?>
            </td>
            <?php } ?>
        <?php }?>
    </tr>
<?php } ?>