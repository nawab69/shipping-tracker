<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <title>Invoice</title>

</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row justify-content-between">
                        <div class="col-12">
                            <div>{!!  DNS1D::getBarcodeHtml($data->tracking_no, 'c39'); !!}</div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Tracking no:  {{$data->tracking_no}}</h3>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h3>U-RICH</h3>
                        </div>
                    </div>


                    <div class="row pb-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">SHIPPER DETAILS</p>
                            <p class="mb-1 text-muted"><b>Shipper Name:</b> {{$data->shipper_name}} </p>
                            <p class="mb-1 text-muted"><b>Phone number:</b> {{$data->shipper_phone}} </p>
                            <p class="mb-1 text-muted"><b>Email:</b> {{$data->shipper_email}} </p>
                            <p class="mb-1 text-muted"><b>Address:</b> {{$data->shipper_address}} </p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">RECEIVER DETAILS</p>
                            <p class="mb-1 text-muted"><b>Receiver Name:</b> {{$data->receiver_name}} </p>
                            <p class="mb-1 text-muted"><b>Phone number:</b> {{$data->receiver_phone}} </p>
                            <p class="mb-1 text-muted"><b>Email:</b> {{$data->receiver_email}} </p>
                            <p class="mb-1 text-muted"><b>Address:</b> {{$data->receiver_address}} </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="border-0 text-uppercase small font-weight-bold">QTY</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">PIECE TYPE</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">WEIGHT</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data->packages as $pkg)
                                    <tr>
                                        <td>{{$pkg->qty}}</td>
                                        <td>{{$pkg->type}}</td>
                                        <td>{{$pkg->description}}</td>
                                        <td>{{$pkg->weight}}</td> KG
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

{{--                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">--}}
{{--                        <div class="py-3 px-5 text-right">--}}
{{--                            <div class="mb-2">Grand Total</div>--}}
{{--                            <div class="h2 font-weight-light">$234,234</div>--}}
{{--                        </div>--}}

{{--                        <div class="py-3 px-5 text-right">--}}
{{--                            <div class="mb-2">Discount</div>--}}
{{--                            <div class="h2 font-weight-light">10%</div>--}}
{{--                        </div>--}}

{{--                        <div class="py-3 px-5 text-right">--}}
{{--                            <div class="mb-2">Sub - Total amount</div>--}}
{{--                            <div class="h2 font-weight-light">$32,432</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>


