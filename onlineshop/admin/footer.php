

<!-- Bootstrap -->

<script src="../../../../js/alert.js" type="text/javascript"></script>
<script src="../../../../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../../../js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../../../../js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="../../../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

<script type="text/javascript">

	function checkMain(x) {
	    var checked = $(x).prop('checked');
	    $('.cbxMain').prop('checked', checked)
	    $('tr:visible').each(function () {
	        $(this).find('.chk_delete').each(function () {
	            this.checked = checked;
	        });
	    });
	}

	function editsuccess(){
        $('#autoclosable-btn-editsuccess').prop('disabled', true);
        $('.alert-autocloseable-editsuccess').show();

        $('.alert-autocloseable-editsuccess').delay(3000).fadeOut( 'slow', function() {
            // Animation complete.
            $('#autoclosable-btn-editsuccess').prop('disabled', false);
        });
    }

    function save_success(){
        $('#autoclosable-btn-add').prop('disabled', true);
        $('.alert-autocloseable-add').show();

        $('.alert-autocloseable-add').delay(3000).fadeOut( 'slow', function() {
            // Animation complete.
            $('#autoclosable-btn-add').prop('disabled', false);
        });
    }

    function deleted(){
        $('#autoclosable-btn-danger').prop('disabled', true);
        $('.alert-autocloseable-danger').show();

        $('.alert-autocloseable-danger').delay(3000).fadeOut( 'slow', function() {
            // Animation complete.
            $('#autoclosable-btn-danger').prop('disabled', false);
        });
    }

    function duplicate(){
        $('#autoclosable-btn-duplicate').prop('disabled', true);
        $('.alert-autocloseable-duplicate').show();

        $('.alert-autocloseable-duplicate').delay(3000).fadeOut( 'slow', function() {
            // Animation complete.
            $('#autoclosable-btn-duplicate').prop('disabled', false);
        });
    }

</script>  



<!-- page script -->
