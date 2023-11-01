@extends('agent.agent_dashboard')
@section('agent')

@php
$id = Auth::user()->id;
$data = App\Models\User::find($id);

@endphp

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="#">Special pages</a></li> --}}
                <li class="breadcrumb-item active" aria-current="page">Schedule</li>
            </ol>
        </nav>

        <div class="row col-md-12">
            <div class="col-md-8">
    <div class="card">
       <h5 class="card-title">Schedule Requets Details</h5>
        <form method="post" action="{{ route('agent.update.schedule') }}">
            @csrf
<input type="hidden" name="id" value="{{$schedule->id}}">
<input type="hidden" name="email" value="{{$schedule->user->email}}">


            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    {{-- <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Progress</th>
                            <th>Salary</th>
                            <th>Start date</th>
                        </tr>
                    </thead> --}}
                    <tbody>
                        <tr>
                            <td>Username</td>
                            <td>{{ $schedule->user->name }}</td>
                        </tr>
                        <tr>

                            <td>Property Name</td>
                            <td>{{ $schedule->property->property_name }}</td>
                        </tr>
                        <tr>

                            <td>Tour Date</td>
                            <td>{{ $schedule->tour_date }}</td>
                        </tr> <tr>

                            <td>Tour Time</td>
                            <td>{{ $schedule->tour_time }}</td>
                        </tr> <tr>

                            <td>Message</td>
                            <td>{{ $schedule->message}}</td>
                        </tr> <tr>

                            <td>Request Time</td>
                            <td>{{ $schedule->created_at->format('l M d Y') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

<br><br>

<button type="submit" class="btn btn-success">Request Confirm</button>
<br><br>
    </div>
</form>
            </div>
        </div>
    </div>
















@endsection
