@extends('user')

@section('user')

<!-- CSS DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<!-- Custom CSS -->
<style>
    .content {
        min-height: 100vh;
        padding: 20px 0;
        background-color: #f5f5f5;
    }
    
    .card {
        min-height: calc(100vh - 200px); /* Mengurangi tinggi header dan margin */
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .card-body {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .table-responsive {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .header-section {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }
    
    .table thead th {
        position: sticky;
        top: 0;
        background-color: #212529;
        z-index: 1;
    }
    
    #groupTable_wrapper {
        flex: 1;
    }
    
    .btn-primary {
        padding: 10px 30px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>

<!-- JS Dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<main class="content">
    <div class="container">
        <div class="header-section">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="m-0">GROUP ATLET</h2>
                <a href="{{ route('login') }}" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt me-2"></i>Login
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive py-3">
                    <table id="groupTable" class="table table-striped table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">NAMA ATHLETE</th>
                                <th class="text-center">AREA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->area }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>            
            </div>
        </div>
    </div>
</main>

<script>
$(document).ready(function() {
    $('#groupTable').DataTable({
        pageLength: 10,
        scrollY: 'calc(100vh - 400px)', // Mengatur tinggi scroll tabel
        scrollCollapse: true,
        language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data per halaman",
            zeroRecords: "Data tidak ditemukan",
            info: "Menampilkan halaman _PAGE_ dari _PAGES_",
            infoEmpty: "Tidak ada data yang tersedia",
            infoFiltered: "(difilter dari _MAX_ total data)",
            paginate: {
                first: "Pertama",
                last: "Terakhir",
                next: "Selanjutnya",
                previous: "Sebelumnya"
            },
        }
    });
});
</script>

@endsection