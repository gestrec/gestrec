
       <!-- Inicio Pie -->
       <div class="container">
            <p style="float: left; margin-right:5px;">© 2015 SIGERH. Todos los derechos reservados.</p>
            <p style="float: right; margin-right:5px;">Página mostrada en <strong>{elapsed_time}</strong> segundos.</p>
        </div>
        <!-- Fin Pie -->
        
    <?php if(isset($jQ)){if($jQ) {?>
    <script type="text/javascript" src="<?php echo base_url("assets/grocery_crud/js/jquery-1.11.1.min.js") ?>"></script>
    <?php }} ?>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/numericKeyboard.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-clockpicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-datetimepicker.language.js') ?>"></script>
        
        <script type="text/javascript">
            $('#myModal').on('hidden.bs.modal', function (e) {
                window.location = "<?php echo base_url("/anticipos") ?>"
            })
            $('.clockpicker').clockpicker({
                'default' :'now',
                placement: 'right',
                // donetext:'Aceptar',
                autoclose:true,
                // fromnow:1000,
            }).find('input').change(function(){
                console.log(this.value);
            });
            $('#datepicker_1').datetimepicker({
                maskInput: true,
                language: 'es',
                pickTime: false,
                format: 'yyyy-MM-dd'
            });
            $('#datepicker_2').datetimepicker({
                maskInput: true,
                language: 'es',
                pickTime: false,
                format: 'yyyy-MM-dd'
            });
            $('#datepicker_3').datetimepicker({
                maskInput: true,
                language: 'es',
                pickTime: false,
                format: 'yyyy-MM-dd'
            });
        </script>
    </body>
</html>
