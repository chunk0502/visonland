<script>
    function searchColumsDataTable(datatable) {
        datatable.api().columns([0, 1, 2, 3, 4, 5, 6]).every(function () {
            var column = this;
            var input = document.createElement("input");
            if (column.selector.cols == 3) {
                input = document.createElement("select");
                var myOptions = ["Chờ duyệt", "Đã duyệt", "Không duyệt"];
                generateSelectOptions(input, myOptions);
            }
            
            input.setAttribute('placeholder', 'Nhập từ khóa');
            input.setAttribute('class', 'form-control');
    
            $(input).appendTo($(column.footer()).empty())
            .on('change', function () {
                column.search($(this).val(), false, false, true).draw();
            });
        }); 
    }
    $(document).ready(function() {
        // define columns for the datatables
        columns = window.LaravelDataTables["commission_detailTable"].columns();
        toggleColumnsDatatable(columns);
    });
</script>