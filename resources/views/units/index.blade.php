@extends('base')


@section('content')


<div class="container index">
    <h1>Units</h1>
        <table class="table table-bordered table-striped table-sm">
            <thead>
                <tr style="background: rgb(18,185,147); background: linear-gradient(90deg, rgba(18,185,147,1) 0%, rgba(252,0,255,1) 68%);">
                        <th>Unit ID</th>
                        <th>Unit Type</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($units as $u): ?>
                        <tr>
                            <td><?= $u->id ?> </td>
                            <td><?= $u->unit_type ?> </td>
                            <td><?= $u->description ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
