@extends('layout')

@section('content')
    <h1 class="mb-4">Mitarbeiter Übersicht</h1>
    <div class="row">
        <!-- Linke Spalte: Mitarbeiterliste -->
        <div class="col-12 col-md-4">
            <div class="list-group">
                @foreach ($staff as $person)
                    <a href="#details-{{ $person->staffId }}"
                       class="list-group-item list-group-item-action"
                       data-bs-toggle="collapse"
                       data-bs-target=".collapse.show, #details-{{ $person->staffId }}"
                       role="button"
                       aria-expanded="false"
                       aria-controls="details-{{ $person->staffId }}">
                        {{ $person->lastName }}, {{ $person->firstName }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Rechte Spalte: Tabelle -->
        <div class="col-12 col-md-8">
            @foreach ($staff as $person)
                <div id="details-{{ $person->staffId }}" class="collapse">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $person->lastName }}, {{ $person->firstName }}</h4>
                            <small class="text-muted">({{ $person->weeklyHours }} Stunden/Woche)</small>
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>Vertragsbeginn:</strong> {{ $person->startDate->format('d.m.Y') }}<br />
                                <strong>Vertragsende:</strong> {{ $person->endDate ? $person->endDate->format('d.m.Y') : "laufend" }}<br />
                                <strong>Letzte Aktualisierung:</strong> {{ $person->lastChangeDate ? $person->lastChangeDate->format('d.m.Y') : 'nie' }}
                            </p>
                            <h6>Verlauf der Wochenstunden</h6>
                            <table class="table table-bordered table-sm">
                                <thead class="table-light">
                                <tr>
                                    <th>Gültig ab</th>
                                    <th>Wochenstunden</th>
                                    <th>Geändert durch</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($person->history->sortByDesc('validFrom') as $entry)
                                    @foreach ($entry->changedFields->where('fieldName', 'weeklyHours') as $field)
                                        <tr>
                                            <td>{{ $entry->validFrom->format('d.m.Y') }}</td>
                                            <td>{{ $field->newValue }} Stunden</td>
                                            <td>{{ $entry->changeName }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                                <tr>
                                    <td>{{ $person->startDate->format('d.m.Y') }}</td>
                                    <td>{{ $person->initialWeeklyHours }} Stunden</td>
                                    <td>system (Bei Erstellung)</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
