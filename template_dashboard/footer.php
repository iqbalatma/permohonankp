<!-- jQuery -->
<script src="assets/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="assets/AdminLTE-master/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/AdminLTE-master/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/AdminLTE-master/dist/js/demo.js"></script>
<!-- AdminLTE for wizard -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>

<script>
    $('#smartwizard').smartWizard({
        selected: 0, // Initial selected step, 0 = first step
        theme: 'default', // theme for the wizard, related css need to include for other than default theme
        justified: true, // Nav menu justification. true/false
        darkMode: false, // Enable/disable Dark Mode if the theme supports. true/false
        autoAdjustHeight: true, // Automatically adjust content height
        cycleSteps: false, // Allows to cycle the navigation of steps
        backButtonSupport: true, // Enable the back button support
        enableURLhash: true, // Enable selection of the step based on url hash
        transition: {
            animation: 'none', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
            speed: '400', // Transion animation speed
            easing: '' // Transition animation easing. Not supported without a jQuery easing plugin
        },
        toolbarSettings: {
            toolbarPosition: 'bottom', // none, top, bottom, both
            toolbarButtonPosition: 'right', // left, right, center
            showNextButton: true, // show/hide a Next button
            showPreviousButton: true, // show/hide a Previous button
            toolbarExtraButtons: [] // Extra buttons to show on toolbar, array of jQuery input/buttons elements
        },
        anchorSettings: {
            anchorClickable: true, // Enable/Disable anchor navigation
            enableAllAnchors: false, // Activates all anchors clickable all times
            markDoneStep: true, // Add done state on navigation
            markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
            removeDoneStepOnNavigateBack: false, // While navigate back done step after active step will be cleared
            enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        },
        keyboardSettings: {
            keyNavigation: true, // Enable/Disable keyboard navigation(left and right keys are used if enabled)
            keyLeft: [37], // Left key code
            keyRight: [39] // Right key code
        },
        lang: { // Language variables for button
            next: 'Next',
            previous: 'Previous'
        },
        disabledSteps: [], // Array Steps disabled
        errorSteps: [], // Highlight step with errors
        hiddenSteps: [] // Hidden steps
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        bsCustomFileInput.init();
        $('#smartwizard').smartWizard();
    });
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })





    // $('#submit_form1').click(function() {

    //     // alert("Test");
    //     // var error_email = '';
    //     // var error_password = '';
    //     // var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    //     // if ($.trim($('#email').val()).length == 0) {
    //     //     error_email = 'Email is required';
    //     //     $('#error_email').text(error_email);
    //     //     $('#email').addClass('has-error');
    //     // } else {
    //     //     if (!filter.test($('#email').val())) {
    //     //         error_email = 'Invalid Email';
    //     //         $('#error_email').text(error_email);
    //     //         $('#email').addClass('has-error');
    //     //     } else {
    //     //         error_email = '';
    //     //         $('#error_email').text(error_email);
    //     //         $('#email').removeClass('has-error');
    //     //     }
    //     // }

    //     // if ($.trim($('#password').val()).length == 0) {
    //     //     error_password = 'Password is required';
    //     //     $('#error_password').text(error_password);
    //     //     $('#password').addClass('has-error');
    //     // } else {
    //     //     error_password = '';
    //     //     $('#error_password').text(error_password);
    //     //     $('#password').removeClass('has-error');
    //     // }
    //     // $('#form_1').removeClass('active active_tab1');
    //     // $('#form_1').removeAttr('href data-toggle');
    //     // $('#step-1').removeClass('active');
    //     // $('#form_1').addClass('inactive_tab1');
    //     // $('#form_2').removeClass('inactive_tab1');
    //     // $('#form_2').addClass('active_tab1 active');
    //     // $('#form_2').attr('href', '#step-2');
    //     // $('#form_2').attr('data-toggle', 'tab');
    //     // $('#step-2').addClass('active in');


    //     $('#form_1').removeClass('active active_tab1');
    //     $('#form_1').removeAttr('href data-toggle');
    //     $('#step-1').removeClass('active');
    //     $('#form_1').addClass('inactive_tab1');
    //     $('#form_2').removeClass('inactive_tab1');
    //     $('#form_2').addClass('active_tab1 active');
    //     $('#form_2').attr('href', '#step-2');
    //     $('#form_2').attr('data-toggle', 'tab');
    //     $('#step-2').addClass('active in');
    //     // if (error_email != '' || error_password != '') {
    //     //     return false;
    //     // } else {
    //     //     $('#form_1').removeClass('active active_tab1');
    //     //     $('#form_1').removeAttr('href data-toggle');
    //     //     $('#step-1').removeClass('active');
    //     //     $('#form_1').addClass('inactive_tab1');
    //     //     $('#form_2').removeClass('inactive_tab1');
    //     //     $('#form_2').addClass('active_tab1 active');
    //     //     $('#form_2').attr('href', '#step-2');
    //     //     $('#form_2').attr('data-toggle', 'tab');
    //     //     $('#step-2').addClass('active in');
    //     // }
    // });
</script>
</body>

</html>