@extends('layout')

@section('content')
    <h1 class="mb-4">Mitarbeiter Übersicht</h1>
    <div class="row">

        <!-- Rechte Spalte: Tabelle -->
        <div class="col-12">
            <div class="accordion" id="staffAccordion">
                @foreach ($staff as $person)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-{{ $person->staffId }}">
                            <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#details-{{ $person->staffId }}"
                                    aria-expanded="false"
                                    aria-controls="details-{{ $person->staffId }}">
                                {{ $person->lastName }}, {{ $person->firstName }}
                            </button>
                        </h2>
                        <div id="details-{{ $person->staffId }}"
                             class="accordion-collapse collapse"
                             aria-labelledby="heading-{{ $person->staffId }}"
                             data-bs-parent="#staffAccordion">
                            <div class="accordion-body">
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
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
