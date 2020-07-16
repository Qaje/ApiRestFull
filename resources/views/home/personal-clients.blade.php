@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> {{--passport-personal-access-tokens></passport-personal-access-tokens> --}}
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">{{ __('Passport Clients') }}</div>
                <div class="card-body">
                    <passport-clients></passport-clients>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
            

