$(document).ready(function() {
          
    $('#btnAdd').click(function() {
        window.location.replace(addLocationUrl);
    });
    
    $('#btnDelete').attr('disabled', 'disabled');

        
    $("#ohrmList_chkSelectAll").click(function() {
        if($(":checkbox").length == 1) {
            $('#btnDelete').attr('disabled','disabled');
        }
        else {
            if($("#ohrmList_chkSelectAll").is(':checked')) {
                $('#btnDelete').removeAttr('disabled');
            } else {
                $('#btnDelete').attr('disabled','disabled');
            }
        }
    });
    
    $(':checkbox[name*="chkSelectRow[]"]').click(function() {
        if($(':checkbox[name*="chkSelectRow[]"]').is(':checked')) {
            $('#btnDelete').removeAttr('disabled');
        } else {
            $('#btnDelete').attr('disabled','disabled');
        }
    });
    
    $('#btnReset').click(function(){
        window.location.replace(viewLocationUrl);
    })
    
    $('#btnSearch').click(function(){
        $('#frmSearchLocation').submit()
    });
    
    $('#btnDelete').click(function(){
        $('#frmList_ohrmListComponent').submit(function(){
            $('#deleteConfirmation').dialog('open');
            return false;
        });
    });

    $("#deleteConfirmation").dialog({
        autoOpen: false,
        modal: true,
        width: 325,
        height: 50,
        position: 'middle',
        open: function() {
            $('#dialogCancelBtn').focus();
        }
    });
    
    $('#frmList_ohrmListComponent').attr('name','frmList_ohrmListComponent');
    $('#dialogDeleteBtn').click(function() {
        document.frmList_ohrmListComponent.submit();
    });
    $('#dialogCancelBtn').click(function() {
        $("#deleteConfirmation").dialog("close");
    });
    
});