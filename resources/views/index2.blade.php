@extends('layouts.accountant')
@section('content')
<div style="margin:30px">
<div id="jsGrid"></div>
</div>

<script>

    // csrf token
        $.ajaxSetup({
           headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        }); 

    var clients = {!! $accountant !!};
 
    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",
 
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        
        controller: {
            insertItem: function(item){
                return $.ajax({
                    type: "POST",
                    url: "/insert",
                    data: item,
                    success: function (data) {
                        alert("Added Successfully");
                    },
                    error: function (data) {
                        alert("Error");
                    }

                })
            },

            updateItem: function(item){
                var id = item.id;
                return $.ajax({
                    type: "PUT",
                    url: "/update"+"/"+id,
                    data: item
                })
            },

            deleteItem: function(item){
                var id = item.id;
                return $.ajax({
                    type: "DELETE",
                    url: "/delete"+"/"+id,
                    data: item
                })
            },


        },

        data: clients,
 
        fields: [
            { name: "name", type: "text", width: 150, validate: "required" },
            { name: "age", type: "number", width: 50 },
            { name: "address", type: "text", width: 200 },
            { name: "email", type: "text", width: 200 },
            { name: "company", type: "text", width: 200 },
            
            { type: "control" }
        ]
    });
</script>
@endsection