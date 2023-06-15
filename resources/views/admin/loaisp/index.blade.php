@extends('templates.admin.master')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Loại sản phẩm</h1>
            <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Loại sản phẩm</li>
                <li class="breadcrumb-item active">Danh sách loại sản phẩm</li>
            </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
            <div class="col-lg-12">

                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách loại sản phẩm</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên loại</th>
                                <th scope="col">Thứ tự</th>
                                <th scope="col">Ẩn hiện</th>
                                <th scope="col" class="text-end">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($loaisp as $row)
                                <tr>
                                    <td class="align-middle"> {{$row->idLoai}} </td>
                                    <td class="align-middle"> {{$row->tenLoai}} </td>
                                    <td class="align-middle"> {{$row->thuTu}} </td>
                                    <td class="align-middle">
                                        {{$row->anHien}}
                                    </td>
                                    <td class="align-middle text-end">
                                        <form action="/admin/loaisp/index/{{$row->idLoai}}" method="post">
                                            <a href="/admin/loaisp/index/{{$row->idLoai}}/edit" class="btn btn-primary">Sửa</a>            
                                            <button class="btn btn-danger" type="submit">Xóa</button>
                                            @csrf  @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                    <div> {{ $loaisp->onEachSide(5)->links()}} </div> 
                    <!-- End Table with stripped rows -->

                </div>
                </div>

            </div>
            </div>
        </section>
    </main><!-- End #main -->

@endsection