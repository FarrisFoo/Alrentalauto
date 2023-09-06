<!DOCTYPE html>
<html>
<head>
    <title>Booking Invoice</title>
</head>
<body>
    <h2>Invoice</h2>
    <table style="width:100%">
        <tr>
            <th><p style="font-size:12px">ALCAR RENTAL, LOT 4, INKUBATOR BUKIT DAHLIA, 81700 PASIR GUDANG,<br>MALAYSIA</p></th>
            <th><img src="{{ asset('assets/images/logo-icon.png') }}" height="100"></th>
        </tr>
    </table>
    <div style="padding:20px;"></div>
    <table style="width:100%">
        <tr>
            <th style="text-align: left;">Bill To :</th>
            <th style="text-align: right;">Invoice No. :</th>
            <th style="width: 20%;text-align: left;font-size:12px;">00{{ $bookingData->id }}</th>
        </tr>
        <tr>
            <th style="text-align: left;font-size:12px;">{{ $bookingData->customer->name }}</th>
            <th style="text-align: right;">Issue Date :</th>
            <th style="width: 20%;text-align: left;font-size:12px;">{{ $bookingData->created_at }}</th>
        </tr>
    </table>
    <div style="padding:50px;"></div>
    <table style="width:100%">
        <tr style="background-color: black; color:white">
           <th style="text-align: left;">Description</th>
           <th >Qty.</th>
           <th>Unit Price(RM)</th>
           <th>Amount(RM)</th>
        </tr>
        <tr>
            <td>Deposit</td>
            <td style="text-align: center;">1</td>
            <td style="text-align: center;">{{ $deposit }}</td>
            <td style="text-align: right;">{{ $deposit }}</td>
        </tr>
        <tr>
            <td>{{ $bookingData->car->brand }} {{ $bookingData->car->model }} ({{ $totalBookingDays }} Days)</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;">{{ $bookingData->car->price }}</td>
            <td style="text-align: right;">{{ $rentTotal }}</td>
        </tr>
        <tr>
            <td>{{ $pickupPlace }}</td>
            <td style="text-align: center;"></td>
            <td style="text-align: center;">{{ $delivery_fee }}</td>
            <td style="text-align: right;">{{ $delivery_fee }}</td>
        </tr>
    </table>
    <div style="padding:30px;"></div>
    <table style="width:100%">
        <tr>
           <th style="text-align: left;">Subtotal</th>
           <th style="text-align: right;"></th>
        </tr>
        <tr>
            <td style="text-align: left;">Total (RM) :</th>
            <td style="text-align: right;">RM {{ $overallTotal }}</th>
        </tr>
    </table>
    <div style="padding:180px;"></div>
    <div style="font-size:11px">
        <table style="width:100%">
            <td style="text-align: left;">MOHAMAD ALHAZRIL</td>
            <td style="text-align: center;">014 5156 050 </td>
            <td style="text-align: center;">alrentalauto.com</td>
            <td style="text-align: right;">alcarrentalpasirgudang@gmail.com</td> 
        </table>
        <hr>
        <table style="width:100%">
            <td>ALCAR RENTAL<br>LOT 4, INKUBATOR BUKIT DAHLIA<br>81700, PASIR GUDANG<br>MALAYSIA</td>
            <td colspan="2">Account holder: Algemilang Enterprise</td>
            <td>Bank: Maybank Account No.: 55114646531049</td> 
        </table>
    </div>
</body>
</html>