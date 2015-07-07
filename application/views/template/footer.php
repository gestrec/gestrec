       <!-- Inicio Pie -->
       <div class="container">
            <p style="float: left; margin-right:5px;">© 2015 SIGERH. Todos los derechos reservados.</p>
            <p style="float: right; margin-right:5px;">Página mostrada en <strong>{elapsed_time}</strong> segundos.</p>
        </div>
        <!-- Fin Pie -->
        
    <script type="text/javascript" src="<?php echo base_url("assets/grocery_crud/js/jquery-1.11.1.js") ?>"></script>

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
            $('#datepicker_fecha_inicio').datetimepicker({
                maskInput: true,
                language: 'es',
                pickTime: false
            });
            $('#datepicker_fecha_fin').datetimepicker({
                maskInput: true,
                language: 'es',
                pickTime: false
            });
        </script>
    </body>
</html>
