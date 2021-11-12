@extends('base')


@section('content')


<div class="container index">
    <h1>Categories</h1>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr style="background: rgb(18,185,147); background: linear-gradient(90deg, rgba(18,185,147,1) 0%, rgba(252,0,255,1) 68%);">
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody class="table-striped">
                    <?php foreach($categories as $c): ?>
                        <tr>
                            <td><?= $c->id ?> </td>
                            <td><?= $c->category ?> </td>
                            <td><?= $c->description ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
