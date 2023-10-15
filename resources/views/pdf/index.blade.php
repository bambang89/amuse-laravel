<!DOCTYPE html>
<html>
    <head>
        <title>Laporan Summary Rimbursement</title>
        <!-- Responsive styles-->
	    <link rel="stylesheet" href="{{ asset('/public/amuse/css/responsive.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            .logo {
                padding: 22px 0;
                text-align: left;
                padding-left: 15px;
            }
            .logo img{
                width: 250px !important;
                background-size: contain !important;
            }
            th{
                width: 150px !important;
            }
        </style>
    </head>
    <body>
        <div class="logo">
            <img src="{{ url('/public/amuse/images/logoamuse/amuse_logo.png') }}" alt="" height="100" width="250">
        </div>

        <div style="margin: 0px 55px;">
            <h2>REGISTER CONGRESS & WEBINAR</h2>
            <div class="table-responsive-sm" style="margin-left:40px; width: 450px;text-align: left;">
                <table class="table table-borderless">
                    <tr>
                    <th>Name:</th>
                    <td>{{ $response->fullname }}</td>
                    </tr>
                    <tr>
                    <th>Email:</th>
                    <td>{{ $response->email }}</td>
                    </tr>
                    <tr>
                    <th>Mobile Phone:</th>
                    <td>{{ $response->phone }}</td>
                    </tr>
                    <tr>
                    <th>Occupation:</th>
                    <td>{{ $response->occupation }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div style="padding-left:80px">
            <div style="border: solid red 2px;width: 300px; height: 300px; display: flex; justify-content: center; align-items: center;">
                <img src="{{ url('/public/img/proof/'.$response->proof_img) }}" alt="" height="290">
            </div>
            <div style="width: 500px; text-align: center; border: solid red 2px; margin-top: 20px">
                <h4 style="margin: 10px auto;">TELAH DIBAYARKAN</h4>
            </div>
        </div>
    </body>
</html>