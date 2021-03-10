@extends('layout.siswa')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('siswa.create') }}"> Create New Product</a>
            </div>
              <!-- Modal -->
<div class="modal fade" id="SiswaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>JK</th>
            <th>ID_Rombel</th>
            <th>ID_Rayon</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($siswa as $s)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $s->nis }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->alamat }}</td>
            <td>{{ $s->jk }}</td>
            <td>{{ $s->id_rombel }}</td>
            <td>{{ $s->id_rayon }}</td>
            
            <td>
                <form action="{{ route('siswa.destroy',$siswa->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('siswa.show',$siswa->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('siswa.edit',$siswa->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $siswa->links() !!} --}}
      
@endsection
