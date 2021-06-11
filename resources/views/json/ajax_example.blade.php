@extends('layouts.app')
@section('title', 'Ajax example')
@section('body')
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <table class="table table-striped" id="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Photo</th>
                  </tr>
                </thead>
                <tbody>
                 
                </tbody>
            </table>
            <div class="spinner-border text-primary" id="spinner" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div id="button-sec"></div>
        </div>
    </section>
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            loadItems(1);
        });

        function loadItems(page){
            $.ajax({
                url: 'https://affiliate-api.mytrueoffer.in/api/flipkart/offers',
                method: 'GET',
                data: {
                    page: page
                },
                beforeSend: function(){
                    $("#button-sec").html('');
                    $("#table tbody").html('');
                    $("#spinner").removeClass('d-none');
                },
                success: function(data){
                    var i = 1;
                    for(i; i <= data.last_page; i++){
                        var button = `<button class="btn btn-primary" onClick="loadItems(${i})">Load Page ${i}</button> `;
                        $("#button-sec").append(button)
                    }

                    for(i = 0; i < data.data.length; i++){
                        var item = data.data[i];
                        
                        var tr = '<tr>'+
                            '<td><a href="'+item.url+'" target="_blank">'+ item.name + '</a></td>' + 
                            '<td>'+ item.title + '</td>' + 
                            '<td>'+ item.description + '</td>' + 
                            '<td><img src="'+ item.photo_url + '"></td>' + 
                        '</tr>'

                        $("table tbody").append(tr)
                    }
                    $("#spinner").addClass('d-none');

                }
            })
        }
    </script>
@endsection

@section('stylesheet')
    <style>
        table img{
            max-width: 250px;
            max-height: 450px;
        }
    </style>

@endsection
    