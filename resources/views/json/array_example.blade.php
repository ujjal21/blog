@extends('layouts.app')
@section('title', 'Complex Json example')
@section('body')
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Gurdian Name</th>
                    <th scope="col">Relation with Gurdian</th>
                    <th scope="col">Subjects</th>
                    <th scope="col">Full Marks</th>
                    <th scope="col">Total Marks</th>
                  </tr>
                </thead>
                <tbody>
                 
                </tbody>
            </table>
            <button type="button" id="loadTable" class="btn btn-primary">Load Table</button>
            <button type="button" id="clearTable" class="btn btn-danger">Clear Table</button>
        </div>
    </section>
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            var json = {
                totalItems: 10,
                totalPages: 2,
                currentPage: 1,
                items: [
                    {
                        name: 'Ram',
                        standard: 5,
                        gurdian: {
                            name: 'Gurdian 1',
                            relation: 'Father'
                        },
                        subjects: [
                            {
                                name: 'Bengali',
                                fullMarks: 100,
                                marksObtained: 70
                            },
                            {
                                name: 'English',
                                fullMarks: 100,
                                marksObtained: 80
                            },
                            {
                                name: 'Math',
                                fullMarks: 100,
                                marksObtained: 90
                            }
                        ]
                    },
                    {
                        name: 'Laxman',
                        standard: 4,
                        gurdian: {
                            name: 'Gurdian 2',
                            relation: 'Mother'
                        },
                        subjects: [
                            {
                                name: 'Bengali',
                                fullMarks: 50,
                                marksObtained: 42
                            },
                            {
                                name: 'English',
                                fullMarks: 50,
                                marksObtained: 37
                            },
                            {
                                name: 'Math',
                                fullMarks: 50,
                                marksObtained: 43
                            }
                        ]
                    },
                    {
                        name: 'Bharat',
                        standard: 4,
                        gurdian: {
                            name: 'Gurdian 3',
                            relation: 'Uncle'
                        },
                        subjects: [
                            {
                                name: 'Bengali',
                                fullMarks: 50,
                                marksObtained: 38
                            },
                            {
                                name: 'English',
                                fullMarks: 50,
                                marksObtained: 41
                            },
                            {
                                name: 'Math',
                                fullMarks: 50,
                                marksObtained: 39
                            }
                        ]
                    },
                    {
                        name: 'Sita',
                        standard: 3,
                        gurdian: {
                            name: 'Gurdian 4',
                            relation: 'Father'
                        },
                        subjects: [
                            {
                                name: 'Bengali',
                                fullMarks: 50,
                                marksObtained: 46
                            },
                            {
                                name: 'English',
                                fullMarks: 44,
                                marksObtained: 30
                            },
                            {
                                name: 'Math',
                                fullMarks: 50,
                                marksObtained: 38
                            }
                        ]
                    },
                    {
                        name: 'Gita',
                        standard: 3,
                        gurdian: {
                            name: 'Gurdian 4',
                            relation: 'Father'
                        },
                        subjects: [
                            {
                                name: 'Bengali',
                                fullMarks: 50,
                                marksObtained: 30
                            },
                            {
                                name: 'English',
                                fullMarks: 50,
                                marksObtained: 30
                            },
                            {
                                name: 'Math',
                                fullMarks: 50,
                                marksObtained: 35
                            }
                        ]
                    }
                ]
            }
            $("#clearTable").click(function(){
                $("table tbody tr").remove();
            });

            $("#loadTable").click(function(){
                for(var i=0; i < json.items.length; i++){
                    var currentItem = json.items[i];
                    var subjectText = '';
                    var totalObtainMarks = 0;
                    var fullMarks = 0;
                    for(var j = 0; j < currentItem.subjects.length; j++){
                        var sub = currentItem.subjects[j];
                        subjectText = subjectText + 'Subject: ' + sub.name + ' Marks Obtain: ' + sub.marksObtained + '(FM: ' + sub.fullMarks + ')<br>';
                        totalObtainMarks += sub.marksObtained;
                        fullMarks +=  sub.fullMarks;
                    }
                    var data = "<tr>"+
                        "<td>"+ ($("table tbody tr").length + 1) +"</td>"+
                        "<td>"+currentItem.name+"</td>"+
                        "<td>"+currentItem.standard+"</td>"+
                        "<td>"+currentItem.gurdian.name+"</td>"+
                        "<td>"+currentItem.gurdian.relation+"</td>"+
                        "<td>"+subjectText+"</td>"+
                        "<td>"+fullMarks+"</td>"+
                        "<td>"+totalObtainMarks+"</td>"+
                    "</tr>";

                    $("table tbody").append(data);
                }
            });

            
        });
    </script>
@endsection
    