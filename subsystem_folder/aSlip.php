<script type="text/javascript">
window.onload = function() {
    window.print();
};
window.onafterprint = function() {
    history.go(-1);
};
</script>

<?PHP
if (isset($_GET['id'])) {

    $id = $_GET['id'];


}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admission Slip (ABSENT)</title>

    <style>
    /*--------------------------------------------------------------
# call Slip
--------------------------------------------------------------*/
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;400;900&display=swap');


    @font-face {
        font-family: 'Bodoni MT Black';
        src: url(../fonts/bod_blar-webfont.woff);
    }


    :root {
        --primary: #000000;
        --secondary: #3d3d3d;
        --white: #fff;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Lato', sans-serif;
    }

    body {
        background: var(--secondary);
        padding: 50px;
        color: var(--secondary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
    }

    .bold {
        font-weight: 900;
    }

    .light {
        font-weight: 100;
    }

    .wrapper {
        background: var(--white);
    }

    .invoice_wrapper {
        border: 3px solid var(--primary);
        width: 98%;
        max-width: 100%;
    }

    .invoice_wrapper .header .logo_invoice_wrap,
    .invoice_wrapper .header .bill_total_wrap {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .invoice_wrapper .header .logo_sec {
        display: flex;
        align-items: center;
    }

    .invoice_wrapper .header .invoice_sec,
    .invoice_wrapper .header .bill_total_wrap .total_wrap {
        text-align: right;
    }

    .invoice_wrapper .header .invoice_sec .invoice {
        font-size: 28px;
        color: var(--primary);
    }

    .invoice_wrapper .header .invoice_sec .invoice_no,
    .invoice_wrapper .header .invoice_sec .date {
        display: flex;
        width: 100%;
    }

    .invoice_wrapper .header .invoice_sec .invoice_no span:first-child,
    .invoice_wrapper .header .invoice_sec .date span:first-child {
        width: 70px;
        text-align: left;
    }

    .invoice_wrapper .header .invoice_sec .invoice_no span:last-child,
    .invoice_wrapper .header .invoice_sec .date span:last-child {
        width: calc(100% - 70px);
    }

    .invoice_wrapper .header .bill_total_wrap .total_wrap .price,
    .invoice_wrapper .header .bill_total_wrap .bill_sec {
        color: var(--primary);
        font-size: 20px;
    }

    .invoice_wrapper .body .main_table .table_header {
        background: var(--primary);
    }

    .invoice_wrapper .body .main_table .table_header .row {
        color: var(--white);
        font-size: 18px;
        border-bottom: 0px;
    }

    .invoice_wrapper .body .main_table .row {
        display: flex;
        /* border-bottom: 1px solid var(--secondary); */
    }

    .invoice_wrapper .body .main_table .row .col {
        padding: 10px;
    }

    .invoice_wrapper .body .main_table .row .col_no {
        width: 5%;
    }

    .invoice_wrapper .body .main_table .row .col_des {
        width: 45%;
    }

    .invoice_wrapper .body .main_table .row .col_price {
        width: 20%;
        text-align: center;
    }

    .invoice_wrapper .body .main_table .row .col_qty {
        width: 10%;
        text-align: center;
    }

    .invoice_wrapper .body .main_table .row .col_total {
        width: 20%;
        text-align: right;
    }

    .invoice_wrapper .body .paymethod_grandtotal_wrap {
        display: flex;
        justify-content: space-between;
        padding: 5px 0 30px;
        align-items: flex-end;
    }

    .invoice_wrapper .body .paymethod_grandtotal_wrap .paymethod_sec {
        padding-left: 30px;
    }

    .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec {
        width: 30%;
    }

    .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p {
        display: flex;
        width: 100%;
        padding-bottom: 5px;
    }

    .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p span {
        padding: 0 10px;
    }

    .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p span:first-child {
        width: 60%;
    }

    .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p span:last-child {
        width: 40%;
        text-align: right;
    }

    .invoice_wrapper .body .paymethod_grandtotal_wrap .grandtotal_sec p:last-child span {
        background: var(--primary);
        padding: 10px;
        color: #fff;
    }

    .invoice_wrapper .footer {
        padding: 30px;
    }

    .invoice_wrapper .footer>p {
        color: var(--primary);
        text-decoration: underline;
        font-size: 18px;
        padding-bottom: 5px;
    }

    .invoice_wrapper .footer .terms .tc {
        font-size: 16px;
    }

    .logo1,
    .logo2 {
        display: flex;
        align-items: center;
    }

    .logo1 img {
        position: relative;
        width: 42px;
        left: -19px;
    }

    .logo2 img {
        position: relative;
        width: 63px;
        right: -30px;

    }

    .title {
        display: flex;
        font-size: 20px;
        justify-content: center;
        font-family: 'Bodoni MT Black', sans-serif;
        font-weight: 900;
    }

    .sub_title {
        font-size: 8px;
        display: flex;
        justify-content: center;
    }

    .bill_total_wrap {
        margin-bottom: 30px;
    }

    .off_pod {
        font-family: 'Bodoni MT Black', sans-serif;
    }

    .name {
        display: flex;
        justify-content: center;
        font-size: 20px;
        font-family: 'Bodoni MT Black', sans-serif;
    }

    .h-pos {
        justify-content: center;
        display: flex;
    }

    .date {
        display: flex;
        justify-content: end;
        margin-right: 10px;
        margin-bottom: 50px;
    }

    p.greet {
        display: flex;
        justify-content: start;
    }



    .head {
        float: right;
    }

    p.teacher-sig {
        text-decoration: overline;
    }

    .body {
        padding: 25px;
    }

    .p10 {
        font-size: 27px;
        display: flex;
        justify-content: center;
    }

    table {
        border-collapse: collapse;
        border: 1px solid #000000;
        display: absolute;
        position: relative;
        width: 800px;
        height: 200px
    }

    .t2 {
        border-collapse: collapse;
        border: 1px solid #000000;
        display: absolute;
        position: relative;
        width: 562px;
        height: 200px
    }

    thead,
    th {
        border: 1px solid;
        height: 50px;
    }

    tbody,
    td {
        border: 1px solid;
    }

    .header {
        display: fixed;
        position: relative;
        font-size: 10px;
    }

    /* ===================================
        MEDIA PRINT
   =================================== */
    @media print {

        @page {
            margin: 0;
        }


        .wrapper {
            max-height: unset;
            box-shadow: none;
            border: 0px;
            background-color: white;
            height: 100%;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
        }

        .invoice_wrapper {
            border: 3px solid var(--primary);
            position: absolute;
            align-items: center;
            width: 98%;
            height: 50%;
            left: 10px;
            top: 10px;
        }

        .invoice_wrapper:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            background-image: url(../assets/img/POD.png);
            background-size: 500px;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            opacity: .2;
            z-index: 2;
        }

        .header {
            display: fixed;
            position: relative;
            font-size: 10px;
        }

        .invoice_wrapper .header .logo_invoice_wrap,
        .invoice_wrapper .header .bill_total_wrap {
            display: flex;
            justify-content: center;
            position: relative;
            top: 0px;
        }

        .invoice_wrapper .header .logo_sec {
            display: flex;
            align-items: center;
        }

        .invoice_wrapper .header .invoice_sec,
        .invoice_wrapper .header .bill_total_wrap .total_wrap {
            text-align: right;
        }

        .invoice_wrapper .header .invoice_sec .invoice {
            font-size: 10px;
            color: var(--primary);
        }

        .invoice_wrapper .header .invoice_sec .invoice_no,
        .invoice_wrapper .header .invoice_sec .date {
            display: flex;
            width: 80%;
        }

        .invoice_wrapper .header .invoice_sec .invoice_no span:first-child,
        .invoice_wrapper .header .invoice_sec .date span:first-child {
            width: 70px;
            text-align: left;
        }

        .invoice_wrapper .header .invoice_sec .invoice_no span:last-child,
        .invoice_wrapper .header .invoice_sec .date span:last-child {
            width: calc(100% - 70px);
        }

        .invoice_wrapper .header .bill_total_wrap .total_wrap .price,
        .invoice_wrapper .header .bill_total_wrap .bill_sec {
            color: var(--primary);
            font-size: 20px;
            position: relative;
            bottom: 40px;
        }

        .invoice_wrapper .body .main_table .table_header {
            background: var(--primary);
        }

        .invoice_wrapper .body .main_table .table_header .row {
            color: var(--white);
            font-size: 18px;
            border-bottom: 0px;
        }

        .logo1,
        .logo2 {
            display: flex;
            position: relative;
            bottom: 17px;
            align-items: center;
        }

        .logo1 img {
            position: relative;
            width: 42px;
            left: -3px;
        }

        .h-pos {
            justify-content: center;
            display: flex;
        }

        .logo2 img {
            position: relative;
            width: 63px;
            right: -3px;

        }

        .title {
            display: flex;
            font-size: 14px;
            justify-content: center;
            font-family: 'Bodoni MT Black', sans-serif;
            font-weight: 900;
            color: #000000;
        }

        .sub_title {
            font-size: 8px;
            display: flex;
            justify-content: center;
        }


        .bill_total_wrap {
            margin-bottom: 30px;
        }

        .off_pod {
            font-size: 15px;
            font-family: 'Bodoni MT Black', sans-serif;
        }

        .name {
            display: flex;
            justify-content: center;
            font-size: 15px;
            font-family: 'Bodoni MT Black', sans-serif;
        }

        .date {
            display: flex;
            justify-content: end;
            margin-right: 10px;
            /* margin-bottom: 50px; */
            position: relative;
            bottom: 80px
        }

        .content {
            position: relative;
            bottom: 150px;
            font-size: 10px;
        }

        p.footerG {
            display: flex;
            justify-content: left;
            font-size: 13px;
            text-decoration: overline;
            position: relative;
            bottom: 5px;
        }

        .head {
            float: right;
            position: relative;
            bottom: 235px;
        }


        .p10 {
            font-size: 17px;
            display: flex;
            position: relative;
            bottom: 15px;
            justify-content: center;
        }

        .table {
            border-collapse: collapse;
            border: 1px solid #000000;
            position: relative;
            font-size: 10px;
            bottom: 30px;
            right: 30px;
            width: 350px;

        }

        th {
            height: 20px;
        }

        td {
            height: 20px;
        }


        .t2 {
            border-collapse: collapse;
            border: 1px solid #000000;
            position: relative;
            font-size: 10px;
            bottom: 30px;
            right: 30px;
            width: 350px;
        }


    }
    </style>


</head>

<body>

    <div class="wrapper" id="capture">
        <div class="invoice_wrapper">
            <div class="header">
                <div class="logo_invoice_wrap">
                    <div class="logo1">
                        <img src="../assets/img/00.png" alt="bcp logo">
                    </div>
                    <div class="title_wrap">
                        <p class="title bold">BESTLINK COLLEGE OF THE PHILIPPINES</p>
                        <p class="sub_title">762 Topaz cor. Sapphire St, Millionaires Village, San Agustin, Novaliches,
                            Quezon City</p>
                    </div>
                    <div class="logo2">
                        <img src="../assets/img/POD.png" alt="pod logo">
                    </div>

                </div>
                <div class="bill_total_wrap">
                    <div class="bill_sec">
                        <p class="bold off_pod">OFFICE OF THE PREFECT OF DISCIPLINE</p>
                        <p class="bold name">ADMISSION SLIP</p>
                        <p class="bold name">(ABSENT)</p>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="main_table">
                    <div class="date">
                        <p>Date: &nbsp;<u> <strong>
                                    <?= date("m-d-Y"); ?>
                                </strong></u> </p>
                    </div>

                    <?php
                    include "../assets/php/db_connect.php";
                    $query = "SELECT * FROM `regist_stud_list` WHERE `id` = $id";
                    $query_run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                        while ($row = mysqli_fetch_array($query_run)) {
                            ?>

                    <div class="content">
                        <p>Student's name: &nbsp; <strong><u><span style="text-transform:uppercase;">
                                        <?= $row['lastname'] . ', ' . $row['firstname'] ?>
                                    </span></u></strong></p>
                        <br>
                        <p>Course/Strand & Section: <u><strong><span style="text-transform: uppercase;">
                                        <?= $row['course'] . ' ' . $row['section'] ?>
                                    </span></strong> </span></u></p>
                        <br>
                        <p class="bold p10"> KINDLY ADMIT THIS STUDENT IN YOUR CLASS</p>
                        <br>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <table class="table">
                                        <thead style="border: 1px solid; height: 32px;">
                                            <tr>
                                                <th>Requirement Presented</th>
                                                <th>REMARKS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Excuse letter from Parent/Guardian</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Valid ID of Parent/Guardian (photocopy)</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Medical Certificate</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col">
                                    <table class="t2">
                                        <thead>
                                            <tr>
                                                <th>Date of Absence/s</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>

                        </div>

                        <?php
                        }
                    }
                    ?>

                        <p class="footerG GG">Adviser's Signature over Printed Name</p>
                    </div>



                </div>
            </div>
            <div class="footer">
                <div class="head">
                    <p class="h-name"><strong><u>Mr. Benildo E. Concepcion</u></strong></p>
                    <span class="h-pos">Prefect Of Discipline</span>
                </div>
                <br><br><br><br>

            </div>
        </div>
    </div>


</body>

</html>