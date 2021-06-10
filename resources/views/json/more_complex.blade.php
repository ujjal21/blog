@extends('layouts.app')
@section('title', 'Complex Json example')
@section('body')
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="village" class="col-sm-2 col-form-label">Village</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="village">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="po" class="col-sm-2 col-form-label">Post Office</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="po">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="pin" class="col-sm-2 col-form-label">PIN Code</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pin">
                </div>
            </div>
            <button type="button" id="ramen" class="btn btn-primary">Show Ramen</button>
            <button type="button" id="ujjal" class="btn btn-primary">Show Ujjal</button>
        </div>
    </section>
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            var json = {
                ramen: {
                    name: 'Ramen',
                    address: {
                        village: 'Abada',
                        po: 'Sankrail',
                        pin: 711313
                    }
                },
                ujjal: {
                    name: 'Ujjal',
                    address: {
                        village: 'Betiary',
                        po: 'Nalpur',
                        pin: 711310
                    }
                }
            }

            $("#ramen").click(function(){
                $("#name").val(json.ramen.name);
                $("#village").val(json.ramen.address.village);
                $("#po").val(json.ramen.address.po);
                $("#pin").val(json.ramen.address.pin);
            });

            $("#ujjal").click(function(){
                $("#name").val(json.ujjal.name);
                $("#village").val(json.ujjal.address.village);
                $("#po").val(json.ujjal.address.po);
                $("#pin").val(json.ujjal.address.pin);
            });
        });
    </script>
@endsection
    