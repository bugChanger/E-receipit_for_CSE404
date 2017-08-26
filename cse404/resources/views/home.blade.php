@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>
            </br>

<body>
<h1 style="text-align: center;"></h1>
        <form action="store" method="post" align="center">
            <tr>
            <!-- {{ csrf_field() }} -->
            <label style="position:relative; width:200px;">Product Name: </label><input type="text" name="p_name" required></br>
            <label style="position:relative; width:200px;">Product Quantity: </label><input type="text" name="p_quan" required></br>
            <label style="position:relative; width:200px;">Product Price: </label><input type="text" name="p_price" required></br>
            <!-- <tr><td>Total:</td><td><input type="text" name="total" required></td></tr></br></br> -->

            <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
            <label ><input style="position:relative; width: 160px;
    float: right;
    margin-right: -180px;" type="submit" name="submit" ></label>
            </tr>
            
        </form>
    </body>
    </br>
                    </div>
        </div>
    </div>
</div>



@endsection