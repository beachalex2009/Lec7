@extends('layout.master')

@section('contant')
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"> Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach (range(1, 5) as $i)
                    <tr class="">
                        <td scope="row">{{ $i }}</td>
                       <td scope="row">{{ $key }}</td> --}}
                        {{-- <td>{{ $value }}</td> --}}
                    </tr>
                @endforeach

                @foreach ($sales as $key=>$value)
                <tr class="">
                    <td scope="row">{{ $key }}</td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
