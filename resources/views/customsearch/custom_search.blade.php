
 @extends('layouts.app')
<html>
<body>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MiFi</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" defer></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" defer></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js" defer></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" defer></script>
 </head>
  <div class="container">    
     
            <br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                    <select name="filter_genre" id="filter_genre" class="form-control" required>
                    <option value="">Select Genre</option>
                    @foreach($genre as $genre)

                    <option value="{{ $genre->genre}}">{{ $genre->genre}}</option>
                    
                    @endforeach
                </select>
                    </div>
                    <div class="form-group">
                    <select name="filter_rating" id="filter_rating" class="form-control" required>
                    <option value="">Select rating</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                    </div>
                    
                    <div class="form-group" align="center">
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

                        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br />
   <div class="table-responsive">
  
    <table id="film_data" class="table table-bordered table-striped text-white" >
                    <thead>
                        <tr>
                            <th>Nama Film</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
                    
   </div>
            <br />
            <br />
  </div>
 </body>
</html>
@section('script')
<script type="text/javascript">
$(document).ready(function(){

fill_datatable();

function fill_datatable(filter_genre = '', filter_rating = '')
{
    var dataTable = $('film_data').DataTable({
        processing: true,
        serverSide: true,
        ajax:{
            url: "{{ route('customsearch.index') }}",
            data:{filter_genre:filter_genre, filter_rating:filter_rating}
        },
        columns: [
            {
                data:'name_film',
                name:'name_film'
            },
            {
                data:'review',
                name:'review'
            },
            {
                data:'genre',
                name:'genre'
            },
            {
                data:'rating',
                name:'rating'
            },
            {
                data:'picture',
                name:'picture'
            }
        ]
    });
}

$('#filter').click(function(){
    var filter_genre = $('#filter_genre').val();
    var filter_rating = $('#filter_rating').val();

    if(filter_genre != '' &&  filter_genre != '')
    {
        $('#film_data').DataTable().destroy();
        fill_datatable(filter_genre, filter_rating);
    }
    else
    {
        alert('Select Both filter option');
    }
});

$('#reset').click(function(){
    $('#filter_genre').val('');
    $('#filter_rating').val('');
    $('#film_data').DataTable().destroy();
    fill_datatable();
});

});
</script>
@endsection