@extends('layouts.navadmin')

@section('content')

        <div class="content">
            <div class="title">
                <svg>
                    <rect>
                </svg>
                <p>Dashboard</p>
            </div>
            
            <!--content card-->
            <div>
                <div class="card-deck">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">View Total</h5>
                        <p class="card-text">167,931</p>
                        {{-- <p class="card-text inc">increased by <span>30%</span></p> --}}
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Total Articles</h5>
                        <p class="card-text">7</p>
                        {{-- <p class="card-text inc">increased by <span>100%</span></p> --}}
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Total Insight</h5>
                        <p class="card-text">185,453</p>
                        {{-- <p class="card-text inc">increased by <span>40%</span></p> --}}
                      </div>
                    </div>
                  </div>
            </div>

            <!--content table-->
            <div class="content-table">
                <div class="margin">
                    <div class="title">
                        <h5>Articles</h5>
                        <button class="btn-green">Add New Article</button>
                    </div>
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">Tiitle</th>
                            <th scope="col">Date Post</th>
                            <th scope="col">Posted by</th>
                            <th scope="col">Views</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><button class="btn-green">EDIT</button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><button class="btn-green">EDIT</button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
