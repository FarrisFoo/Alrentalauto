<style type="text/css">
    #emailBody {
        background-color:#005DA8
    }
    #bodyTable {
        background-color:#EAEAEA !important;
        font-family:'Arial';
    }
    </style>
    
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
        <tr>
            <td align="center" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" width="600" id="emailContainer" >
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="1" cellspacing="0" width="100%">
                                <tr>
                                    <td align="left" valign="top">
                                        &nbsp; <!-- Leave it here generate free spaces -->
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td align="center" valign="top">
                                        <img src="{{ $message->embed(asset('assets/images/logo-icon.png')) }}" width="100">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="1" cellspacing="0" width="100%">
                                <tr>
                                    <td align="left" valign="top">
                                        &nbsp; <!-- Leave it here generate free spaces -->
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" id="emailBody" style="background-color:#ffffff;">
                                <tr>
                                    <td align="left" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td align="left" valign="top">
                                                    <img src="{{ $message->embed(asset('assets/images/booking-form-cover.png')) }}" width="100%">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top">
                                                    &nbsp; <!-- Leave it here generate free spaces -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top">
                                                    &nbsp; <!-- Leave it here generate free spaces -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <h3 style="color:#1f1f1f">
                                                        {{ $bookingDetails->customer->name }} Just Booked!
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top" style="color:#1f1f1f!important;padding-left: 20px;padding-right:20px;">
                                                    Here is the details for the booking made by {{ $bookingDetails->customer->name }}.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top">
                                                    &nbsp; <!-- Leave it here generate free spaces -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <h3 style="color:#1f1f1f">
                                                        Booking Details
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top" style="color:#1f1f1f!important">
                                                    <table border="1" cellpadding="0" cellspacing="0" width="90%">
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Selected Car
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                                {{ $bookingDetails->car->model }} | {{ $bookingDetails->car->plate_num }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Pickup Place
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                                @if ($bookingDetails->pickup_method == 0)
                                                                    Lot Inkubator PIJ, Taman Bukit Dahlia
                                                                @else
                                                                    @if ($bookingDetails->pickup_area == 1)
                                                                        Pasir Gudang
                                                                    @elseif ($bookingDetails->pickup_area == 2)
                                                                        Permas
                                                                    @elseif ($bookingDetails->pickup_area == 3)
                                                                        Johor Bahru
                                                                    @elseif ($bookingDetails->pickup_area == 4)
                                                                        Larkin
                                                                    @elseif ($bookingDetails->pickup_area == 5)
                                                                        {{ ucfirst($bookingDetails->area_outside_jb) }}
                                                                    @endif
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Destination
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                                {{ $bookingDetails->destination }}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top">
                                                    &nbsp; <!-- Leave it here generate free spaces -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <h3 style="color:#1f1f1f">
                                                        Pickup Details
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top" style="color:#1f1f1f!important">
                                                    <table border="1" cellpadding="0" cellspacing="0" width="90%">
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Pickup Date
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                                {{ $formatted_pickup_date }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Pickup Time
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                               {{ $formatted_pickup_time }}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top">
                                                    &nbsp; <!-- Leave it here generate free spaces -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <h3 style="color:#1f1f1f">
                                                        Return Details
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top" style="color:#1f1f1f!important">
                                                    <table border="1" cellpadding="0" cellspacing="0" width="90%">
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Return Date
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                                {{ $formatted_return_date }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Return Time
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                               {{ $formatted_return_time }}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top">
                                                    &nbsp; <!-- Leave it here generate free spaces -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <h3 style="color:#1f1f1f">
                                                        Customer Details
                                                    </h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top" style="color:#1f1f1f!important">
                                                    <table border="1" cellpadding="0" cellspacing="0" width="90%">
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Name
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                                {{ $bookingDetails->customer->name }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Ic Number
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                               {{ $bookingDetails->customer->ic_num }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Address
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                               {{ $bookingDetails->customer->address }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Phone Number
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                               {{ $bookingDetails->customer->phone_num }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Emergency Phone Number
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                               {{ $bookingDetails->customer->emergency_phone_num }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: lightgray;font-weight:600;padding-left: 10px;">
                                                                Occupation
                                                            </td>
                                                            <td style="padding-left: 10px;padding-right:10px;">
                                                                @if ($bookingDetails->customer->occupation == 1)
                                                                    Student
                                                                @elseif ($bookingDetails->customer->occupation == 2)
                                                                    Worker @ {{ $bookingDetails->customer->company_name }}
                                                                @elseif ($bookingDetails->customer->occupation == 3)
                                                                    Personal Business
                                                                @elseif ($bookingDetails->customer->occupation == 4)
                                                                    House Wife/Husband
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top">
                                                    &nbsp; <!-- Leave it here generate free spaces -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <h3 style="color:#1f1f1f">
                                                        Supporting Document
                                                    </h3>
                                                    <p style="color:#1f1f1f">
                                                        Supporting Document has been attached to the email below.
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr style="display:none;">
                                                <td align="center" valign="top" style="color:#1f1f1f!important">
                                                    <table border="1" cellpadding="0" cellspacing="0" width="90%">
                                                        <tr>
                                                            {{ $message->embed($bookingDetails->renter_license) }}
                                                        </tr>
                                                        <tr>
                                                            {{ $message->embed($bookingDetails->renter_license_back) }}
                                                        </tr>
                                                        <tr>
                                                            {{ $message->embed($bookingDetails->renter_ic) }}
                                                        </tr>
                                                        <tr>
                                                            {{ $message->embed($bookingDetails->renter_ic_back) }}
                                                        </tr>
                                                        <tr>
                                                            {{ $message->embed($bookingDetails->renter_selfie) }}
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top">
                                                    &nbsp; <!-- Leave it here generate free spaces -->
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top" style="padding-left: 20px;padding-right: 20px;font-size: 12px;">
                                                    This customer <span style="color: blue">{{ $bookingDetails->customer->name }}</span> with Ic Number <span style="color: blue">{{ $bookingDetails->customer->ic_num }}</span>
                                                    have read and agree on the <a href="#">Term and Condition</a> provided by our company <a href="#">Al CarRental</a>.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" valign="top">
                                                    &nbsp; <!-- Leave it here generate free spaces -->
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                            <table border="0" cellpadding="2" cellspacing="0" width="100%">
                                <tr>
                                    <td align="left" valign="top">
                                        &nbsp; <!-- Leave it here generate free spaces -->
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="middle" style="color:#1f1f1f!important;font-size:11px">
                                        Copyright &copy; {{ date('Y') }} AlCarRental Management
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top">
                                        &nbsp; <!-- Leave it here generate free spaces -->
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>