@extends('layout')

@section('content')
    <h1 class="mb-4">Verlauf der Wochenstunden</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $staff->firstName }} {{ $staff->lastName }}</h5>
            <p class="card-text">
                <strong>Aktuelle Wochenstunden:</strong> {{ $staff->weeklyHours }}
            </p>
        </div>
    </div>

    <table class="table mt-4">
        <thead class="table-dark">
        <tr>
            <th>Gültig ab</th>
            <th>Gültig bis</th>
            <th>Änderungsdatum</th>
            <th>Geändert durch</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($history as $entry)
            <tr>
                <td>{{ $entry->validFrom }}</td>
                <td>{{ $entry->validTo ?? 'Aktuell' }}</td>
                <td>{{ $entry->changeDate }}</td>
                <td>{{ $entry->changeName }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('staff.index') }}" class="btn btn-secondary mt-3">Zurück zur Übersicht</a>
@endsection
