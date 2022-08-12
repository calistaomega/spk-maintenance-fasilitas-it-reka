</div>
</div>
</div>
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto"style="color: black">
            <span>Copyright &copy; </span>
            <a class="text-reset fw-bold" href="https://ptrekaindo.co.id/#/"><i>PT. REKAINDO GLOBAL JASA</i></a>
        </div>
    </div>
</footer>

</div>
<!-- Blank div to give the page height to preview the fixed vs. static navbar-->
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
</div>

<!-- end Content-->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<!-- Bootstrap core JavaScript-->
<!-- <script src="<?php echo base_url()?>bs/vendor/jquery/jquery.min.js"></script> -->
<script src="<?php echo base_url()?>bs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url()?>bs/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<!-- <script src="<?php echo base_url()?>bs/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>bs/vendor/datatables/dataTables.bootstrap4.js"></script> -->
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url()?>bs/js/sb-admin.min.js"></script>
<script src="<?php echo base_url()?>assets/select/dist/js/bootstrap-select.js"></script>
<!-- Custom scripts for this page-->
<script src="<?php echo base_url()?>bs/js/sb-admin-datatables.min.js"></script>
<script src="<?php echo base_url()?>bs/vendor/jQuery_datatables/jquery-3.5.1.js"></script>
<script src="<?php echo base_url()?>bs/vendor/jQuery_datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>bs/vendor/jQuery_datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>  
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>  
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>  
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>

<script>
  $(document).ready(function() {
    var dataTable1 = $('#example').DataTable({
      "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]],
       "ajax":{  
              url:"<?php echo site_url('Staff/datauser')?>",
              type:"POST"             
         },
        scrollY:'250px',
        dom: 'lBfrtip',
        buttons: [
            {
                extend: 'excel',
                exportOptions: {
                columns: ':visible'
                }
            },
            'colvis'
        ],
        columnDefs: [{
            targets: -1,
            visible: false
        }]
    });
  });
</script>
</body>

</html>