@extends('layouts.app')

@push('scripts')
  <script src="myscript.js"></script>
@endpush
@section('body')
  @parent
  <h2>This body content from jobs page</h2>
@endsection
@push('styles')
  {{-- <link rel="stylesheet" href="jobstyle.css"> --}}
@endpush
