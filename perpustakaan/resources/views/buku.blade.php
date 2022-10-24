@extends('template')
@section('buku')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Buku</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Koleksi Buku Perpustakaan</h5>
                  <a href="bukuAdd" class="btn btn-primary">Tambah Buku</a>
                  <!-- Default Table -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Sinopsis</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- <tr>
                        <th scope="row">1</th>
                        <td>Brandon Jacob</td>
                        <td>Designer</td>
                        <td>28</td>
                        <td>2016-05-25</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Bridie Kessler</td>
                        <td>Developer</td>
                        <td>35</td>
                        <td>2014-12-05</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Ashleigh Langosh</td>
                        <td>Finance</td>
                        <td>45</td>
                        <td>2011-08-12</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Angus Grady</td>
                        <td>HR</td>
                        <td>34</td>
                        <td>2012-06-11</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Raheem Lehner</td>
                        <td>Dynamic Division Officer</td>
                        <td>47</td>
                        <td>2011-04-19</td>
                      </tr> --}}
                    </tbody>
                  </table>
                  <!-- End Default Table Example -->
                </div>
              </div>
            </div>
          </div>
    </section>

  </main><!-- End #main -->
@endsection