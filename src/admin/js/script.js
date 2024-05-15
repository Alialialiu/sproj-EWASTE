$(document).ready(function() {
    $(document).on('click','.btnItem', function(e){
        e.preventDefault();
        var url = 'components/dialogs/dialogs.php';
        var dataId = $(this).attr("id");
        $.post(url, {getId : dataId},
            function (response) {
                  $('#infoItemModal').html(response);
            });
    });
    $('.menu-dropdown-toggle').click(function() {
      $(this).toggleClass('menu-dropdown-show');
      $(this).next('.menu-dropdown').toggleClass('menu-dropdown-show');
    });
             $("#formSaveItem").submit(function(e) {
             e.preventDefault();

             var url = 'php/addEwaste.php';
             var data = $(this).serialize();
             alert(data)
             $.post(url, data, function(response) {
                 alert(response.msg)
             });
         });
});