<!-- footer start -->
<footer>
    <div class="container">
        <div class="col-md-4 col-sm-6">
            <h4>Featured Companies</h4>
            <ul>
                <li>
                    <a href="ApplyForJob.php">
                        <i class="fa fa-briefcase"></i> IBRAHIM FIBRES LIMITED
                    </a>
                </li>
                <li>
                    <a href="ApplyForJob.php">
                        <i class="fa fa-briefcase"></i> SADAQAT LIMITED
                    </a>
                </li>
                <li>
                    <a href="ApplyForJob.php">
                        <i class="fa fa-briefcase"></i> MASOOD TEXTILE MILLS LIMITED
                    </a>
                </li>
                <li>
                    <a href="ApplyForJob.php">
                        <i class="fa fa-briefcase"></i> KLASH (PVT.) LIMITED
                    </a>
                </li>
                <li>
                    <a href="ApplyForJob.php">
                        <i class="fa fa-briefcase"></i> J.K. SPINNING MILLS LIMITED
                    </a>
                </li>
                <li>
                    <a href="ApplyForJob.php">
                        <i class="fa fa-briefcase"></i> GOHAR TEXTILE MILLS (PVT.) LIMITED
                    </a>
                </li>
                <li>
                    <a href="ApplyForJob.php">
                        <i class="fa fa-briefcase"></i> SITARA CHEMICAL INDUSTRIES LIMITED
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-4 col-sm-6">
            <h4>Latest Job</h4>
            <ul>
                <li><a href="ApplyForJob.php">Software Engineer</a></li>
                <li><a href="ApplyForJob.php">Network Administrator</a></li>
                <li><a href="ApplyForJob.php">Database Administrator</a></li>
                <li><a href="ApplyForJob.php">Textile Engineer</a></li>
                <li><a href="ApplyForJob.php">Garment Designer</a></li>
                <li><a href="ApplyForJob.php">Production Manager</a></li>
                <li><a href="ApplyForJob.php">Quality Control Inspector</a></li>
            </ul>
        </div>

        <div class="col-md-4 col-sm-6">
            <h4>Reach Us</h4>
            <address>
                <ul>
                    <li>
                        C49F+X23, Green Belt Rd, Block Z Madina Town, Faisalabad, Punjab
                    </li>
                    <li>Email: info@agnjobbank.com</li>
                    <li>Call: 0303 7774400</li>
                </ul>
            </address>
        </div>
    </div>
    <div class="copy-right">
        <p>&copy;Copyright 2023 AGN JOB BANK <br> Developed By <a href="https://thewebconcept.com/">The Web Concept</a></p>
    </div>
</footer>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Include Dropzone JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"></script>
<script>
    $(document).ready(function() {

        $("select").select2({
            width: '100%',
            // theme: "classic"
        });

        Dropzone.options.myDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            acceptedFiles: ".jpg, .jpeg, .png, .gif",
            addRemoveLinks: true
        };
    });
</script>
<script>
    function duplicateRow() {
        var container = $('#container');
        var lastRow = container.children('.row:last').clone(true);

        var newRowId = 'row' + (container.children('.row').length + 1);
        lastRow.attr('id', newRowId);
        // Generate unique ids for the inputs in the cloned row
        var newExpDetailsId = 'exp_details' + (container.children('.row').length + 1);
        console.log(newExpDetailsId);
        var newCompNameId = 'comp_name' + (container.children('.row').length + 1);
        var newExpDurationId = 'exp_duration' + (container.children('.row').length + 1);
        var newFromId = 'from' + (container.children('.row').length + 1);
        var newToId = 'to' + (container.children('.row').length + 1);

        // Update the ids in the cloned row
        lastRow.find('[name="exp_details[]"]').attr('id', newExpDetailsId);
        lastRow.find('[name="comp_name[]"]').attr('id', newCompNameId);
        lastRow.find('[name="exp_duration[]"]').attr('id', newExpDurationId);
        lastRow.find('[name="from[]"]').attr('id', newFromId);
        lastRow.find('[name="to[]"]').attr('id', newToId);


        // Clear the input values in the cloned row
        lastRow.find('input, select').val('');

        // Add both "Add" and "Remove" buttons to the new row
        lastRow.find('.add_remove').html(`
                                <button type="button" class="outline_none border-0 bg-white" onclick="duplicateRow()">
                                    <img src="img/add.png" width="30px" alt="add sign">
                                </button>
                                <button type="button" class="outline_none border-0 bg-white" onclick="removeRow(this)">
                                    <img title="Remove Row" src="img/remove.png" width="30px" alt="remove sign">
                                </button>
                            `);

        container.append(lastRow);
    }

    function removeRow(button) {
        var container = $('#container');
        var rowToRemove = $(button).closest('.row');
        rowToRemove.remove();

        // Show the "Add" button when there are no child rows
        if (container.children('.row').length === 0) {
            container.children('.row:first').find('.add_remove').html(`
                                <button type="button" class="border-0 bg-white" onclick="duplicateRow()">
                                    <img src="assets/img/add.png" width="30px" alt="add sign">
                                </button>
                            `);
        }
    }
</script>
</body>

</html>