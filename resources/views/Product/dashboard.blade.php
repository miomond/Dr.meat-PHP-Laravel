<x-sidebar></x-sidebar>
<div class="mainContent">


    <!-- My Box Content -->
    <div class="boxContent">
        <div class="firstRow">
            <div class="cardOne">

                    <h2>Total products</h2>
                        <table class="table">
                                      <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">image</th>
                                          <th scope="col">name</th>
                                          <th scope="col">bio</th>
                                          <th scope="col">price</th>

                                          </tr>
                                      </thead>

                                      <tbody>
                                          @foreach ($products as $item)
                                          <tr>

                                              <th scope="row">{{ $item->id }}</th>
                                                  <td><img src="{{ url('img/' . $item->image) }}" width="100px" height="100px"></td>
                                                  <td>{{ $item->name }}</td>
                                                  <td>{{ $item->bio }}</td>
                                                  <td>{{ $item->price }}</td>



                                                  <td></td></tr>  @endforeach</tbody>



            </div>
            <div class="secondRow">
                <div class="cardOne">
                    <p> <h2>recent users</h2>
                        <table class="table">
                                      <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">name</th>
                                          <th scope="col">email</th>
                                          <th scope="col">phone</th>
                                          <th scope="col">address</th>

                                          </tr>
                                      </thead>

                                      <tbody>
                                          @foreach ($users as $user)
                                          <tr>

                                              <th scope="row">{{ $user->id }}</th>
                                                  <td>{{ $user->name }}</td>
                                                  <td>{{ $user->email }}</td>
                                                  <td>{{ $user->phone }}</td>
                                                  <td>{{ $user->address }}</td>




                                                  <td></td></tr>  @endforeach</tbody></p>
                    <h3>98765</h3>
                </div>
            </div>


        <div class="thirdRow">
            
        </div>
    </div>
</div>

</body>




