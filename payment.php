<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
    <link rel="icon" href="images/fox.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css">
    <?php
        include('bidacction.php');
        $result=explode(",",$_GET["jid"]);
        $item=jobdetails($result[0]);
        $itemdetails=$item->fetch_assoc();
    ?>
<script>
    function senddata()
    {   
            var falg=2;
            if(document.forms["payment"]["iname"].value=="")
			{
                flag=1;
                alert(flag);

                document.getElementById('iname').style.borderColor="red";
            }
            if(document.forms["payment"]["totalamount"].value=="")
			{
                flag=2;
                alert(flag);

                document.getElementById('totalamount').style.borderColor="red";

            }
            if(document.forms["payment"]["cardNumber"].value=="")
			{
                flag=3;
                alert(flag);

                document.getElementById('cardNumber').style.borderColor="red";
            }
            if(document.forms["payment"]["cvv"].value=="")
			{
                flag=4;
                alert(flag);

                document.getElementById('cvv').style.borderColor="red";

            }
            if(document.forms["payment"]["exmonth"].value=="")
			{
                flag=5;
                alert(flag);

                document.getElementById('exmonth').style.borderColor="red";

            }
            if(document.forms["payment"]["exyear"].value=="")
			{
                flag=6;
                alert(flag);

                document.getElementById('exyear').style.borderColor="red";

            }
            if(document.forms["payment"]["owner"].value=="")
			{
                flag=7;
                alert(flag);

                document.getElementById('owner').style.borderColor="red";

            }
            // if(flag==1)
            // {
            //     return false;
            // }
            // else{
            $(document).ready(function(){
                  var form_data = new FormData();   
                  form_data.append('payment',"done");
                  form_data.append('iname',document.forms["payment"]["iname"].value);
                  form_data.append('oname',document.forms["payment"]["owner"].value);
                  form_data.append('userid',<?php echo $result[2];?>);
                  form_data.append('itemid',<?php echo $result[0];?>);
                  form_data.append('amount', document.forms["payment"]["totalamount"].value);
                  form_data.append('cnumber',document.forms["payment"]["cardNumber"].value);
                  form_data.append('month',document.forms["payment"]["exmonth"].value);
                  form_data.append('year', document.forms["payment"]["exyear"].value);
                  form_data.append('cvv', document.forms["payment"]["cvv"].value);
                $.ajax({
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: "POST",
                    url:"bidacction.php",
                    data:form_data, 
                    success:function(data) {
                        alert(data);
                        if(data=="done")
                        {
                            window.location.replace("jobstatus.php?jid=<?php echo $result[0]."&st=2";?>");
                        }
                    // alert(data);
                    }
                });
            });
            // }
            }
</script>
     
</head>

<body>
    <div class="container-fluid">
        <div class="creditCardForm">
            <div class="heading">
                <h1>Confirm Pay</h1>
            </div>
            <div class="payment">
                <form name="payment" id="payment" method="post" onsubmit="return senddata()">
                    <div class="form-group owner">
                        <label for="iname">Item Name</label>
                        <input type="text" class="form-control" value="<?echo $itemdetails["name"];?>" id="iname" readonly>
                    </div>
                    <div class="form-group owner">
                        <label for="totalamount">Paid Amount</label>
                        <input type="text" class="form-control" value="<? echo $result[1];?>" id="totalamount" readonly>
                    </div>
                    <div class="form-group owner">
                        <label for="owner">Owner</label>
                        <input type="text" class="form-control" id="owner">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select id="exmonth">
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select id="exyear">
                            <option value="16"> 2016</option>
                            <option value="17"> 2017</option>
                            <option value="18"> 2018</option>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                            <option value="22"> 2022</option>
                            <option value="23"> 2023</option>
                            <option value="24"> 2024</option>
                            <option value="25"> 2025</option>
                            <option value="26"> 2026</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="assets/images/visa.jpg" id="visa">
                        <img src="assets/images/mastercard.jpg" id="mastercard">
                        <img src="assets/images/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        <input type="submit" class="btn" id="submit" value="Confirm">
                        <!-- <button type="submit" class="btn btn-default" id="submit">Confirm</button> -->
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
