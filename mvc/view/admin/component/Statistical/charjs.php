<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách users</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<body>
    <span id = "text-date"></span>
    <div id="chart" style="height: 250px;"></div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    $(document).ready(function (){
        thongke();
       var char =  new Morris.Area({
        element: 'chart',
        xkey: 'year',
        ykeys: ['date','sales','quantity','order',''],
        labels: ['Đơn hàng','Doanh Thu','số lượng','mã đơn hàng','kim nghạch'],
        });
       function thongke(){
           var text = '365 ngày qua';
           $.ajax({
               url:"showchart",
               method:"POST",
               dataType:"JSON",

               success:function (data) {
                   char.setData(data);
                   $("#text-date").text(text);
               }
           });
       }
    });
    </script>
</html>