</div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website <?php echo date_format(date_create($current_datetime),'Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
	
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>/assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/demo/chart-pie-demo.js"></script>
<script src="<?php echo base_url(); ?>/assets/sweet-modal/jquery.sweet-modal.min.js"></script>

<script src="https://cdn.ckeditor.com/4.20.2/full/ckeditor.js"></script>


<script>
    CKEDITOR.addCss('.cke_editable p { margin: 0 !important; }');
    CKEDITOR.ENTER_BR = 1;
    CKEDITOR.config.autoParagraph = false;
    CKEDITOR.replace( 'template_body' );
</script>

<script>
function copyToClipboard(element) {
    var $temp = $("<textarea></textarea>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();

    $.sweetModal({
    content: "<strong style='color:#000'>Copied Email Template</strong>",
    icon: $.sweetModal.ICON_SUCCESS});

}
</script>


     <?php if($this->session->flashdata('msg')): ?>
    <script>
    $.sweetModal({
    content: "<strong style='color:#000'><?php echo $this->session->flashdata('msg'); ?></strong>",
    icon: $.sweetModal.ICON_SUCCESS});
    </script>
    <?php endif; ?>

<script>
    function deleteBtn(element) {
 

    $.sweetModal.confirm('Confirm please?', function() {
	$.sweetModal('email-templates/delete/'+element);
    window.location.href = 'email-templates/delete/'+element;

    });

    }

   


  </script>

<?php $this->load->view('includes/ajax.php'); ?>








</body>

</html>