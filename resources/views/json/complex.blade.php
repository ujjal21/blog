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
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address">
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
                    address: 'Abada'
                },
                ujjal: {
                    name: 'Ujjal',
                    address: 'Nalpur'
                }
            }

            $("#ramen").click(function(){
                $("#name").val(json.ramen.name);
                $("#address").val(json.ramen.address);
            });

            $("#ujjal").click(function(){
                $("#name").val(json.ujjal.name);
                $("#address").val(json.ujjal.address);
            });
        });
    </script>
@endsection
    