@extends('layouts.app')
@section('content')
<div class="flex-lg-1 h-screen overflow-y-lg-auto">
    @include('users._show_header')
    <main class="py-6 bg-surface-secondary">
        <div class="container-fluid max-w-screen-xl">
            <div class="row g-6">
                <div class="col-xl-8">
                    <div class="vstack gap-6">
                        <form method="POST" action="{{ route('users.force_delete', $user->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-danger mb-2">Deactivate account</h4>
                                <p class="text-sm text-muted mb-4">
                                    Permanently remove your account and all of its
                                    contents. This action is not reversible – please be certain.
                                </p>
                                <button onclick="return confirm('Are you sure you want to delete ?')" type="submit" class="btn btn-sm btn-danger">Delete {{ $user->name }}'s account</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4">
                    @include('users._show_right_sidebar')
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
