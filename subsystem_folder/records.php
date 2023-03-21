
  
 
 <?php include('../partials/head.php'); ?>

 


  <!-- ======= Header ======= -->
  <title>Records - PODMS</title>
  <?php include('../partials/header.php'); ?>

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->

  <?php include('../partials/sidebar.php'); ?>

    <!-- End Sidebar-->

    <script>

var x = document.getElementById('mod4')
x.className = "active";

var y = document.getElementById('pod')
y.className = "nav-link ";

var h = document.getElementById('components-nav')
h.className = "nav-content collapse show";

</script>

<div class="preloader-wrapper">
    <!-- <img src="assets/img/bcp-olp-logo-mini2.png" alt="Preloader Logo"> -->
    <div class="text-center">
  <div class="spinner-border text-light" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
</div>

  <main id="main" class="main" >

  <div class="pagetitle">
      <h1>Records</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Profiling</li>
          <li class="breadcrumb-item active">Records</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->



	<!-- MAIN CONTENT -->
    <br><br><br>
<!-- VIEW MODAL -->

<div class="modal fade" id="viewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">View</h1>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<!-- TABLE -->
        <div class="container" id="table">
    <div class="row">
    <div class="pagetitle">
    <h1 >Profiled Record</h1>
</div>
        <table id="myTable1" class="table table-striped nowrap" style="width:100%">
        <div class="col-lg-auto">

                        <thead>
                            <tr>
                                <th>DATE CREATED</th>
                                <th data-priority="1">ID NUMBER</th>
                                <th>FULLNAME</th>
                                <th>SECTION</th>
                                <th>COURSE</th>
                                <th>INCIDENT DESC</th>
                                <th>INCIDENT DATE</th>
                                <th>INCIDENT TIME</th>
                                <th>VIOLATION <br>LEVEL</th>
                                <th>VIOLATION</th>
                                <th>SANCTION</th>
                                <th>IMAGE</th>
                                <th data-priority="2">STATUS</th>
                            </tr>
                        </thead>
                       
                    </div>
                    </table>

    </div>
</div>

<br>
<hr>
<br>


<!-- Claimed TABLE -->
<div class="container" id="table">
  <div class="row">
  <div class="pagetitle">
    <h1 >Claimed Items</h1>
</div>
      <table id="myTable2" class="table table-striped nowrap" style="width:100%">
      <div class="col-lg-auto">

                      <thead>
                          <tr>
                              <th>ID NUMBER</th>
                              <th>FULL NAME</th>
                              <th>SECTION</th>
                              <th>COURSE</th>
                              <th>ITEM NAME</th>
                              <th>ITEM DESCRIPTION</th>
                              <th data-priority="1">STATUS</th>
                          </tr>
                      </thead>
                     
                  </div>
                  </table>

  </div>
</div>

  </main><!-- End #main -->



  <!-- ======= Footer ======= -->

              <?php include ('../partials/footer.php'); ?>

  <!-- End Footer -->


    <!-- <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script> -->



<!-- DATATABLE SCRIPT -->



<script>
 var myTable1 = '';
$(function() {
    // draw function [called if the database updates]
    function draw_data() {
        if ($.fn.dataTable.isDataTable('#myTable1') && myTable1 != '') {
            myTable1.draw(true)
        } else {
            load_data();
        }
    }
    

    function load_data() {
        myTable1 = $('#myTable1').DataTable({
            dom: '<"row"B>flr<"py-2 my-2"t>ip',
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "../assets/php/r_getData.php",
                method: 'POST'
            },
            columns: [
                {
                    data: 'date',
                    className: 'text-center',
                    defaultValue: 'No data available'

                },
                {
                    data: 'complained_id_number',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'fullname',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'complained_section',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'complained_course',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'inci_desc',
                    className: 'text-center word-wrap',
                    defaultValue: 'No data available'
                },
                {
                    data: 'inci_date',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'inci_time',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'violation_level',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                {
                    data: 'violation',
                    className: 'text-center mb-2',
                    defaultValue: 'No data available'
                },
                {
                    data: 'sanction',
                    className: 'text-center mb-2',
                    defaultValue: 'No data available'
                },
                {

                    data: 'image_data',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
                // {
                //     data: 'image',
                //     className: 'text-center',
                //     defaultValue: 'No data available'
                // },
                {
                    data: 'status',
                    className: 'text-center',
                    defaultValue: 'No data available'
                },
            ],
            responsive: {
                        details: {
                            display: $.fn.dataTable.Responsive.display.modal( {
                                header: function ( row ) {
                                    var data = row.data();
                                    return 'Details for '+data.complained_last_name+', '+data.complained_first_name;
                                }
                            } ),
                            renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                        }
                                            

                    },
            buttons: [
            'copy',
            {
                extend: 'pdfHtml5',
                customize: function ( doc ) {
                    doc.content.splice( 1, 0, {
                        margin: [ 0, 0, 0, 0 ],
                        alignment: 'center',
                        image: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAMAAAC5zwKfAAAC/VBMVEVHcEwWGR8BAQH7xycKCgoGBgYBAQGlk0sCAwQNDQ0MCgcBAQAYFQsDAwMEBAT1yE4FBQUGBgcGBgYEBAQBAQEEBAT6yyoCAgIBAQH9xxz9yBvn6Or6wiT7yST9yBgGBgYICQuGbBD8xx78zzQEBAT4tSPxxSj8yB79yRv6xSYDAwNWRQn80Dn8ySBcia5rgZf7vx/7yyw3WYNvjbL8yiH7yh7lrxn6vBj0rR7Fy89AQUJTeq9zUgkpHAZIapt9ZRT6wSvg4OHckxLDrlCqnVUjMEAoPVojNVX09vf/xxQAAAD/yBb+xxb/yRNJeKpLfaz/yxtNhrBTn7tPj7MCAgFVo7xSlbZRkrYLDA1Vp7/+yBtMgq0GBwhOibL+xBb4tBcTExNPjLP/yxRSm7mtrKwUIy1Hb6azs7P7vhb0rBb/zSSdm54ZGRmjo6OJiYhGJt9Pi7JOT00OGSF9fn2RkZIZKjlfX1/9zjNSmLggISKNjY0sLS1naWnFxMUKEhlZWFj6uhqXl5d3d3dwWKc8aIVBRUZWPNExWW8mJiZmn6mEhIPnuS0sS2VxcXHz9PRCcJryyEM8PD0jP1JWPMf8wh03WHq7u7shNkpHdqFWb3g0NDRMjappfoY9Yo1FNgi0nHn6yCFKXGtdQcJ+atd6mK+ms7xXrcMdM0FUdpD8dR/Mnxl0lJ1lT8hfR9NBaJnQt0JKgqWaoqdinLNtWNaYgZD80k+leXN/VZ/bwpVCb5IkHgbd3d22jRMWEQOOrIVEdIRFfpV+bJ31wCDkw0/VokG4ob5iT7fNt7ZSlanTtX81VGLYuGNMip3/NSSTftP11ILnxnXfrjxqRbftuxXR1dmKl6C7vGN1nZKmkIalrW+FjZK6jVw1Kwf+nRg+Y5ORaIz/88b9ih1/asHitR3dvlPAq3yKrcW+y9p4ckwpQVxgipi5r1XOsqCfisDFqGyfiCnzzF3XwXaikNaOoKyAr5exnkypgVTRVk5WaVI4OybBclWybGz24ayUlGwAAQEQIHTqAAAASXRSTlMACtg0HXbhBf4TM/cor7sQWj1mge5xScrQz9v+b1b7TKT9rx+S/v7s9H+b/hiL/PbCKf3+pZ2+7Nx25Ujt37hoo5Xig1/rnGau+ExWXwAACqJJREFUWMPtmHdYU2cXwAFZRhkCslWggLhXd/v128N7kxAgYAghBEgIJCQQMoCQMBLC3htFBERBBMUBinvvPVrraLVqp937Gzw9701AgsTnq/JPn6fnH27Ivb+cfc59zcx+l9/ltyNTJxln5eY8fRJxjm50DLOwspwsnP00jBALq0nQcrqVmy02Ktb+JJvnUm7OfGsCxLC3ep1BXLnYOT6r5ZZznN31trJ0oj+/5sWVcIhPthb+c34t02YqycnHwuA5joTrpV6y+MNre7k5yfp/TbPwcSJN/T9RliRHZzt3F4PT6JkqtZdalZkfmxrx4UfX+Koig0fpLu4+VnNIllPNzW1MuXW6s/98Ozdrl8dBSJbk7fXi53CwsujU2LCwiBaZukEpSaaPfG/rYu3uZm9nN2Ni4MxhbIwwiiR51yq8hNUsDOvqB+Cq1DIWK6ucq+aXSIoYY28ddjIBHPmekbxaoWzwqvD66MNu9GRaZXR0alhUDWhGxzg6KbeBL9RIspIZI6rONA1krM6RitR7vSr2NpQsWRzc1IWCXB8dEh3b3zViAJ2zWiEW8fncPKlCR+hqNTHQCr4qr6jYe+2jDZ26ZFb2e9TgerAXqwkJiY7ul481ErPlFFXnlIuFIlHO04HSCkXW2oSERjC8jEqtTAN9eEPdQ93dXZmZDA6LYeRmjMWpFipMm6zXsPqThASkGG9L5dAnumqVsn0JP08k5Yj4mjypUCfJ4XBYvJozhYVnangMLFkGGg4/Baiq6N6SsIUHzjzTcvNmOV+s4Ndf5/P50mQ+VymS8hVcoUYpvd59Lj58Y2TouUKdUvL0KKsqVoDBjOQcqZgrayjnqnT8/CUNeTIdQ8SX5kkbZFxFSR4k483mlkOnIjduLEZAuqNpoKJixXv1OiHAVGqFWiWUtTfnN51JhgzJzEzOlLQ0y8rFYm67qHmbWNTSfCq8WKyDCJkAOoHHX//XkpYGkVqtVGtkWZIsTmFTU/BQtiGyjYfWhB06dLC5+SBXw5V5cZXCg8XiaijtORMDHaHm7Bzeat+rAd+p2jmQtjXBwVGf6m63trYuaG39aXNxREZ8fHxGxJruZpVYLVarDhWXrAagidKbg4A2Pgxhjry9fi3kHf1n6bufbS29f2xwl3bXYGlbYOnWz9498M720NDw+HMHm8tF7ZEE0MVEI58B/crexh9LbnwvIaFsf6vvvlJB3Epy3LErKUiuHEtPF1BWMgMfvH2gODwyMv5c87mNxSVZMBpMtEcS9Cw3c2cse3lCU8uXWy/tPnn8+NcCyuUOgA3eGrzSe+nu3Ys0ysDJR5eOAjNyY2Tkxs3SInjIRGu0hHbvbm6VXd8tfrj75Dfre0909O04i7+fkrKrlBJHKd01OFBxV7Ay/ULfjgvHd3/97junEDATzDI3MUHckfb/bP/f10A7od35xYOHvQU3SjtSao/F4ThOObbrv3cHcMpX6wu0h0/0rj9+9suf8luk0MTnm+rW9jDWpv91K3ng84KOh+m0ONrF9bXrLhekaI/gSKrUFwNW4pRLO2rXpT9Yd7hj/en7vh9rAOhsqv/Px+gLXg7C8bjTffDMwMWT3/Rpj16uTdHW4blswcDFnaWb7uG0R30nHlAotKobtb1n40q/32OyUKCY9/texcE6StUHBR8cv7CjV7vzKO2INqWj9M75Tenpl99v23T+juB4gbZqpf6mnQIKuafVVBqamf1xH5mwjSwQFvSdOLzubJUAx5m3UlLev3d+0517P/646TyALwAHuTT984LD6TiZctXX5D4xDx8RwmZa3Ep0fQSF+d/Hbu36z5179+7FfAV+RV9QBi4gIMjsWaaAs2brNTSYY4BTjgxCJtZeGTwSF4fHxe3e0cH9Cn5MsBuCQ0M3BE0xwXOYN5tpgIDN2ir4C5owmW2Bl2/98EPP1UQ28NIfoZT5/NHuk5A9VRS4hzl3YqDNrKUBTOaozb3a0wJam75432n5ec+ePbdbF7zpu+/+kfSjX+zU9u7oq9WeJRRk1r3q7fAkb9mfAmKSEkedeOnh0dIe348/7Q8ODg6plGN0OhqZdBZr/+0FX95Pr/rixo11VTT9vblJAUtdx20PDt6edbkISNbrSGvr8b29X15JhfYVtTZtzPjn1RQe/PTA20cFAhquv5cckxSTO3fRC0bq+c1mJybGJOUKkNFMWuC+BXvoMKaAFxy1PHt0yPEKD4XFQ/MKDS0+sDWQRiOITAAmJrI9Zj1W0tWDzGbXgYp6YOD3ErQTpK2lUoFYOLJ1sLry12RkQIcNBWRkZPh3bwfSmHB/W0xMbiKbTQ56adlIcOeSAUhm1wUEtDFpV1/+29/RuqTnUctYhv4vz0+NADEAwwEZ+d3WNkC2BeTWsYFMJnsSwVn4Yhtck8k4uS4mgEnuWeBjbj/CozbVGFaxtMKQVWGrVhkDt5d83EPG62JykZ8Q0QMlkI3rS3PhAxMBk9j79mDWlk4w5tdSE2BzMOwzto1NsbDOjQdu1iTv901MTMqtI4CjgbFx9QsCJBuikrRvP4Y5WVrLYQhQqWt5hm2sMCo1dTwwPDL8Zg4da+1JgpiAhUEvjslvG1dPJpsA/uUP0ICn/mNLAihYb0iXtHxYllKf1BDNE9s3k5KSICbk2d5GmejgwSTy5uUpTnTMZcYbCSBlhvDKK0Ng/TIAMx4DwzeXMzBrkverMQTQuEO4BkGcE1+Z52BmaYFhPuZvJWxp1IeDVdMUMgqMyIgIWwMSEQoeLFZWE91/ih+RNS8aARdB4iR6uKJLZ5izpDeW692HZZdBqeiBq8L688u6eGnZ2Wm8rjMHT23WcPQj3sH7FTYb93zByGKczF6qd+p0mH12r0n0PF5+sAEY25/fmGaLapqo6uFhnQwUtNPPO1dPtnFXnBKEk/1GfsEf7BSL0EsOq7EyWA+Mjqrn2RrtmhxNOevxUjPFA8dfGgP0JuN+C0ffLkDFIj4sptmFqJYRMCpfbozDMIksa+xABqLnwsdZ40deOsYDzmit42bJ9bUMwKFGxjgcViRT0I22rikes11HP7zg6Tm26VrCwGfItjVRCWBU5SfZ43EYQ1rCQdkw1m2eix7PkrmuxnsdbE1Z3E6C11SW9gQOG84RwtJlTTKeSH6jfXveIuN2a+6DnMRfQQ1uqufRn+Rh1aKc4ScWBhvvZSNX8xaOf+uD7GZpNixeLmdNgMMy8zQMVKHjh9xIHBY+ObUcYbPjKLdljsXQWZDRcjkvLVMpg4XGZYbpV9oJXk+d6UgRMWfMLKkf6l8TFhERdmqbEHZC25lPeUeeaLWzQ7kh0hMZ8rKhqNhVqNlEZGzfIIQMxOab/9oDAjd4KkuozMSya/Kjokf7IfAgwJj9rz94ILkT+Stsr9Q3h1QCuH1DHtLP7VnOW2ZYoHf6kg0rCGA0AezcIEaBsiA907EIQWSouJ0hUQYNO7ka5FSLGc940EJCfmRJRN8uBg1jY7d/K1KgonYjmT2rTEcDdXi1eFtnavTizm3KalQ29s9zXjXVHx3ecHJk1zdfz1OgU5tp/s938GfjhM6qhotUJaospJ6103OdfRGOtJtGnDGgDjvNjmT2/GLu5G6oPzdHc7NJEUtnC2wSDyQJ5Ey7ycSZ6iC/UfkFUbvyvvOtJZEAAAAASUVORK5CYII='
                    } );
                },
                messageTop: 'PDF created by Prefect of Discipline.',
                orientation: 'landscape',
                pageSize: 'A4',
                title: 'PODMS PDF'
                
            },
            {
                extend: 'excelHtml5',
                autoFilter: true,
                sheetName: 'Exported data',
                title: 'PODMS Excel'
            }, 
            {
                extend: 'print',
                customize: function(win) {
                    $(win.document.body).css('font-size','10pt');

                    $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');

                    $(win.document.body).find('h1')
                        .css('text-align', 'center')
                        .css('font-size', '16pt')
                        .css('margin-top', '20px')
                        .css('margin-bottom', '20px');

                    $(win.document.body).find('table')
                        .css('width', '100%')
                        .css('table-layout', 'auto');

                    $(win.document.body).find('table')
                        .addClass('display')
                        .addClass('table-bordered')
                        .addClass('table-striped')
                        .css('border-collapse', 'collapse')
                        .css('margin-right', '10px')
                        .css('width', '100%');

                    $(win.document.body).find('table th')
                        .css('font-weight', 'bold')
                        .css('text-align', 'center')
                        .css('word-wrap', 'break-word')
                        .css('vertical-align', 'middle')
                        .css('border', '1px solid black');

                    $(win.document.body).find('table td')
                        .css('text-align', 'center')
                        .css('word-wrap', 'break-word')
                        .css('vertical-align', 'middle')
                        .css('border', '1px solid black');

                    $(win.document.body).find('table tr:nth-child(even)')
                        .css('background-color', '#f2f2f2');

                    $(win.document.body).find('table tr:nth-child(odd)')
                        .css('background-color', '#ffffff');

                    // Set page orientation to landscape
                    $(win.document.body).find('table')
                        .css('transform-origin', 'top left')
                        .css('width', 'auto');

                    // Set page size to A4
                    $(win.document.body).css('width', '320mm');
                    $(win.document.body).css('height', '210mm');
                    $(win.document.body).css('margin', '0px');
                },
                title: 'Prefect of Discipline'
        }

             
        ],
            columnDefs: [
                        {
                            targets: 12,
                            render: function(data, type, row, meta) {
                                if (data == 1) {
                                    return '<p class="badge text-bg-danger text-wrap text-center"> For Investigation</p>';
                                } else if (data == 2) {
                                    return '<p class="badge text-bg-info text-wrap text-center">On duty</p>';
                                } else if (data == 3) {
                                    return '<p class="badge text-bg-success text-wrap text-center">Cleared</p>';
                                } else {
                                    return '<p class="badge text-bg-warning text-wrap text-center">Undefined Status</p>';
                                }
                            }
                        },
            ],
            initComplete: function(settings) {
                $('.paginate_button').addClass('p-1')
            }
        });
    }
    //Load Data
    load_data()

 
});
</script>


<script>
var myTable2 = '';
$(function() {
  // draw function [called if the database updates]
  function draw_data() {
      if ($.fn.dataTable.isDataTable('#myTable2') && myTable2 != '') {
          myTable2.draw(true)
      } else {
          load_data();
      }
  }
  

  function load_data() {
      myTable2 = $('#myTable2').DataTable({
          dom: '<"row"B>flr<"py-2 my-2"t>ip',
          "processing": true,
          "serverSide": true,
          "ajax": {
              url: "../assets/php/c_r_getData.php",
              method: 'POST'
          },
          columns: [
            {
                  data: 'id_number',
                  className: 'text-center',
                  defaultValue: 'No data available'

              },
              {
                  data: 'fullname',
                  className: 'text-center',
                  defaultValue: 'No data available'

              },
              {
                  data: 'section',
                  className: 'text-center',
                  defaultValue: 'No data available'
              },
              {
                  data: 'course',
                  className: 'text-center',
                  defaultValue: 'No data available'
              },
              {
                  data: 'item_name',
                  className: 'text-center',
                  defaultValue: 'No data available'
              },
              {
                  data: 'item_desc',
                  className: 'text-center',
                  defaultValue: 'No data available'
              },
              {
                  data: 'status',
                  className: 'text-center',
                  defaultValue: 'No data available'
              },
          ],
          responsive: {
                        details: {
                                display: $.fn.dataTable.Responsive.display.modal( {
                                        header: function ( row ) {
                                            var data = row.data();
                                            return 'Details for '+data.last_name+', '+data.first_name;
                                        }
                                    } ),
    
                                    renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                    }

                },
          columnDefs: [
                      {
                          targets: 6,
                          render: function(data, type, row, meta) {
                             if (data == 3) {
                                  return '<p class="badge text-bg-success text-wrap text-center">Claimed</p>';
                              } else {
                                  return '<p class="badge text-bg-warning text-wrap text-center">Undefined Status</p>';
                              }
                          }
                      },
          ],
          "order": [
              [0, "asc"]
          ],
          initComplete: function(settings) {
              $('.paginate_button').addClass('p-1')
          }
      });
  }
  //Load Data
  load_data()


});


</script>



</html>