<html>
    <head>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
    <script src="//cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
        <title></title>
    </head>
    <body>
    
           
     <table id="customersTable" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Vendor</th>
                <th>Product Code</th>
                <th>Code</th>
                <th>DeviceType</th>
                <th>Description</th>
                <th>HSNSAC</th>
                <th>InvoiceNo</th>
                <th>InvoiceDate</th>
                <th>SupRefNo</th>
                <th>Qty</th>
                <th>Amount</th>
                <th>CGST </th>
                <th>SGST </th>
                <th>Warranty</th>
                <th>ExpiryDate</th>
                <th>EmpCode</th>
                <th>EmpName</th>
                <th>Facility</th>
            </tr>
        </thead>
    </table>
  
        <script>
          $(document).ready(function(){
              $('#customersTable').DataTable({
                   dom: 'Bfrtip',
                  "processing":true,
                  "ajax":"exportdb.php",
                  "columns":[
                      {data:'Vendor'},   
                      {data:'ProductCode'}, 
                      {data:'Code'},
                      {data:'DeviceType'},   
                      {data:'Description'},   
                      {data:'HSNSAC'},   
                      {data:'InvoiceNo'},   
                      {data:'InvoiceDate'},   
                      {data:'SupRefNo'},   
                      {data:'Qty'},   
                      {data:'Amount'},   
                      {data:'CGST'},   
                      {data:'SGST'},   
                      {data:'Warranty'},   
                      {data:'ExpiryDate'},   
                      {data:'EmpCode'},   
                      {data:'EmpName'},   
                      {data:'Facility'}
                  ],   
                  buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
                      });
          });
        </script>
        
    </body>
</html>

 

