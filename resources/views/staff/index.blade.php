@extends('layout')

@section('content')
    <h1 class="mb-4">Mitarbeiter Übersicht</h1>
    <div class="row">
        <!-- Linke Spalte: Mitarbeiterliste -->
        <div class="col-12 col-md-4">
            @foreach ($staff as $person)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="#details-{{ $person->staffId }}"
                               class="text-decoration-none"
                               data-bs-toggle="collapse"
                               role="button"
                               aria-expanded="false"
                               aria-controls="details-{{ $person->staffId }}">
                                {{ $person->lastName }}, {{ $person->firstName }}
                            </a>
                        </h5>
                        <small class="text-muted">({{ $person->weeklyHours }} Stunden/Woche)</small>
                        <p class="card-text">
                            <strong>Vertragsbeginn:</strong> {{ $person->startDate->format('d.m.Y') }}<br />
                            <strong>Vertragsende:</strong> {{ $person->endDate ? $person->endDate->format('d.m.Y') : "laufend" }}<br />
                            <strong>Letzte Aktualisierung:</strong> {{ $person->lastChangeDate ? $person->lastChangeDate->format('d.m.Y') : 'nie' }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Rechte Spalte: Tabelle -->
        <div class="col-12 col-md-8">
            <div class="accordion" id="staffAccordion">
                @foreach ($staff as $person)
                    <div id="details-{{ $person->staffId }}" class="accordion-collapse collapse" data-bs-parent="#staffAccordion">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $person->lastName }}, {{ $person->firstName }}</h4>
                                <small class="text-muted">({{ $person->weeklyHours }} Stunden/Woche)</small>
                            </div>
                            <div class="card-body">
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
    </div>
@endsection
