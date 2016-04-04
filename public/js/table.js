$(document).ready(function() {
	$('#tabla').DataTable({
  		"scrollY": 300,
    	"scrollX": true,
    	"lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
    	"initComplete": function () {
            var api = this.api();
            api.$('td').click( function () {
                api.search( this.innerHTML ).draw();
            } );
        }
	});
} );