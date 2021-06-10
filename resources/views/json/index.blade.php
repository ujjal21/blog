@extends('layouts.app')
@section('title', 'Json example')
@section('body')
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Simple Json example.</h2></div>
                <div class="col-lg-6">
                    <div class="mb-3 row">
                        <label for="inputId" class="col-sm-2 col-form-label">Input</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="inputId">
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-2">
                    <button type="button" id="showName" class="btn btn-primary mb-3">Show Name</button>
                    <button type="button" id="showPhone" class="btn btn-primary mb-3">Show Phone</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            var json = {
                name: "Ramen",
                phone: 8420874979
            }

            $("#showName").click(function(){
                $("#inputId").val(json.name);
            });

            $("#showPhone").click(function(){
                $("#inputId").val(json.phone);
            });
        });
    </script>
@endsection
    