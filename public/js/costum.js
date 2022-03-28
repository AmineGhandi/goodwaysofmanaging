
$(document).ready(function () {
    $('#table_id').DataTable({
        "searching": true,
        "paging": true,
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        "language": {
            "lengthMenu": "Afficher _MENU_ élément",
            "search": "Recherche"
        }
    });
    var table = $('#table_id').DataTable();
    $('input:checkbox').on('change', function () {
        
     var action = $('input:checkbox[name="checkbox"]:checked').map(function() {
                    return '^' + this.value + '$';
                }).get().join('|');

         table.column(1).search(action, true, false, false).draw(false);
       });
})
$('#proc').on('change',function(){
        $('#procforum').submit();
    });
