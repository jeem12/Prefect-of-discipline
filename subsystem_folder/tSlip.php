<script type="text/javascript">
window.onload = function() {
    window.print();
};
window.onafterprint = function() {
    history.go(-1);
};
</script>

<?PHP
$id = $_POST['id'];
$subject = $_POST['f5-subject'];
$teacher = $_POST['f5-teacher'];
$time = $_POST['f5-time'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admission Slip (TARDY)</title>

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
        width: 663px;
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

    p.footerG {
        display: flex;
        justify-content: left;
        font-size: 13px;
        text-decoration: overline;
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
            height: 600%;
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

        .invoice_wrapper .body .main_table .row {
            display: flex;
            border-bottom: 1px solid var(--secondary);
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
            font-size: 10px;
            font-family: 'Bodoni MT Black', sans-serif;
        }

        .date {
            display: flex;
            justify-content: end;
            margin-right: 10px;
            margin-bottom: 50px;
            position: relative;
            bottom: 50px
        }

        .content {
            position: relative;
            bottom: 80px;
        }

        p.greet {
            display: flex;
            justify-content: start;
        }

        p.c-content {
            text-indent: 20%;
        }

        p.footerG {
            display: flex;
            justify-content: left;
            font-size: 13px;
        }

        .head {
            float: right;
            position: relative;
            bottom: 100px;
        }

        p.teacher-sig {
            text-decoration: overline;
        }

        .p10 {
            font-size: 17px;
            display: flex;
            justify-content: center;
        }
        .footer{
            position: relative;
            bottom: 20px;
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
                        <p class="bold name">(TARDY)</p>
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
                        <p>Course/Strand & Section: <u><strong><span
                                        style="text-transform: uppercase;"><?= $row['course'] . ' ' . $row['section']?></span></strong>
                                </span></u></p>
                        <br>
                        <p class="bold p10"> KINDLY ADMIT THIS STUDENT IN YOUR CLASS</p>
                        <br>
                        <p>Subject : <u><strong><span><?= $subject?></span></strong></u></p>
                        <p>Teacher : &nbsp;<u><strong><span><?= $teacher ?></span></strong></u></p>
                        <p>Time Arrived : &nbsp;<u><strong><?= $time ?><span></span></strong></u></p>
                        <br><br>
                        <p>Noted and recorded by:</p>
                        <br><br><br>
                        <p class="footerG">Adviser's Signature over Printed Name</p>
                    </div>


                    <?php
                        }
                    }
                    ?>

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