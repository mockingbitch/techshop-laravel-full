<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style='margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tohoma";
        box-sizing: border-box;
        -moz-box-sizing: border-box;'>

<h1 align="center">Xác nhận đơn hàng</h1>
<h3 align="center"> Cảm ơn {{$customer->customerName}} đã mua sắm tại TechShop</h3>
<div id="page" class="page" style="width: 21cm;
        overflow:hidden;
        min-height:297mm;
        padding: 2.5cm;
        margin-left:auto;
        margin-right:auto;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
    <div class="header">
{{--        <div class="logo"><img src="../images/logo.jpg"/></div>--}}
        <div class="company" style=" padding-top:24px;
        text-transform:uppercase;
        background-color:#FFFFFF;
        text-align:right;
        float:right;
        font-size:16px;">Cửa hàng TechShop</div>
    </div>
    <br/>
    <div class="title" style="text-align:center;
        position:relative;
        color:#0000FF;
        font-size: 24px;
        top:1px;">
        HÓA ĐƠN THANH TOÁN
        <br/>
        -------oOo-------
    </div>
    <br/>
    <br/>
    <table class="TableData" style=" background:#ffffff;
        font-size: 11px;
        width:100%;
        border-collapse:collapse;
        font-family:Verdana, Arial, Helvetica, sans-serif;
        font-size:12px;
        border:thin solid #d3d3d3;">
        <tr style=" height: 24px;
        border:thin solid #d3d3d3;">
            <th style="background: rgba(0,0,255,0.1);
        text-align: center;
        font-weight: bold;
        color: #000;
        border: solid 1px #ccc;
        height: 24px;
    }">STT</th>
            <th style="background: rgba(0,0,255,0.1);
        text-align: center;
        font-weight: bold;
        color: #000;
        border: solid 1px #ccc;
        height: 24px;
    }">Tên</th>
            <th style="background: rgba(0,0,255,0.1);
        text-align: center;
        font-weight: bold;
        color: #000;
        border: solid 1px #ccc;
        height: 24px;
    }">Đơn giá</th>
            <th style="background: rgba(0,0,255,0.1);
        text-align: center;
        font-weight: bold;
        color: #000;
        border: solid 1px #ccc;
        height: 24px;
    }">Số lượng</th>
            <th style="background: rgba(0,0,255,0.1);
        text-align: center;
        font-weight: bold;
        color: #000;
        border: solid 1px #ccc;
        height: 24px;
    }">Thành tiền</th>
        </tr>
        @php $subtotal = 0; @endphp
            @foreach($carts as $cart)
                <tr style="padding-right: 2px;
        padding-left: 2px;
        border:thin solid #d3d3d3;">
                <td style="padding-right: 2px;
        padding-left: 2px;
        border:thin solid #d3d3d3;
        text-align:center;
        width: 10%;" >{{$cart['id']}}</td>
                <td class="cotTenSanPham" align="center" style="padding-right: 2px;
        padding-left: 2px;
        border:thin solid #d3d3d3;  text-align:left;
        width: 40%;">{{$cart['productName']}}</td>
                <td class="cotGia" style="padding-right: 2px;
        padding-left: 2px;
        border:thin solid #d3d3d3;
 text-align:right;
        width: 120px;">{{$cart['productPrice']}}</td>
                <td class="cotSoLuong" style="padding-right: 2px;
        padding-left: 2px;
        border:thin solid #d3d3d3;
 text-align: center;
        width: 50px;" align='center'>{{$cart['quantity']}}</td>
                <td class="cotSo" align="center" style="padding-right: 2px;
        padding-left: 2px;
        border:thin solid #d3d3d3;
text-align: right;
        width: 120px;">@php echo $total = $cart['quantity']*$cart['productPrice']; @endphp</td>
                </tr>
                @php $subtotal += $total; @endphp
            @endforeach
        <tr style="padding-right: 2px;
        padding-left: 2px;
        border:thin solid #d3d3d3;">
            <td colspan="4" class="tong" style=" text-align: right;
        font-weight:bold;
        text-transform:uppercase;
        padding-right: 4px;">Tổng:</td>
            <td class="cotSo">@php echo number_format(($subtotal),0,",",".")@endphp Đ</td>
        </tr>
    </table>
{{--    <div class="footer-left"> Cần thơ, ngày 16 tháng 12 năm 2014<br/>--}}
{{--        Khách hàng </div>--}}
{{--    <div class="footer-right"> Cần thơ, ngày 16 tháng 12 năm 2014<br/>--}}
{{--        Nhân viên </div>--}}
    <div class="footer-right"> Đây là tin nhắn tự động. Vui lòng không trả lời. </div>
</div>
</body>
</html>
